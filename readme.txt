## If you are building a traditional web application:
- symfony new --webapp my_project

## If you are building a microservice, console application or API:
- symfony new my_project

## installl everything
- symfony require annotations

## make controller
- symfony console make:controller MoviesController

- composer require laminas/laminas-console

- composer require maker
- symfony server:start -d

==================================
database:

- symfony console
- symfony console list doctrine
- symfony console doctrine:database:create

- composer require symfony/orm-pack
- composer require --dev symfony/maker-bundle

- composer recipes

- symfony console make:entity Movie

//about add relationship jsut give type as ManyToMany instead of string or int

// to add new field just run the "symfony console make:entity Movie" command and add new

# make migration:
- symfony console make:migration

# migrate:
- symfony console doctrine:migrations:migrate


# dummy data:
- composer require --dev doctrine/doctrine-fixtures-bundle

- symfony console doctrine:fixtures:load


# webpack for assets:
- composer require symfony/webpack-encore-bundle

## forms:
- composer require symfony/form
- symfony console make:form MovieFormType Movie

## activate anotations:
- composer require symfony/validator doctrine/annotations

## authintation:
- symfony console make:user User (create user table)

- symfony console make:registration-form (registration form)

- symfony console make:auth

