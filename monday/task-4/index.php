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

<select name="day" method='post'>
   <option value="Monday">Monday</option>
   <option value="Tuesday">Tuesday</option>
   <option value="Wednesday">Wednesday</option>
   <option value="Thursday">Thursday</option>
   <option value="Friday">Friday</option>
   <option value="Saturday">Saturday</option>
</select> 

<input type="submit" name="sub" value="Submit"/>
</form>

</body>
</html>
<?php

if(isset($_POST['sub'])){


$day = $_POST['day'];
switch($day){
    case 'Monday':
      echo 'Laugh on Monday, laugh for danger.';
      break;
      
        case 'Tuesday' :

            echo 'Laugh on Tuesday, kiss a stranger.';
        break  ;

        case 'Wednesday' :

            echo 'Laugh on Wednesday, laugh for a letter.';
        break  ;

        case 'Thursday' :
            echo 'Laugh on Thursday, something better.';
        break  ;

        case 'Friday' :
            echo 'Laugh on Friday, laugh for sorrow';
        break  ;

        case 'Saturday' :
            echo 'Laugh on Saturday, joy tomorrow.';
        break  ;
};
        
};
        
?>