Docker + PHP   Local env

## Install
    
    cd src
    composer install

## Run the app
    
    cd docker
    docker-composer up

    localhost Connect (port : 80)
    
# Restful API

* Get User API**  GET /users/:no
* Insert User  API**   POST /users
* Modify API** PUT users/:no
* Delete API** DELETE  users/:no

### Request

    `POST /users`
    
    application/x-www-form-urlencoded

    email:jizero234@mail.com
    password:test123 
    name:ddd 
    nickname:ddd2
    password_confirmation:test123
    



###  URL 
[https://github.com/damianopetrungaro/slim-boilerplate](https://github.com/damianopetrungaro/slim-boilerplate)


