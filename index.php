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
   
//   $swoole_server = new swoole_server('0.0.0.0',9502,SWOOLE_PROCESS,SWOOLE_SOCK_UDP);
//
//   $swoole_server->on('packet',function($swoole_server,$data,$fd){
//           //发送数据到相应客户端，反馈信息
//         $swoole_server->sendto($fd['address'],$fd['port'],$data);
//         var_dump($fd);
//         var_dump($data);
//   });
//
//   $swoole_server->start();


/**
 * websocket服务器以及数据接收
 * $swoole_websocket_server : 服务器信息
 * $request ：客户端信息
 */
//  $swoole_websocket_server = new swoole_websocket_server('0.0.0.0',9505);  //创建swoole_socket服务器

  // 建立连接
//  $swoole_websocket_server->on('open',function ($swoole_websocket_server,$request){
//      echo 111;
//      var_dump($request);
//      $swoole_websocket_server->push($request->fd,"welcome \n");
//  });
//
//  //接收客户端信息
//  $swoole_websocket_server->on('message',function ($swoole_websocket_server,$request){
//      var_dump($request);
//      $swoole_websocket_server->push($request->fd,"get it's message \n");
//  });
//
//  $swoole_websocket_server->on('close',function ($swoole_websocket_server,$request){
//        echo "关闭连接";
//  });
//
//  //启动服务器
//  $swoole_websocket_server->start();

    //定时器
    /**
     * 循环触发
     */
//    swoole_timer_tick(2000,function ($timer_id){
//        echo  "执行 $timer_id \n";
//    });

    /**
     * 单次触发
     */
//    swoole_timer_after(3000,function (){
//        echo  "3000秒后执行\n";
//    });


    //异步TCP服务器：
    //创建TCP服务器
//    $swoole_server = new swoole_server('0.0.0.0',9503);

    //设置异步 进程工作数
//    $swoole_server->set(array('task_worker_num'=>4));

    //投递异步任务:$swoole_server->task
//    $swoole_server->on('receive',function ($swoole_server,$fd,$from_id,$data){
//        //投递异步任务
//        $task_id = $swoole_server->task($data); //异步ID
//        echo "异步ID：$task_id \n";
//    });

    /**
     * 处理异步任务 $swoole_server->finish
     * $swoole_server :服务器信息
     * $task_id ：异步ID
     * $from_id ：客户端id
     * $data  ：接收客户端传送的数据
     */
//    $swoole_server->on('task',function ($swoole_server,$task_id,$from_id,$data){
//        echo "执行异步ID：$task_id \n";
//        //处理异步任务
//        $swoole_server->finish($data);
//    });

    //处理完成结果
//    $swoole_server->on('finish',function ($swoole_server,$task_id,$data){
//        echo "执行完成\n";
//    });

    //启动服务器
//    $swoole_server->start();

    //TCP客户端
    //创建TCP客户端协议
    //$swoole_client = new swoole_client(SWOOLE_SOCK_TCP);

    /**
     * 建立连接
     * $swoole_client->connect($host,$port,$time);
     * $host：主机IP
     * $port ：端口号
     * $time ： 时间(秒)
     */
    //$swoole_client->connect('192.168.158.1',8080,5) or die('连接失败');
    //发送数据
   // $swoole_client->send('hello world') or die('数据发送失败');
    //接收数据
//    $data = $swoole_client->recv();
//    if ($data){
//       var_dump($data);
//    }else{
//        die('接收失败');
//    }
    //关闭客户端TCP
//    $swoole_client->close();


    //异步TCP客户端  本地环境无法支持异步

    //创建TCP连接
//    $swoole_client = new swoole_client(SWOOLE_SOCK_TCP,SWOOLE_SOCK_ASYNC);
//
//    //连接TCP服务器
//    $swoole_client->connect("192.168.158.1",8080.10);
//
//    /**
//     * 注册连接成功的回调
//     * $client : 服务端信息
//     */
//    $swoole_client->on('connect',function ($client){
//        var_dump($client);
//        echo "连接成功\n";
//    });
//
//
//    /**
//     * 注册成功接收数据的回调
//     * $client : 服务端信息
//     * $data   : 数据
//     */
//    $swoole_client->on('receive',function ($client,$data){
//        echo "data:".$data."\n";
//    });
//
//    //注册连接失败的回调
//    $swoole_client->on('error',function ($client){
//        echo "连接失败\n";
//    });
//
//    //注册关闭回调
//    $swoole_client->on('close',function ($client){
//        echo "关闭\n";
//    });



    //创建进程
    //可创建多个进程
//    function process(swoole_process $worker){
//        echo "pid".$worker->pid."\n";
//    }
//
//    function swoole(swoole_process $worker){
//        var_dump($worker);
//    }
//
//    //创建某个进程
//    $swoole_process = new swoole_process("process");
//    //启动进程 并获取进程pid
//    $swoole_process->start();
//
//    //创建某个进程
//    $swoole_process = new swoole_process("swoole");
//    //启动进程 并获取进程pid
//    $swoole_process->start();
//
//    //等待结束
//    swoole_process::wait();

    //创建进程事件

//    $workers = []; //进程池  数组
//    $worker_num = 3; //创建进程数量
//    //启动创建进程
//    for ($i=0;$i<$worker_num;$i++){
//        $swoole_process = new swoole_process("process"); //创建单独新进程
//        $pid = $swoole_process->start(); //启动进程，并获取进程pid
//        $workers[$pid] = $swoole_process;  //存入进程池
//    }
//
//    //创建进程执行函数
//    function process(swoole_process $process){
//        $process->write("pid:".$process->pid);  //子进程进入写入信息
//        echo "写入信息:$process->pid $process->callback";
//    }
//
//    //添加进程事件 向每一个子进程添加需要执行的动作
//    foreach ($workers as $worker){
//        var_dump($workers);
//        //添加事件
//        swoole_event_add($worker->pipe,function ($pipe) use ($worker){
//            $data = $worker->read(); //读取数据
//            echo "接收到:".$data."\n";
//        });
//    }

    //进程队列通信
