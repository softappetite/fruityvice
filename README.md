<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Advanced Project Template</h1>
    <br>
</p>

Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![build](https://github.com/yiisoft/yii2-app-advanced/workflows/build/badge.svg)](https://github.com/yiisoft/yii2-app-advanced/actions?query=workflow%3Abuild)


Installation Guidelines
-------------------
Step#1: download source

copy the repo in local enviroment

github repo url: git@github.com:softappetite/fruityvice.git

Step#1: initialize project

run this following command

php init
(it will ask evn. you can select "0" for dev mode and replace all config file by selecting "all")

Step#3: database config

Adjust the components['db'] configuration in common/config/main-local.php accordingly.

    'dsn' => 'mysql:host=mysql;dbname=fruityvice',
    'username' => 'root',
    'password' => 'secret',



Step#4: migrate the database using following command

php yii migrate

Step#5: run the following command to run the application  ( you can change the port according to your need)

php yii serve --docroot="@frontend/web" --port=8888


Step#6: import all Fruits data from fruityvice.com using following command

php yii fruits/fetch


now copy and paste the following two urls into browser to view Fruits List and Fruits Favourites List

#1 http://localhost:8888/index.php?r=fruits/index
#2 http://localhost:8888/index.php?r=fruits/fav

you can also access this two url from top Nav menu

you are done!

Thank you!

DIRECTORY STRUCTURE
-------------------


common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
