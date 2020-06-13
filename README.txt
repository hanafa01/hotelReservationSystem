How to run this Project:
1. Download and Unzip file on your local system copy library.
2. Put 'hotel' folder inside root directory.    

Database Configuration:
Open phpmyadmin
Create Database hotel
Import database hotel.sql (available inside hotelReservationSystem/sql file/)

To open admin page, write:
http://localhost:8080/hotel/admin   to go to login admin.


------------------------------IMPORTANT------------------------------

For those who USE ONLY localhost (without :8080) must do the following:

Go to the file in includes/config.php 
and change from $GLOBALS['url'] = "http://localhost:8080/hotel/";   to  $GLOBALS['url'] = "http://localhost/hotel/";   on line 25.

To open admin page must do the following:
-Write http://localhost/hotel/admin   to go to login admin.

---------------------------------------------------------------------


Login admin:   (You can see all the data from the database hotel.sql (available inside hotelReservationSystem/sql file/))
username: hotel
password: hotel

OR

username: hotel2
password: hotel2







