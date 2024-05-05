<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_POST['age'] >= 15){
        $bmi = round($_POST['weight']/($_POST['height']*0.01)**2,1);
        print("bmiは{$bmi}です。");
    }else{
        $bmi = round($_POST['weight']/($_POST['height']*0.01)**3*10,0);
        print("ローレル指数は{$bmi}です。");
    }
    ?>
</body>
</html>