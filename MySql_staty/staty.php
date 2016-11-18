<?php
/*
 *******************
 *MySQL学习	 
 ******************
 *show columns from users;	#返回字段名,数据类型,是否允许null,键信息,默认值以及其他信息
 *describe users		#这相当于 show columns from users 的快捷方式
 *
 *show status			#用于显示服务器的状态信息
 *
 *show create database test	#显示建库语句
 *show create table test	#显示建表语句
 *
 *show grans 			#显示所有的用户
 *
 *help show			#help show 显示show支持的所有语句,help select...
 *
 ****************************************************************************
 *mysql导出导入数据
 *#mysql 导出数据是千万记得不要登录mysql
 *#导出导入时注意一个是mysqldump ,一个是mysql
 *mysqldump -uroot -p -d shopcdyd>1.sql	#mysql 导出数据是千万记得不要登录mysql
 *********************
 *mysql排序
 *********************
 *select distinct phone from orders;			#显示不同电话的订单
 *select distinct phone,id,name				#
 select distinct stock,price,id from wth_t_attr;	#只要其中有一个不同的那么其他的也会相应的显示
 +-------+-------+----+
 | stock | price | id |
 +-------+-------+----+
 |    10 | 1000  |  1 |
 |    10 | 2000  |  2 |
 |    10 | 1000  |  3 |
 |    20 | 1800  |  4 |
 |    10 | 1000  |  5 |
 |    10 | 1000  |  6 |
 |    10 | 1000  |  7 |
 |    10 | 1000  |  8 |
 |    10 | 1000  |  9 |
 |    10 | 1000  | 10 |
 +-------+-------+----+
 *
 **********************
 *mysql where 语句
 **********************
 *
 mysql> select * from wth_timeattr where id=40 or id=50 and id>=10;
 +----+------------+-------+-------+--------+
 | id | times      | df_id | price | is_buy |
 +----+------------+-------+-------+--------+
 | 40 | 1478484000 |    17 | 0.01  |      0 |
 | 50 | 1479092400 |    23 | 0.01  |      0 |
 +----+------------+-------+-------+--------+
 ***************************************************************************
 mysql> select * from wth_timeattr where id=40 or id=50 and price >10;
 +----+------------+-------+-------+--------+
 | id | times      | df_id | price | is_buy |
 +----+------------+-------+-------+--------+
 | 40 | 1478484000 |    17 | 0.01  |      0 |
 +----+------------+-------+-------+--------+
 *
 *
 *
 ***************************************************************************
 mysql> select * from wth_timeattr where (id=40 or id=50) and price > 10;
 Empty set (0.00 sec)
 *
 *******************
 *mysql通配符
 *******************
 *select * from wth_timeattr where price like '%2%';		#匹配带2的价格
 *除非绝对必要,否则不要是用通配符,使用通配符搜索是很慢的
 *
 *******************
 *mysql正则表达式
 *******************
 *关键字regexp;
 *select * from wth_timeattr where price regexp '130'		#查看所有价格是130的信息
 *
 *select * from wth_timeattr where price regexp '^[123]';	#匹配以1或2或3开头的价格
 *
 *select * from wth_timeattr where price regexp '1|2|3'		#同上
 *
 *select * from wth_timeattr where price regexp '[1-3]'		#匹配1-3的价格表示某个范围 
 *
 *select * form wth_timeattr where price regexp '\\.'		#匹配带.的价格匹配特殊字符时需要加\\
 *
 *select * from wth_timeattr where price regexp '^13$'		#匹配以1开始以3结尾的价格;
 *
 *
 *
 */
