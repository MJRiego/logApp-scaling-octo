

## :rocket: This is my README file for __Practice 10-04__ 

___LogApp___  is a web-based application that records and tracks an individual's personal information, as well as the date and time of their visit to a particular place. The primary objective of LogApp is to create an efficient database for storing and managing log data. Individuals can use the app to register their own details. The application enables administrators to log in using their credentials and can view logs or records.
___
There is a _[registration form](index.php)_,  _[log in page](guestbook-login.php)_, and _[list of records](guestbook-list.php)_ in this logApp.




### :computer: Below is the output/interface of each php file: 

- __Registration form__ (index.php)

> ![Interface1](https://i.pinimg.com/originals/e3/1c/27/e31c27a41df6227453c3a5887779403e.jpg)

- __Log in page__ (guestbook-login.php)

> ![Interface2](https://i.pinimg.com/originals/55/cc/1e/55cc1e7929f3fef018aa519690ac1329.jpg)
:key:You can use this credentials to access the list of records:
>>username: admin <br/> password: admin

- __View Records__ (guestbook-list.php)

> ![Interface3](https://i.pinimg.com/originals/b4/32/48/b4324876a7ebc85212456e7c037d0da2.jpg)

___

### :bulb: To prepare a database remotely using Workbench or phpMyAdmin, you can follow these steps: 

1. Open your Workbench or phpMyAdmin on your local computer. You can download Workbech [HERE](https://dev.mysql.com/downloads/workbench/).
2. Download this [SQL FILE](database/log-app.sql) for your database and import to your Workbench or phpMyAdmin or you can create your own database.
3. Configure your database connection. Create a php file named config.php and db.php or you can download under this [FOLDER](config).

> config.php
```php
// Define database connection variables
<?php
	define('ROOT_URL', '');
	define('DB_HOST', 'localhost');//You can replace it with your own database credentials 
	define('DB_USER', 'root');//You can replace it with your own database credentials 
	define('DB_PASS', 'root');//You can replace it with your own database credentials 
	define('DB_NAME', 'log-app');//You can replace it with your own database name
    
```
> db.php
```php
<?php
	// Create a connection
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// Check connection
	if(mysqli_connect_errno()){
		// Connection Failed
		echo 'Failed to connect to MySQL '. mysqli_connect_errno();
	}
```
4. All set! You can now open your PHP files using localhost or you can just click below if your folder name is still the same as the original folder name. 
> - __[Registration form](http://localhost/logApp-scaling-octo/)__
> - __[Log in page](http://localhost/logApp-scaling-octo/guestbook-login.php)__
> - __[View Records](http://localhost/logApp-scaling-octo/guestbook-list.php)__

:arrow_forward: **Sample output :**

![dp](https://i.ibb.co/dLqGRZJ/lv-0-20230418080742.gif)

___

### :open_file_folder: This repository is came from **[PSU-CC6-REPOs](https://github.com/PSU-CC6-REPOs)** and used it for educational purposes. 
<br/>
README created by:

### **[Mark Jayson Riego](https://github.com/MJRiego)** from BSIT3-B1 :male_sign::alien:

![dp](https://i.pinimg.com/originals/9c/ce/ea/9cceea9f1b09aab1fd5c9ecbd3451e17.jpg)

logApp created by:

Francis Joe Pilarmeo

![dp](https://i.pinimg.com/originals/d2/b1/4c/d2b14c58ac32b9c9647cea4cd6dc568f.jpg)

Mark Jayson Riego

![dp](https://i.pinimg.com/originals/34/44/19/3444195c2ed747d21c659b39f6355080.jpg)

Mark Creador

![dp](https://i.pinimg.com/originals/7e/93/ca/7e93cadce3162926890a368dff1231da.jpg)


