<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $marks=90;
       if($marks>90){
        echo("grade a+");
       }
       else if ($marks>=80){
        echo("grade a");
       }
       else if ($marks>=70){
        echo("grade b+");
       }
       else if ($marks>=70){
        echo("grade b");
       }
       else if($marks>=60){
        echo ("grade c");
       }
       else{
        echo("fail");
       }



?>
    
</body>
</html>