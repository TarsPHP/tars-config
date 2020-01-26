
#Instructions for using tar config



Brief introduction

Tar config is used to obtain the configuration distributed from the tar management platform. Usually use the business configuration corresponding to the distribution environment, such as mysql, redis address, port and other information



##Instructions for use
```
<?php

	require_once "../vendor/autoload.php";
	$config = new \Tars\client\CommunicatorConfig();
	$config->setLocator("tars.tarsregistry.QueryObj@tcp -h 172.16.0.161 -p 17890"); //The configuration here is the tar master address
	$config->setModuleName("tedtest"); //The primary call name is used to display the secondary primary call report.
	$config->setCharsetName("UTF-8"); //character set

	$conigServant = new \Tars\config\ConfigServant($config); 
	$result = $conigServant->loadConfig("PHPTest",'helloTars','hhh.txt',$configtext); //The parameters are appName (service name part I), server name (service name part II), file name, and the last is reference parameter, which is the content of the output configuration file.
	var_dump($configtext);

	$config->setSocketMode(2); // setup socket model为2 swoole tcp client，1为socket，3为swoole protocol client
	$conigServant = new \Tars\config\ConfigServant($config);
	$result = $conigServant->loadConfig("PHPTest",'helloTars','hhh.txt',$configtext);
	var_dump($configtext);
```
