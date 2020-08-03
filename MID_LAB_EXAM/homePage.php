<?php 
    
    if(!isset($_COOKIE['status'])){
        header('location: registration.php?error=youAreNotLoggedIn');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    
    <?php 

        $name ="";
        $userType="";
        $file = fopen("data.txt","r");

        while(! feof($file))
        {
            
           
            // echo '<tr>';
            $data = explode("|",fgets($file));
            
            // if ( empty($data[0]) ){
            //     echo $data . "<br/>";
            // }

            if(!empty($data[0])){
                if($data[0]==$_COOKIE['id']){
                    global $name;
                    global $userType;
                    $name=$data[2];
                    $userType=$data[4];    
                }
            }
            

            // echo '</tr>';
           
        }
    
        fclose($file);
    
    ?>
    <h1>Welcome <?php echo $name?></h1>

    
</body>
</html>