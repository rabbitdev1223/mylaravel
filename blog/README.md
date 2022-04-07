# Laravel REST API with Sanctum

This is a simple Multi Role Blog system.

## Usage

Change the *.env.example* to *.env* and add your database info
DB_DATABASE=blogs
```

composer install
php artisan key:generate
php artisan migrate:fresh --seed

# Run the webserver on port 8000
php artisan serve
```

## Routes

```
# Public

POST   /api/login
@body: email, password

POST   /api/register
@body: name, email, password, password_confirmation


#Headers (You should set Headers like the below sample)
Accept:application/json
Authorization:Bearer 4|C7A3eZ6t8ZrkbSevtPoVHSl0xPF4JpGJxKNBFjeU

# Protected

GET   /api/blogs
GET   /api/blogs/:id

POST   /api/blogs
@body: title,  description

PUT   /api/blogs/:id
@body: ?title, ?description

DELETE  /api/blogs/:id


GET   /api/users
GET   /api/users/:id

POST   /api/users
@body: name,  email,role_id

PUT   /api/users/:id
@body: ?name, ?role_id,?password

DELETE  /api/users/:id

POST    /api/logout


```
