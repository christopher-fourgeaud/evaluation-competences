
#  Evaluation project
*This project was given to us by our formator to test our competences in 9 criterias which are :* 

1. C1: Model an application
2. C2: Creating a database
3. C3: Implement a database
4. C4: Develop a user interface ( front and backend )
5. C9: Use english in his professional activity

The instruction of the exercise can be found at : [Simplon wiki](https://github.com/SimplonCarcasonne/Wiki/wiki/Semaine-32-Evaluation)

For this project i used the Php framework Symfony in his version 3.3 ( because we used it during our formation ). I used the Symfony framework because he offer the possibility to include bundle to our project which facilitate the work on our given project.
Below you will find the instructions to pick the project from my repository and all the terminals command to use to make the website work.

The wireframe, M.C.D. and M.P.D. can be found on the /web folder of the Symfony repository

# Instructions

### **1 - Pull from github**

First you need to do a git clone from my repository with the command : 

**git clone git@github.com:christopher-fourgeaud/evaluation-competences.git**

### **2 - Install all the bundles**

The bundles i used during the project are :
- 1 - FosuserBundle | I used it to generate my User entity and login functionality.
- 2 - EasyadminBundle | I used it to create my backend interface for the admin user.
- 3 - VichUploaderBundle | I used it to handle the image upload for the announce entity.
- 4 - AsseticBundle | I used it to take care of the implementation of Bootstrap 3.
- 5 - DoctrineFixturesBundle | I used it to generate a set of data when generating the project.
- 6 - KnpPaginatorBundle | This bundle allow you to make easy pagination on your website.

To install all the bindles, use the terminal command :

**composer install**

it will propose to set the parameters  for your database like that :
Some parameters are missing. Please provide them.
database_host (127.0.0.1): 
database_port (null): 
database_name (symfony): testerino
database_user (root): 
database_password (null): admin
mailer_transport (smtp): 
mailer_host (127.0.0.1): 
mailer_user (null): test@test
mailer_password (null): 
secret (ThisTokenIsNotSoSecretChangeIt): 

You **have** to put an mail_user adress in order to work else you have to redo all the installation again.

### **3 - Create and update the doctrine schema**

To create the database you have to do the terminal command :

**bin/console doctrine:database:create**

And to update the doctrine schema, use : 

**bin/console doctrine:schema:update --force**

### **4 - To get the set of data from the DoctrineFixtureBundle** 

To get the set of data from the doctrinefixturebundle, simply use the command : 

**bin/console doctrine:fixtures:load**

The client name are radomly generated as well as the anounces title / price / number of rooms and a client is assigned to it radomly.

I had a problem while using doctrine fixture, it load the files in alphabetical order and in order to assign my client randomly to my announce i had to rename the announce fixture file so that the DoctrineFixtureBundle load the file in the good order.


### **5 - Done**

The installation is complete, simply run the server with : 

**bin/console:server:start**

And head to : http://127.0.0.1:8000/

The admin logins are : 
username : admin
password : test