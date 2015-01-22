i wish to do.(iwishtodo - pure laravel 4.2 )

It is a wishlist application with laravel 4.2. 
It will be a pure-laravel app without any javascript or jquery.

This app features user to register and login.
Then registered user can create their wishlist, update (before done), checked done, delete (before done)
****
Step 1:

Installing Laravel via Composer

composer create-project laravel/laravel iwishtodo --prefer-dist

Step 2: 
cd iwishtodo
open the composer.json
	"require": {
		"laravel/framework": "4.2.*"
	},
	
	add to dependencies for email and generators boilerplate 
	
	"require": {
		"laravel/framework": "4.2.*",
		"guzzlehttp/guzzle": "~4.0",
		"way/generators": "~3.0"
	},	

	
Next run the composer install command at root of iwishtodo directory
This command will download and install the framework's dependencies.

Step 3:

Edited the HomeController for the index or home, register and login routes.
And create the respective views with blade templating

Step 4:

We will need 2 tables user and wish. We create the User and Wish Models for that. Whereas UserController and WishController handel all the routes. WishController is a resource route which gives us the rest interface.