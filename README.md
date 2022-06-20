## IMDB
IMDb (Internet Movie Database) is an online website that includes cast, production crew, and
personal biographies, plot summaries, trivia, ratings, and fan and critical reviews for films,
television programmes, home videos, video games, and streaming entertainment online. Our
project will create a clone of the website that includes, but isn’t limited to the following:
- User account with Sign up and Login
- List of all current and recommended movies
- Details of any specific movie
- Profile page for each user account
- Search feature with a search results page
- An admin account that enables viewing all the user accounts

## Prerequisites

- mySQL
- composer
- php 
> Note: check that the pdo_mysql.dll is uncommented in php.ini file


## Installation and run it
>Note: We Created a Framework from **scratch** such as laravel, node.js, etc. that deals with the backend components such as request handling, DB queries, DB model, MVC structured classes [backend](https://github.com/RemonEmad93/Jetflix/tree/main/backend)

  1. download the project folder
  2. creat DB jetflix inside mysql shell using the command `create database jetflix;`
  3. enter the database using the command `use jetflix;`
  4. copy .sql file from the folder of the project and paste it into the shell
  5. **Make sure** to go to `/backend/public/index.php` and put the password and username your MYSQL database as indicated in the comments.
  6. then click on start.sh and it will run on localhost:8080
  7. to have access as admin use one of these accounts:
  ![image](https://user-images.githubusercontent.com/68864945/174668780-a56645a4-39d3-4773-b963-7347dd230588.png)
  8. to have access as user use one of these accounts:
  ![image](https://user-images.githubusercontent.com/68864945/174668869-230c11e0-7d49-49e4-a254-2658e82565e0.png)
