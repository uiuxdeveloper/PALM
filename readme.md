## Laravel PHP Framework

[![Build Status](https://img.shields.io/travis/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Version](https://img.shields.io/github/tag/laravel/framework.svg)](https://github.com/laravel/framework/releases)
[![Dependency Status](https://www.versioneye.com/php/laravel:framework/badge.svg)](https://www.versioneye.com/php/laravel:framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)


### Server Settings

1. Download [WAMP](http://www.wampserver.com/en/).
2. After installation, make sure Port 80 is not used.
3. Pull WasabiBlade project from BitBucket.
4. Install [Composer](https://getcomposer.org/)
5. Open console and change directory to WasabiBlade project.
6. Run 'composer install'.
7. Go to 'C:\wamp\bin\apache\apache2.4.9\conf\extra' and open 'httpd-vhosts.conf'
8. Add the following:
	<VirtualHost *:80>
		DocumentRoot "C:/wamp/www/wasabiblade/public"
		ServerName wasabiblade.dev
		<Directory "C:/wamp/www/wasabiblade/public">
			Options Indexes FollowSymLinks
			AllowOverride All
		</Directory>
	</VirtualHost>
9. Add below host setting
	127.0.0.1 wasabiblade.dev
10. Run the App!