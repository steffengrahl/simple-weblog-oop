# Simple Weblog in OOP

A show-and-tell project to show my students how to create a simple but extendable and maintainable web application in php.

## Features

* PHP´s internal server
* sqlite database
* composer autoload

## Run locally

1. Clone the project.
   ```bash
   git clone https://github.com/steffengrahl/simple-weblog-oop.git
   ```
2. Go to the project directory.
   ```bash
   cd simple-weblog-oop/
   ```
3. Install composer locally in this project.
   ```bash
   php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
   php composer-setup.php --install-dir=bin --filename=composer
   php -r "unlink('composer-setup.php');"
   ```
   You can find the instructions at [getcomposer.org](https://getcomposer.org/doc/00-intro.md#locally)
4. Go to the public folder of the project
   ```bash
   cd public/
   ```
4. Run install command. This will prepare the database, copy the .env file and install all dependencies with composer
   ```bash
   make install
   ```
4. Start PHP´s internal server.
   ```bash
   php -S localhost:8000
   ```
   
## Usage

### Database

You don't have to create a database on your own. If you run the command `make install` the database will be created with all needed tables and columns. If there is something wrong with your database please run the command `make install-database`<sup>[1](#Footnotes)</sup> to reinstall again.

---
### Footnotes
<sup>1</sup> you will lose all data stored in your database