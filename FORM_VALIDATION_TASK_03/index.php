<?php 
    $name_error="";
    print_r($_POST);
    print('<br/>');
    
    if(isset($_POST["name"])){
        if(trim($_POST["name"])==''){
            $name_error=$name_error . "| name is empty";
        } else {
            if (str_word_count($_POST["name"])<2){
                $name_error=$name_error= $name_error ."| name must contain two word";
            }
            if($_POST["name"][0] < 'A' ||  $_POST["name"][0] > 'z'){
                $name_error=$name_error= $name_error ."| name must start with a letter";
            }
        }
    }
    

    
    $email_error="";
    
    if(isset($_POST["email"])){
        if(trim($_POST["email"])==''){
            $email_error=$email_error . "| email is empty";
        } else {
            if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                $email_error=$email_error . "| email is not valid";
            }
        }
    }
   

    $date_error="";
    if(isset($_POST["dd"]) && isset($_POST["mm"]) && isset($_POST["yyyy"])  ){
        if(!$_POST["dd"]){

            $date_error=$date_error . "| DD is empty";
            
            
        }else{
            // if(!is_int($_POST["dd"])){
            //     $date_error=$date_error . "| DD must be integer";
                if($_POST["dd"] > 0 && $_POST["dd"] >31 ){
                    $date_error=$date_error . "| DD must be must be between 0 and 31";
                
                }
            // }
            
        }
        if(!$_POST["mm"]){
            $date_error=$date_error . "| mm is empty";
            if($_POST["mm"] >= 0 && $_POST["mm"] >12 ){
                $date_error=$date_error . "| mm must be must be between 1 and 12";
            
            }
        }
        if(!$_POST["yyyy"]){
            $date_error=$date_error . "|YYYY is empty";
            if($_POST["yyyy"] >= 1899 && $_POST["yyyy"] >2016 ){
                $date_error=$date_error . "| yyyy must be must be between 1900 and 2016";
            
            }
        }
    }

    $gender_error="";

    if(isset($_POST['gender'])){
        print($_POST['gender']);
        
        if($_POST['gender']==''){
            $gender_error=$gender_error . "gender must be selected";
        }
    }else {
        $gender_error=$gender_error . "gender must be selected";
    }
    
    $blood_error="";

    if(isset($_POST['blood'])){
        print($_POST['blood']);
        
        if($_POST['blood']==''){
            $blood_error=$blood_error . "blood must be selected";
        }
    }else {
        $blood_error=$blood_error . "blood must be selected";
    }

    

    
    
    
    print($name_error);
    print("<br>");
    print($email_error);
    print("<br>");
    print($date_error);
    print("<br>");
    print($gender_error);
    print("<br>");
    print($blood_error);

    $degee= ["ssc","hsc","msc","bsc"];
    $isNotDegree = true;

    foreach($degee as $d){
        if(isset($_POST[$d])){
            if(trim($_POST[$d]!='')){
                $isNotDegree=false;
                break;
            }
        }
    }

    if($isNotDegree){
        print("at least one degree must be selected");
        print("<br>");

    }
    
    // if(   !(isset($_POST['ssc']) || isset($_POST['hsc']) || isset($_POST['bsc']) || isset($_POST['msc'] ) ) ) {
    //     if($_POST['ssc']=='' || $_POST['hsc']=='' || $_POST['msc']=='' || $_POST['bsc']=='' ){
    //         print("at least one degree must be selected  ,must be not empty");
    //         print("<br>");
    //     }
    // } else {
    //     print("at least one degree must be selected");
    //     print("<br>");
    // }

    
    function isEmpty($input){
        return trim($input)!='';
    }
?>

<!DOCTYPE html>
<head>
    <title>Webtech Class type</title>
</head>
<body>
    <form method="post" novalidate >
        <table border="1" width="100%">
            <tr>
                <td colspan="3" align="center">PERSONAL PROFILE</td>
                
            </tr>
            <tr>
                <td width="30%">Name</td>
                <td width="60%"><input width="50%" type="text" name="name"></td>
                <td width="20%"></td>
            </tr>
            <tr>
                <td width="30%">Email</td>
                <td width="60%"><input width="50%" type="email" name="email"></td>
                <td width="20%"></td>
            </tr>
            <tr>
                <td width="30%">Gender</td>
                <td width="60%">
                    <input width="50%" type="radio" value="Male" name="gender"> Male
                    <input width="50%" type="radio" value="Female" name="gender"> Female
                    <input width="50%" type="radio" value="Others" name="gender"> Others 
                
                </td>
                <td width="20%"></td>
            </tr>
            <tr>
                <td width="30%">Date of birth</td>
                <td width="60%">
                    <input width="50%" type="number"  name="dd"> /
                    <input width="50%" type="number"  name="mm"> /
                    <input width="50%" type="number"  name="yyyy"> (dd//mm//yyyy) 
                
                </td>
                <td width="20%"></td>
            </tr>
            <tr>
                <td width="30%">Blood Group</td>
                <td width="60%">
                    <select name="blood" id="">
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>

                    </select>
                
                </td>
                <td width="20%"></td>
            </tr>
            <tr>
                <td width="30%">Degree</td>
                <td width="60%">
                    
                    <input type="checkbox" name="ssc" value="SSC" id="">SSC
                    <input type="checkbox" name="hsc" value="HSC" id="">HSC
                    <input type="checkbox" name="bsc" value="BSc" id="">BSc
                    <input type="checkbox" name="msc" value="MSc" id="">MSc

                
                </td>
                <td width="20%"></td>
            </tr>

            <tr>
                <td width="30%">Phot</td>
                <td width="70%" colspan="2">
                    <input type="file" name="Browse" id="">

                
                </td>
                
            </tr>
            <tr>
                <td colspan="3" align="center" height="100%"><br></td>
                
            </tr>
            <tr>
                <td colspan="3" align="right" height="100%" >
                    <button type="submit">submit</button>
                    <button type="reset">reset</button>
                </td>
               
                
            </tr>
            
        </table>
    </form>
</body>
</html>