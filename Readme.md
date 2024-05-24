## NAMO PHP Framework: Power in Simplicity ##

Discover Namo, the lightweight PHP framework designed for developers who value performance and efficiency. With its small footprint, Namo delivers the core features you need to build robust applications without the overhead. Enjoy an intuitive routing system, elegant ORM, built-in authentication, and a powerful templating engine—all while keeping your code clean and maintainable. Namo PHP Framework offers the perfect balance of simplicity and power, making it the ideal choice for modern web development.

### Download Instructions ###

`git clone https://github.com/skriptxadmin/namophp.git`


### Install Instructions ###

`composer update`

`npm install`


### Routing ###

Create controller that matches your path and method (default method is index)

Lets assume this is your address then

`{your_site_url}/users/verify/{id}`

Create `UsersController` Class under src/Controllers

Create verify method `verify` under UsersControllerClass

You will be able to read the id as args from that method.

Refer to src/Controllers/UsersController for more 