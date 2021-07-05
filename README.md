# URL Shortener PHP

## This app is under active development hence recommend not to use 

To use this URL Shortener, Download all files from Github and upload in `public_html`

Open `config.php`

```
$server_IP = "localhost";   // it is usually localhost, if you have hosted anywhere else then use IP_ADDRESS:3306
$username = "root";          // DB Username
$password = "";              // Password
$DB_Name ='url_shortner';     //database name

```
Now save `config.php`
after Then visit your `example.com/install.php`
It will show you message that `installed successfully`, this means that installation was successful, Now open `login.php` to login in app

If you see `Please retry installation`, this means something went wrong in installation, So check your database configuration again & also check if your username has access to database, For remote database make sure you added IP Address rule on remote server.


### more coming soon
