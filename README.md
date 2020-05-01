# dutchnews
web-site dutchnews.ru re-development

First wordpress site I made in 2014

Redevelopment.

After many trying of 

- Docker (problem with config))
- Vagrant/VirtualBox (too heavy for my MacBook Air)
- Native stack (config on Mojave sucked my mind today)<br>
https://coolestguidesontheplanet.com/install-apache-mysql-php-on-macos-mojave-10-14/

Installed with Laravel Valet as the most easy and lightweight<br><br>

https://wpbeaches.com/setting-up-valet-on-macos-for-local-wordpress-development/

For PhpMyAdmin on Valet:
https://www.webfoobar.com/node/103

brew install phpmyadmin

cd /usr/local/share/phpmyadmin
valet domain test
valet link

PhpMyAdmin root/password Error (MySQL 8+):<br>
https://gist.github.com/zubaer-ahammed/c81c9a0e37adc1cb9a6cdc61c4190f52

Make sure you have Stopped MySQL first (above).<br>
Run the server in safe mode with privilege bypass: sudo mysqld_safe --skip-grant-tables<br><br>
mysql -u root<br>
UPDATE mysql.user SET authentication_string=null WHERE User='root';<br>
FLUSH PRIVILEGES;<br>
exit;<br><br>

mysql -u root<br>
ALTER USER 'root'@'localhost' IDENTIFIED WITH caching_sha2_password BY 'yourpasswd';<br>

Error: ERROR 1045 (28000): Access denied for user 'root'@'localhost' The installer halts at the database creation stage because it doesn't have a password for your local MySQL instance.

Prevent this from happening by appending your wp valet commands like such: wp valet new site --dbpass=local_root_password.

valet uninstall
valet install
valet link
brew services restart --all
valet restart
valet open


