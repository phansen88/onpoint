# onpoint

## Latest versions

N/A

## What does it do?

N/A

## Install



1. [Install PHP](https://www.apachefriends.org/index.html) a server side scripting language which is used to develop web applications.
2. `Enable extension=mysqli in PHP.ini` so the app can connect to a MySQL-database.
3. [Install composer](https://getcomposer.org/download/) the package manager used by modern PHP applications. It's used to manage Dependencies and to install Components in PHP projects.
4. [Install yarn](https://yarnpkg.com/lang/en/docs/install/) the JavaScript package manager.

## How to use it

1. Clone the repo `git clone https://github.com/phansen88/onpoint.git`.
2. Open a terminal/cmd and cd the directory.
3. You'll probably also need to customize or create your [.env](https://symfony.com/doc/current/configuration.html#config-dot-env).
4. Run `composer install` in your terminal or cmd.
5. Run `yarn install` in your terminal or cmd.
6. Run `yarn encore dev` to compile the SCSS and JS dependencies into single files that is used by the templates.
7. Run `php bin/console about` to create a local webserver that can run our application. The Application can be accessed at http://127.0.0.1:8000.

## Browser support

N/A

## Acknowledgements

N/A