//    $workers = []; //进程池  数组
//    $worker_num = 2; //创建进程数量
//    //启动创建进程
//    for ($i=0;$i<$worker_num;$i++){
//        //创建单独新进程  进行管道通信 所以第三个参数必须为false
//        $swoole_process = new swoole_process("process",false,false);
//        //开启队列
//        $swoole_process->useQueue();
//        $pid = $swoole_process->start(); //启动进程，并获取进程pid
//        $workers[$pid] = $swoole_process;  //存入进程池
//    }
//
//    //创建进程执行函数
//    function process(swoole_process $process){
//        //从队列中提取数据
//        $recv = $process->pop(); //默认8192
//        echo "从主进程获取数据: $recv \n";
//        sleep(5);
//        $process->exit(0);
//    }
//
//    //主进程向子进程添加数据
//    foreach ($workers as $pid=>$worker){
//        //投递数据到消息队列中
//        $worker->push("hello worker[$pid]\n");
//    }
//
//    //等待子进程结束 回收资源
//    for ($i=0;$i<$worker_num;$i++){
//        //等待执行完成
//        $ret = swoole_process::wait();
//        $pid = $ret['pid'];
//        unset($workers[$pid]);
//        echo "子进程退出 $pid \n";
//    }

    //进程信号触发
    //触发函数
//    swoole_process::signal(SIGALRM,function (){
//       static $i = 0;
//       echo "# $i \talarm\n";
//       $i++;
//       if ($i>20){
//           //清除定时器
//           swoole_process::alarm(-1);
//       }
//    });
//    //定时任务
//    swoole_process::alarm(100*1000);

    //锁机制
    //创建锁对象
//    $lock = new swoole_lock(SWOOLE_MUTEX); //互斥锁 SWOOLE_MUTEX
//    echo "[Master]create lock\n";
//    $lock->lock();//开始锁定   主进程
//    //创建一个子进程
//    if (pcntl_fork() >0){
//        sleep(1);
//        $lock->unlock(); //解锁
//    }else{
//        echo "子进程等待锁\n";
//        $lock->lock();  //锁定
//        echo "子进程获取锁\n";
//        $lock->unlock(); //解锁
//        echo "子进程退出\n";
//    }
//
//    echo "子进程 释放锁\n";
//    unset($lock);
//    sleep(1);
//    echo "子进程退出\n";

    //DNS查询
//    swoole_async_dns_lookup("www.baidu.com",function ($host,$ip){
//       echo "{$host} : {$ip}\n";
//   });

    //异步读取文件
//    swoole_async_readfile(__DIR__."/server.php",function ($filename,$content){
//        echo "$filename:$content\n";
//    });

    //异步文件写入
//    swoole_async_writefile('test.log', $file_content, function($filename) {
//        echo "wirte ok.\n";
//    }, $flags = 0);

    //异步事件
//    $fp = stream_socket_client("tcp://www.qq.com:80", $errno, $errstr, 30);
//    fwrite($fp,"GET / HTTP/1.1\r\nHost: www.qq.com\r\n\r\n");
//    swoole_event_add($fp,function ($fp){
//        $resp = fread($fp,8192);
//        //socket处理完成后，从epoll事件中移除socket
//        swoole_event_del($fp);
//        fclose($fp);
//    });
//    //swoole_event_add不会阻塞进程，这行代码会顺序执行
//    echo "finish\n";

    //异步MySQL操作
    //实例化mysql对象
//    $db = new swoole_mysql();
//
//    //mysql配置
//    $server = [
//        'host' => '192.168.158.131',
//        'user' => 'root',
//        'password' => '123456',
//        'database' => 'test',
//        'charset' => 'utf8',
//    ];
//
//    //连接mysql
//    $db->connect($server,function ($db,$result){
//        if ($result === false){
//           var_dump($db->connect_errno,$db->connect_error);
//           die('连接失败');
//        }
//        $sql = ' show databases';
//        $db->query($sql,function (swoole_mysql $db,$result){
//            if ($result === false){
//                var_dump($db->error);
//                die('操作失败');
//            }elseif ($result === true){
//                var_dump($db->affected_rows,$db->insert_id);
//            }
//            var_dump($result);
//            $db->close();
//        });
//    });

    //服务器端代码
        //创建websocket服务器
    $ws = new swoole_websocket_server('0.0.0.0',9502);

    $ws->on('open',function ($ws,$request){
        echo "新用户 $request->fd 加入。\n";
        $GLOBALS['fd'][$request->fd]['id'] = $request->fd;  //设置用户id
        $GLOBALS['fd'][$request->fd]['name'] = '匿名用户';  //设置用户名

    });

    $ws->on('message',function ($ws,$request){
        $msg = $GLOBALS['fd'][$request->fd]['name'].":".$request->data."\n";
        if (strstr($request->data,"#name#")){ //用户设置昵称
            $GLOBALS['fd'][$request->fd]['name'] = str_replace("#name#",'',$request->data);
        }else{
            //进行用户信息发送 发送给每一个客户端
            foreach ($GLOBALS['fd'] as $i){
                $ws->push($i['id'],$msg);
            }
        }
    });

    $ws->on('close',function ($ws,$request){
        echo "客户端-{$request} 断开连接\n";
        unset($GLOBALS['fd'][$request]);//清除连接仓库
    });

    $ws->start();