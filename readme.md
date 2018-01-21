## ITRM registration form 

#Scenario

You are working in a team of backend developers in a project to build a website for our client, You've been assigned the following task.

#Objective

Use TDD approach to create a simple registration and login form (we use laravel framework in the office, but you are not limited to this)

We have provided a basic test framework which is described in the setup section. You are not limited to this framework.

#Setup

Clone the repository and run from the within the projects base directory

- composer install
Run the following to run the tests; you should see phpunit output of 1/1 100% successful test

- ./vendor/bin/phpunit

#Specification

- Users should be able to register by providing the following details
	- email (required)
	- password(required, confirm password in some way)
	- title (Mr,Mrs,Miss,Ms,Dr)
	- forename
	- surname
	- dob
	- gender
-User data should be validated and stored (You choose how the data is stored)
-User should be able to login after registering, and see their details

#Application pictures

To register
<p align="center"><img src="https://image.ibb.co/ghTU6w/itrm1.jpg"></p>

After registration
<p align="center"><img src="https://image.ibb.co/hswfeG/itrm2.jpg"></p>

Simple details page
<p align="center"><img src="https://image.ibb.co/mWQdYb/itrm3.jpg"></p>
