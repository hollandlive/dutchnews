# dutchnews
web-site dutchnews.ru re-development

First wordpress site I made in 2014

Redevelopment.

After many trying of 

- Docker (problem with config)
- Vagrant/VirtualBox (too heavy for my MacBook Air)
- Native stack (config on Mojave sucked my mind today)

Installed with Laravel Valet as the most easy and lightweight

https://wpbeaches.com/setting-up-valet-on-macos-for-local-wordpress-development/

For PhpMyAdmin on Valet:
https://www.webfoobar.com/node/103

brew install phpmyadmin

cd /usr/local/share/phpmyadmin
valet domain test
valet link

PhpMyAdmin root/password Error (MySQL 8+)
https://gist.github.com/zubaer-ahammed/c81c9a0e37adc1cb9a6cdc61c4190f52

Make sure you have Stopped MySQL first (above).
Run the server in safe mode with privilege bypass: sudo mysqld_safe --skip-grant-tables
mysql -u root
UPDATE mysql.user SET authentication_string=null WHERE User='root';
FLUSH PRIVILEGES;
exit;
Then
mysql -u root
ALTER USER 'root'@'localhost' IDENTIFIED WITH caching_sha2_password BY 'yourpasswd';
