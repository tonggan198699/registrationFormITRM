<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('title',['mr','mrs','miss','ms','dr'])->after('id');
            $table->string('forename')->nullable()->after('title');
            $table->string('surname')->nullable()->after('forename');
            $table->date('dob')->after('surname')->nullable();
            $table->enum('gender',['male','female'])->after('dob');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('forename');
            $table->dropColumn('surname');
            $table->dropColumn('dob');
            $table->dropColumn('gender');
        });
    }
}
