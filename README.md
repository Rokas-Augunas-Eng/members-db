# Members_db (Php)

## Table of Contents
* [General info](#general-info)
* [Technologies](#technologies)
* [Setup](#setup)
* [Results](#results)
* [Improvements](#improvements)

## General info
A database that stores information about its members. This app uses Php and MySQL.

## Technologies
Project is created with:
* Php version: 7.4.3
* Visual Studio Code version: 1.62.0
* Windows OS: Windows_NT x64 20H2

## Setup 
To run this project, you will need Php and XAMPP. To set up your Php working environment follow the instructions here (https://www.sitepoint.com/how-to-install-php-on-windows/). XAMMP can be downloaded here (https://www.apachefriends.org/index.html)

### Start
1. Include the repository in the XAMMP directory (xampp\htdocs). 

2. Launch XAMPP control panel and start Apache and MySQL.

3. In the browser type http://localhost/phpmyadmin and create a members_db databse. The databse uses two tables (school and members):

CREATE TABLE schools ( id INT NOT NULL AUTO_INCREMENT, school VARCHAR(255) NOT NULL UNIQUE, PRIMARY KEY(id));

CREATE TABLE members ( id INT NOT NULL AUTO_INCREMENT, school_id INT NULL, name VARCHAR(255), email VARCHAR(255), PRIMARY KEY(id), FOREIGN KEY(school_id) REFERENCES schools(id)), CONSTRAINT UC_Members UNIQUE (id, school_id);

4. Dummy Data

INSERT INTO 'schools' ('id', 'school') VALUES (NULL, 'King’s College London Maths School'), (NULL, 'Westminster School'), (NULL, 'City of London School'), (NULL, 'Westminster Tutors'), (NULL, 'Francis Holland School, Regent’s Park');

INSERT INTO 'members' ('id', 'name', 'email', 'school_id') VALUES (NULL, 'tom', 'tom@tom.com', '1'), (NULL, 'igor', 'igor@igor.com', '2'), (NULL, 'josh', 'josh@josh.com', '3'), (NULL, 'greg', 'greg@greg.com', '4'), (NULL, 'sam', 'sam@sam.com', '1'), (NULL, 'david', 'david@david.com', '2')
  
5. In the browser type http://localhost/members/public/members/index.php

## Results 

* Can add members to a pool of schools 
* Can add a single member to more than one school 
* Can delete members
* Can search members by schools 

## Improvements
* MVC architecture could be improved 
* My local machine didn't allow me to run the db on the localhost. Further, inspection is required. 
