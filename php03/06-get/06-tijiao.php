<?php

if ( isset( $_GET[ "name" ] ) && strlen( trim( $_GET[ "name" ] ) ) !=0
&& isset( $_GET[ "hobby" ] ) && strlen( trim( $_GET[ "hobby" ] ) ) !=0 ) {
    $name = $_GET[ "name" ];
    $hobby = $_GET[ "hobby" ];
} else {
    exit( "<h1>你没有权限访问！</h1>" );
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>你的信息是：</h1>
    <h3>姓名：<?php echo $name ?></h3>
    <h3>爱好：<?php echo $hobby ?></h3>    
</body>
</html>