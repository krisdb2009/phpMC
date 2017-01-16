phpMC - By Below Average *
**************************
v1.4.2 - Fixed the config file links...

v1.4.1 - Fixed the pinger on the home page to work once again.

v1.4.0 - Build an updater, Fixed its permissions, Added gallery slide show on the home page, added iframe support build in, custom themes now stored in the db file and are editable in the admin pannel, Changed the admin panel to a new bootstrap theme, disabled the banner on default - still a feature, database auto generates with a reset, %20 in url are changed to a dash.

v1.3.0 - Changed Admin panel layout, added feature disabling, and created a faster analytic engine!

v1.2.2 - Cleaned Code, Removed junk laying around.

v1.2.1 - Fixed html injection and js and relative positioning injection.

v1.2.0 - Switched all themes to a BOOTSTRAP based theme. Fixed timing on server status.

v1.1.0 - Added 2 new themes, replaced default theme with new one, replaced page editor with a new interface.

v1.0.2 - Fixed bug that made news articles create new pages

v1.0.1 - Disabled some characters corrupting the ini file in the title of news articles and page titles. 

v1.0 - First release, as is.

*************************************
Setup
*************************************

-1- Place all files in a directory on the server!

-2- Open SecretPassword.php and fill in your username and password!

-3- Open the website and look at the footer of any page and click "Login"

-4- Setup everything you want, then you are done!

-5- Throw a celebration! (and give us a diamond on PMC)

*************************************
Known issues
*************************************

On some hosts magic_quotes() functions are enabled by default. using that with this script will cause it not to run properly. disable magic quotes in the cpanel in the php.ini file.

On some hosts you will not be able to save settings, If this happens to you change the whole script folder's permissions to '777'
If you have trouble and have no idea what this is, https://www.google.com/search?q=chmod+777