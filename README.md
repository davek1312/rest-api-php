# Rest API (PHP)

A simple REST API coded in PHP 8, built with [Laravel's Lumen framework](https://lumen.laravel.com/)
and MySQL 8.

## Getting Started

### Dependencies

* Docker
* Docker Compose

### Installation

* Checkout the repo:
```
git checkout git@github.com:davek1312/rest-api-php.git
```
* Create a copy of the '.env.example' file and call it '.env'

### Start the Application

A bash script is provided to run the service:

```
./start.sh
```

## Usage

The application is available at localhost:8080

## Configuration

### Apple Mac M1

If you are using an Apple Mac with an M1 chip you will need to add 
'PLATFORM=linux/x86_64' to the '.env' file for the MySQL container 
to work.

### HTTP Port

You can change the application's HTTP by updating the 'APP_HTTP_PORT' 
variable in the '.env' file.

TODO:
- create API
- add api key validation
- add swagger docs https://stackoverflow.com/questions/45211512/how-to-integrate-swagger-in-lumen-laravel-for-rest-api