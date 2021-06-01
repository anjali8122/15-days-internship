<?php

$connection = mysqli_connect($host, $username, $passwd)
if($_post)
{
    $name =$_POST['txt1'];
    $gender = $_POST['txt2'];
   
    
}
?>

<html>
    
    <body>
        <form method ="post">
            name : <input type="text" name="txt1"/>
            gender :<select>
                <option>male</option>
                <option>female</option>
            </select>            
            <input type="submit"/>
        </form>
    </body>
</html>