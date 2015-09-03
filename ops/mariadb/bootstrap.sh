export TERM=xterm
/usr/bin/mysqld_safe &
sleep 3
mysqladmin --protocol=tcp -hlocalhost password test11
mysql --protocol=tcp -hlocalhost -uroot -ptest11 -e "create database testapp_db; GRANT ALL PRIVILEGES ON testapp_db.* TO 'dbuser'@'%' IDENTIFIED BY 'dbpass' WITH GRANT OPTION; GRANT ALL PRIVILEGES ON testapp_db.* TO 'dbuser'@'localhost' IDENTIFIED BY 'dbpass' WITH GRANT OPTION; FLUSH PRIVILEGES;"
