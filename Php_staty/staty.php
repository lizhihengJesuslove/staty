<?php
/*
 ********************************
 *php学习			*
 ********************************
 // 过滤掉emoji表情
        function filterEmoji($str){
	        $str = preg_replace_callback( '/./u',
		function (array $match) {
							                                             return strlen($match[0]) >= 4 ? '' : $match[0];
												     }, $str);
											 return $str;
											}
 *
 *
 ********************
 *在win中配置curl   *
 ********************
 *在Apache的配置文件,apache/conf/httpd.conf最后加上如下:
 *
	LoadFile E:/www/php/php5ts.dll
 	LoadFile E:/www/php/libeay32.dll
	LoadFile E:/www/php/ssleay32.dll
 *
 *之后重启Apache.
 *同时也要打开php.ini中的php_curl.dll注释
 *
 *上面的配置不知道为什么不行了
 *重新看了一种,
 *复制 libssh2.dll, php_curl.dll, ssleay32.dll, libeay32.dll 到  Windows\system32 目录
 *复制 libssh2.dll 到apache的bin目录
 *重启apache
 */
