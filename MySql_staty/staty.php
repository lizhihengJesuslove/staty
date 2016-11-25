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
 *******************
 *创建计算字段concat
 *******************
 *select id,concat(price,'|',times) as price_times from wth_timeattr;	#用concat连接两个字段
 *
 +----+----------------+
 | id | price_times    |
 +----+----------------+
 |  1 | 140|12         |
 |  2 | 130|15         |
 |  3 | 130|10         |
 |  4 | 140|16         |
 |  5 | 140|17         |
 |  6 | 130|11         |
 |  7 | 130|12         |
 |  8 | 140|13         |
 |  9 | 140|14         |
 | 10 | 130|13         |
 | 11 | 140|14         |
 | 12 | 130|1476529200 |
 | 13 | 140|1476532800 |
 | 14 | 130|1476536400 |
 | 15 | 140|1476540000 |
 | 16 | 130|1476543600 |
 | 21 | 130|1478307600 |
 +----+----------------+
 *
 ************************
 *使用数据处理函数
 ************************
 *不赞成使用这些函数,因为使用函数会增加数据库的压力.
 *
 *
 AddDate() 		增加一个日期（天、周等）
 AddTime() 		增加一个时间（时、分等）
 CurDate() 		返回当前日期
 CurTime() 		返回当前时间
 Date() 		返回日期时间的日期部分
 DateDiff() 		计算两个日期之差
 Date_Add() 		高度灵活的日期运算函数
 Date_Format() 		返回一个格式化的日期或时间串
 Day() 			返回一个日期的天数部分
 DayOfWeek() 		对于一个日期，返回对应的星期几
 Hour() 		返回一个时间的小时部分
 Minute() 		返回一个时间的分钟部分
 Month() 		返回一个日期的月份部分
 Now() 			返回当前日期和时间
 Second() 		返回一个时间的秒部分
 Time() 		返回一个日期时间的时间部分
 Year() 		返回一个日期的年份部分
 ******************************************************
 Abs() 			返回一个数的绝对值
 Cos() 			返回一个角度的余弦
 Exp() 			返回一个数的指数值
 Mod() 			返回除操作的余数
 Pi() 			返回圆周率
 Rand() 		返回一个随机数
 Sin() 			返回一个角度的正弦
 Sqrt() 		返回一个数的平方根
 Tan() 			返回一个角度的正切
 *
 *******************************************************
 *聚集函数
 ***************
 *
 AVG() 			返回某列的平均值
 COUNT() 		返回某列的行数
 MAX() 			返回某列的最大值
 MIN() 			返回某列的最小值
 SUM() 			返回某列值之和
 *
 *******************************************************
 *分组数据
 ************
 *select * from wth_timeattr group by df_id 		#查询数据,以df_id分组,相同的为一组
 *group by 出现在where之后,order by 之前
 *where 在数据分组前进行过滤,having是在数组分组后进行过滤.
 *select * from wth_timeattr where df_id>5 order by df_id having count(*)>2 order by id desc;						#查出df_id大于5的然后进行分组,分完之后比较大于2的
 *
 *SELECT 子句的顺序
 * select		要返回的裂或表达式 
 * from 		从哪个表查数据
 * where		行级过滤
 * group by		分组说明
 * having		组级过滤
 * order by 		排序
 * limit		查几行
 ******************
 *mysql 子查询
 ******************
 *select df_id from wth_timeattr where df_id in(select id from wth_df);
 *insert wth_t_attr (price,number,stock) select price,number,stock from wth_t_attr;				把从wth_t_attr 中的数据插入到wth_t_attr;可用于测试百万千万数据测试
 *
 *
 ****************
 *联结表
 ****************
 *select df_id,times,data_id from wth_df,wth_timeattr where wth_df.id=wth_timeattr.df_id 			使用where创建联结
 *INNER JOIN 	内部联结
 *OUTER JOIN 	外部联结	在使用OUTER JOIN时必须使用RIGHT或者LEFT关键字,如果是 LEFT OUTER JOIN 表示以左边的表为基准
 *
 ****************
 *全文本索引
 ****************
 *select note_text from productnotes where match(note_text) against('rabbit');				#match 中是索引的字段(fulltext) against中是要搜索的内容
 *select note_text from productnotes where note_text like '%rabbit%';					#这个是用like匹配,11w的数据,like比搜索慢0.04秒
 *
 *select note_text,match(note_text) against('rabbit') as rank from productnotes;			#rank会看出他的排行顺序,他会计算出一个值来排序
 **********
 *查询扩展*
 **********
 *select note_text from productnotes where match(note_text) against('rabbit' with query expansion)	#他会先查出包含rabbit的词,然后查询第二行中包含第一行的词,但是这样做会多出来你不想要的数据
 ***************
 *boolean值索引*
 ***************
 *select price from wth_t_attr where(price) against('1000' in boolean mode);				#Boolean不添加price为索引可以直接使用,但是要慢所以不推荐

 *
 *
	 + 	含，词必须存在
	 - 	除，词必须不出现
	 > 	含，而且增加等级值
	 <	包含，且减少等级值
	 () 	词组成子表达式（允许这些子表达式作为一个组被包含 排除、排列等）
	 ~	取消一个词的排序值
 	* 	尾的通配符
 	"" 	义一个短语（与单个词的列表不一样，它匹配整个短语以便包含或排除这个短语）
 *
 *全文本索引只在myisam中支持
 *
 *
 *****************
 *创建和操作表   *
 *****************
 *建表样例
 	mysql> CREATE TABLE test1
	    -> (
	    ->  cust_id         int             NOT NULL AUTO_INCREMENT,
	    ->  cust_name       char(50)        NOT NULL DEFAULT 'lizhiheng',
	    ->  cust_address    char(50)        NULL,
	    ->  cust_city       char(50)        NULL,
	    ->  cust_state      char(5)         NULL,
	    ->  cust_country    char(50)        NULL,
	    ->  cust_contact    char(50)        NULL,
	    ->  cust_email      char(255)       NULL,
	    ->  PRIMARY KEY (cust_id),
	    ->  FULLTEXT KEY (cust_name)
	    -> )ENGINE=MyISAM CHARSET=utf8;
 *
 ******************
 *插入数据样例
 	mysql> INSERT INTO customers1(cust_name,
	    ->          cust_address,
            ->          cust_city,
	    ->          cust_state,
            ->          cust_country)
	    ->  VALUES(
            ->          'Pep E.LaPew',
	    ->          '100 Main Street',
            ->          'Los AngeLes',
	    ->          'CA',
            ->          'USA'
	    ->          ),
            ->          (
	    ->          'M.Martian',
            ->          '42 GalaxyWay',
	    ->          'New York',
            ->          'NY',
	    ->          'USA'
            -> );
 *
 ***********************
 *mysql 视图	
 ***********************
 *CREATE VIEW orderitemslist AS
 *SELECT order_num,
 *	 prod_id,
 *	 quantity
 *FROM orderitems;			#创建视图例子
 *
 *SELECT * FROM orderitemslist 		#使用视图,
 *SELECT * FROM orderitemslist WHERE order_num=200005	#视图也可以过滤
 *
 *视图其实就是为了重复使用,也就是在之前必须创建了一个视图,从某种意义上来讲可以理解为是先查询一遍,之后直接用之前查询出来的结果.
 *
 ***********************
 *mysql存储过程
 ***********************
 *存储过程是为以后的使用而保存的一条或多条MySQL语句的集合,其实存储过程就相当于函数
 *
 *delimier !		#把mysql的结束符;改为!号
 *
 *简单的存储过程
 *
 *
 mysql> create procedure ordertotal(
     ->  in onnumber int,
     ->  out ototal decimal(8,2)
     -> )
     -> begin
     ->  select sum(item_price*quantity)
     ->  from orderitems
     ->  where order_num=onnumber
     ->  into ototal;
     -> end!
     Query OK, 0 rows affected (0.00 sec)
 mysql> delimiter ;
 mysql> call ordertotal(20005,@total);		#call为调用ordertotal,传入参数,20005,@total 为返回的值存储的参数,也就是存储的值存放在@total 中
     Query OK, 1 row affected (0.06 sec)
 mysql> select @total;				#查询@total 的值i
      +--------+
      | @total |
      +--------+
      | 149.87 |
      +--------+
