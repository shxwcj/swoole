<?php
       //TCP服务器连接以及数据接收数据
       
       //$host = '0.0.0.0';
       //$port = 9501;
       
       //$swoole_server = new swoole_server($host,$port);
       
       //$swoole_server->on('connect',function($swoole_server,$fd){
      //      echo "建立连接";
   //});
   
   //$swoole_server->on('receive',function($swoole_server,$fd,$from_id,$data){
   //      var_dump($data);
   
   //});
   
   
   //$swoole_server->on('close',function($swoole_server,$fd){
   //      echo "连接关闭";
   
   //});
   
   //$swoole_server->start();
   
   
   
   //UDP服务器以及数据接收
   
   $swoole_server = new swoole_server('0.0.0.0',9502,SWOOLE_PROCESS,SWOOLE_SOCK_UDP);
   
   $swoole_server->on('packet',function($swoole_server,$data,$fd){
           //发送数据到相应客户端，反馈信息
         $swoole_server->sendto($fd['address'],$fd['port'],$data);
   
         var_dump($fd);
         var_dump($data);
   });
   
   $swoole_server->start();
