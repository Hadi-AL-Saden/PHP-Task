<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <label for="day">your favorite day is:</label>
        <input type="text" name="day">
        <br>
        <input type="submit" name="sub">
    </form>
</body>
</html>
<?php
if(isset($_POST['sub'])){
    if($_POST['day'] == 'Monday'){
        echo 'Laugh on Monday, laugh for danger.';
    }
    elseif($_POST['day'] =='Tuesday'){
        echo 'Laugh on Tuesday, kiss a stranger.';

    }
    elseif($_POST['day'] == 'Wednesday'){
        echo 'Laugh on Wednesday, laugh for a letter.';
    }
    elseif($_POST['day'] == ' Thursday'){
        echo 'Laugh on Thursday, something better.';
    }
    elseif(($_POST['day'] =='Friday')){
        echo 'Laugh on Friday, laugh for sorrow.';
    }
    elseif($_POST['day'] == 'Saturday'){
        echo 'Laugh on Saturday, joy tomorrow.';
    }elseif($_POST['day'] == NULL){
        echo  ' ';
    }
        
    
    
}


?>