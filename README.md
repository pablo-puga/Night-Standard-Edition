Night Standard Application
==============
This is a PHP application made as a practice in a university master to display the main features of the [Night Framework](https://github.com/pablo-puga/NightFramework "Night Framework").

**Author:** Pablo Puga Peralta <[pablo-puga on GitHub](https://github.com/pablo-puga "pablo-puga on GitHub")>

Requirements
--------------
`git` and `composer` are required to install the application

Installation
--------------
To install this application follow the following steps.

 1. Clone this repo into your server `git clone https://github.com/pablo-puga/Night-Standard-Edition.git`
 2. Inside the folder Night-Standard-Edition, execute `composer install`
 3. Create the virtualhosts needed to access the application. A sample configuration can be found in the NightStandardApp-VirtualHosts.conf file. Just make sure that the path to the Night-Standard-Edition/public folder is the proper one to your system.
 4. Create the database world into your MySQL server. You can find the dump of the database in the worldDatabase.sql file.
 5. Edit the Night-Standard-Edition/app/confs/general.yml and set the proper values for the database > pdo section to conect to the, previously created, world database.
 6. Access the application via http://nightstandardapp.com/ or http://nightstandardapp.dev/ to see the profiling information. There you will see a small list of some posible actions to try in the application.