<php
/*****************************git学习*******************************
 *
 * ipconfig /displaydns dns缓存
 * C:\Windows\System32\drivers\etc
 * http协议是超文本传输协议
 * 当在浏览器地址输入www.baidu.com敲回车之后发生了什么
 * 浏览器会先从你本地的hosts(C:\windows\system32\etc\)文件找有没有www.baidu.com的记录,如果有,直接找到IP地址,hosts文件是这样的格式如下
 * ip地址         域名
 * 127.0.0.1      localhost
 * 找到ip地址之后直接返回IP地址浏览器去访问,如果没有就去请求dns缓存(ipconfig /displaydns),如果dns缓存没有的话,去请求网关上的(如:192.168.1.1);如果网关上的没有就去找根服务器,根服务器就是个点(.);跟服务器有.com .cn .org 这些,然后判断是.com的,那么再从.com的自服务器找baidu.com,找到之后再从baidu.com上找www.baidu.com,最后找到www.baidu.com对应的ip地址返回给用户
 *
 *  */

/**
 * 注释写成这种的原因是因为php有个document的东西,可以直接生成说明文档
 * @param $a
 * @param $b
 * @param $c
 * @return mixed
 */

/**
 * git 的使用方法以及原理
 * git 的由来git是由李纳斯托瓦斯写的,用了10天时间.
 * git 分为工作区,缓冲区,仓库
 *
 * git clone https://github.com/lizhihengJesuslove/mygit        #从github中获取代码;
 * git add test.html                                            #把test.html添加到缓冲区
 * git commit -m "这是一个测试"                                 #提交到本地仓库中
 * git push origin master                                       #提交到你的远程仓库
 *
 * git status                                                   #查看文件状态,是否有已添加的
 * git mv test.php abc/test.php                              #把test.php 移动到abc/test.php
 *          ||
 *          \/
 * git mv test.php mv abc/test.php && git rm test.php && git add abc/test.php(运行git mv test.php abc/test.php 相当于运行这三条命令)
 *
 */
 /**
 *
 * git fetch 是从远程仓库中获取到数据,但是不会合并.示例如下:
 * git fetch origin;
 * git merge origin/master 用来合并
 * git diff master origin/master 查看本地分支和远程分支的差异
 * git reset --hard 766f git回退到某个版本 
 * git pull 是从远程仓库获取到数据直接合并
 * 



 ******************git创建分支***********************
 git branch testing 	//git 创建了一个testing的分支
 git log --oneline --decorate	//查看当前分支所指的对象,默认指向master

 git checkout testing 		//切换到testing分支中,也就是说所有的操作都在testing分支中操作



********************git分支合并***********************
 git checkout -b testing	//相当于git branch testing , git checkout testing 

 git checkout master 		//切换的主分支,
 git merge testing 		//合并两个分支

 git branch -d testing		//删除testing分支

*********************git远程分支***********************
 git ls-remote			//获取远程分支列表
 git remote add staty 		//添加一个远程分支staty
 git fetch testing		//抓取远程仓库testing中的数据
 git push origin --delete staty //删除远程分支staty

*********************git变基***************************



*/
