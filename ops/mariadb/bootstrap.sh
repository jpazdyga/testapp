export TERM=xterm;
sleep 2
/usr/bin/mysqld_safe &
mysqladmin --protocol=tcp -hlocalhost password test11;
mysql --protocol=tcp -hlocalhost -uroot -ptest11 -e "CREATE USER 'dbuser' IDENTIFIED BY 'dbpass'; create database testapp_db; GRANT ALL PRIVILEGES ON testapp_db.* TO 'dbuser'@'%' IDENTIFIED BY 'dbpass' WITH GRANT OPTION; RANT ALL PRIVILEGES ON testapp_db.* TO 'dbuser'@'localhost' IDENTIFIED BY 'dbpass' WITH GRANT OPTION; FLUSH PRIVILEGES;";
