## Install
    
    cd src
    composer install

## Run the app
    
    cd docker
    docker-composer up

# Restful API

* **하나의 회원 데이터 출력 API**  GET /users/:no
* **회원 데이터 생성(회원 가입) API**   POST /users

### Request

    `POST /users`
    
    application/x-www-form-urlencoded

    email:jizero234@mail.com
    password:test123 
    name:ddd 
    nickname:ddd2
    password_confirmation:test123
    
* **회원 데이터 수정 API** PUT users/:no
* **회원 데이터 삭제 API** DELETE  users/:no




### 참고 URL 
[https://github.com/damianopetrungaro/slim-boilerplate](https://github.com/damianopetrungaro/slim-boilerplate)