OA     1 row in set (0.00 sec)
 *
 ************
 *创建存储工程中,IN 代表传入的参数,OUT代表返回的参数,INTO表示把查询出的结果放到传出的参数ototal 中
 *
 ********************************************************
 *	MySQL 触发器					*
 ********************************************************
 *CREATA TRIGGER newproduct AFTER INSERT ON test_table
 *FOR EACH ROW SELECT NEW.name INTO @new_name;			#可用于聊天,当插入数据之后就返回输入的内容
 *
 ***
 *CREATE TRIGgER test_insert AFTER INSERT ON trigger_table
 *FOR EACH ROW SELECT NEW.name,NEW.phone INTO @newname,@newphone;										#如果插入多行,只会返回最后一行数据
 *
 *CREATE TRIGGER test_del BEFORE DELETE ON trigger_table
 *FOR EACH ROW
 *BEGIN
 *INSERT INTO trigger_table1(name,phone) values(old.name,old,phone);
 *这里可以写多条sql语句
 *END!
 *
 *触发器只支持,INSERT,UPDATE,DELETE.
 *每个表最多只有6种出发情况,也就是说,一个表最多有6个触发器,BEFORE和AFTER.
 *
 ************************
 *mysql 事物处理	*
 ************************
 *mysql InnoDB 支持事物处理
 *事物是维护数据库的完整性,要么完全执行,要么完全不执行.
 *事物		transaction
 *回退		rollback
 *提交		commit
 *保留的	savepoint
 *
 *START TRANSACTION			#使用事物之前必须先开启事物
 *delete from trigger_table1 where id=7 #删除id为7的数据
 *select * from trigger_table1		#执行这条语句会显示没有id为7的数据
 *rollback				#当执行rollback后,所有的操作都会回到,start transaction时的状态
 *savepoint aa				#定义一个叫aa的保留的,可以回退到这个地方
 *rollback to aa			#回退到aa状态那.
 *如果不回退直接commit之后,想再要回退,已经不行了,数据已经处理了.
 *如果rollback一次之后,再次执行delete语句的话,会直接删除掉,所以无论是commit或者是rollback之后都必须重新开启事物(start transcation);
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
