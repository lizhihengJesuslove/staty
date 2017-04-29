<?php
/*
  mongodb学习
  下载地址mongodb.org，下载stable版
  直接解压即可，不用编译安装。
  需要创建mongodb路径，和日志路径，例如(/var/www/html/mongodb/mongodb_path,/var/www/html/mongodb/mogodb_log)
  启动mongod命令：
  在mongodb目录下
  ./bin/mongod --dbpath /var/www/html/mongodb/mongodb_path --logpath /var/www/html/mongodb/mongodb_log/mongodb.log --fork --port 27017 #此命令是先启动服务端相当于mysql中的mysqld
  ./bin/mongo 启动mongo的客户断，相当于mysql的mysql.exe
  此时mongo已经启动。
  
*/
