My Demo Site - Installation and Configuration.
==============================================

My Demo Site is a simple web application in which a visitor can leave a message with it's email for reply and a section where the administrators can access to view the messages received.

There are three sections: 

-The front page on which anyone can leave a message.
-The login page on which any visitor will be redirected if tries to enter the administrator page or if access directrly to the login section.
-The admninistrator page where a user with administrator privileges can see and query the messages received.

===============================================

Installation:

This is a quick guide to install and configure the "My Demo Site" application.

>Composer installation.
-----------------------
Composer is a dependency management library for PHP. You can download it on command line anywhere inside your local computer as:

$ curl -s https://getcomposer.org/installer | php

If you do not have curl installed please follow the instructions in the following web:

http://curl.haxx.se/docs/install.html

>Install app.
-------------

To install the MyWeb app just go to your web root directory and run:

$ php composer.phar install

>Preparing the database.
------------------------

First you have to create the database, in order to do so go to the root directory of the app and type:

$ php app/console doctrine:database:create

Then in order to create the tables type:

$ php app/console doctrine:schema:update --force

>Adding users to the database.
------------------------------

$ php app/console fos:user:create testuser test@example.com p@ssword

> Activate user.
----------------

$ php app/console fos:user:activate testuser

> Promote user.
---------------

$ php app/console fos:user:promote testuser ROLE_ADMIN

You can follow further instructions for demote or change password at: 
https://github.com/FriendsOfSymfony/FOSUserBundle/blob/master/Resources/doc/command_line_tools.md

> Clear the cache.
------------------

$ app/console cache:clear && app/console cache:clear --env=prod