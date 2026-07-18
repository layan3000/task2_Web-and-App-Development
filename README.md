# task2_Web-and-App-Development
# User Management Web Application

## Project Description

this project is a simple web application that connects to a MySQL database. It allows users to add their name and age, display all saved records in a table, and change the user's status using a Toggle button without refreshing the page

## Features

- add a new user (Name and Age)
- save data to a MySQL database
- display all users in a table
- toggle the user's status between 0 and 1
- update the status without reloading the page

## Technologies Used

- HTML
- CSS
- JavaScript (Fetch API)
- PHP
- MySQL
- InfinityFree
- GitHub

## Project Structure

```
project/
│── index.php
│── db.php
│── insert.php
│── toggle.php
│── script.js
└── style.css
```

## Database

create a database and run the following SQL command:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    status TINYINT DEFAULT 0
);
```

## How to Run

1. upload the project files to InfinityFree.
2. create a MySQL database.
3. update the database credentials in `db.php`.
4. create the `users` table using the SQL query above.
5. open the website in your browser.
6. add a user's name and age.
7. click **Submit** to save the data.
8. click **Toggle** to change the user's status without refreshing the page.

## Author

Layan Al-Raddadi
