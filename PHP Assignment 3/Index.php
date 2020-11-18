<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
<?php
$fname=$lname=$email=$password=$date=$conpass=$gender=$hobbies=$image="";
$fname_Err=$lname_Err=$email_Err=$password_Err=$date_Err=$conpass_Err="";
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST['fname']))
    {
        $fname_Err="First Name is Required";
    }
    else
    {
        $fname=value_test($_POST['fname']);
    }
    if(empty($_POST['lname']))
    {
        $lname_Err="Last Name is Required";
    }
    else
    {
        $lname=value_test($_POST['lname']);
    }
    if(empty($_POST['email']))
    {
        $email_Err="Email is Required";
    }
    else
    {
        $email=value_test($_POST['email']);
    }
    if(empty(($_POST['password']) && ($_POST['conpass'])))
    {
        $password_Err="Password is Required";
    }
    else
    {
        $password=$_POST['password'];
        $conpass=$_POST['conpass'];
        if ($password==$conpass)
        {
            $password=$conpass;
        }
        else
        {
            $conpass_Err="Password Not Match";
            $password='';
        }
    }
    if(empty($_POST['date']))
    {
        $date_Err="Date of birth is Required";
    }
    else
    {
        $date=$_POST['date'];
    }
    if(empty($_POST['gender']))
    {
        $gender="";
    }
    else
    {
        $gender=value_test($_POST['gender']);
    }
    if(empty($_POST['hobbies']))
    {
        $hobbies="";
    }
    else
    {
        $hobbies=value_test($_POST['hobbies']);
    }
    if(empty($_POST['image']))
    {
        $image="";
    }
    else
    {
        $image=$_POST['image'];
    }
}
function value_test($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
if (!empty($fname && $lname && $email && $password && $date))
{
    $con=mysqli_connect('localhost','root','','sech');
    $sql= "INSERT INTO mainform (firstname,lastname,email,password,dateofbirth,gender,hobbies,image ) 
    VALUES ('$fname','$lname','$email','$password','$date','$gender','$hobbies','$image')";
    if(!mysqli_query($con,$sql))
    {
        echo "Not Inserted";
    }
    else
    {
        echo "Data Inserted";
    }
}
?>
<form action="Index.php" method="post">
    <fieldset>
        <legend>Enter The Details</legend>
        Enter Your First Name : <input type="text" name="fname"><span><?php echo $fname_Err ?></span><br><br>
        Enter Your Last Name : <input type="text" name="lname"><span><?php echo $lname_Err ?></span><br><br>
        Enter Your Email : <input type="email" name="email" placeholder="ex: hello@gmail.com">
        <span><?php echo $email_Err ?></span><br><br>
        Enter Your Password : <input type="password" name="password"><span><?php echo $password_Err ?></span><br><br>
        ReEnter Your Password : <input type="password" name="conpass"><span><?php echo $conpass_Err ?></span><br><br>
        Enter Your DOB : <input type="date" name="date"><span><?php echo $date_Err ?></span><br><br>
        Select Your Gender :
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other<span><?php echo $gender ?></span><br><br>
        Select Your Hobbies :
        <input type="checkbox" name="hobbies" value="dance">Dancing
        <input type="checkbox" name="hobbies" value="cricket">Cricket
        <input type="checkbox" name="hobbies" value="reading">Reading<span><?php echo $hobbies ?></span><br><br>
        Uplode Image : <input type="file" name="image"><span><?php echo $image ?></span><br><br>
        <input type="submit" value="submit" name="submit">
        <input type="submit" value="display" name="submit1"><br><br>
        Enter The Row No To Delete : <input type="number" name="id" value="$id">
        <input type="submit" value="delete" name="del" >
    </fieldset>
</form>
<?php
if (isset($_POST['submit1']))
{
    $con = mysqli_connect('localhost','root','','sech');
    $sql = "SELECT id,firstname,lastname,email,password,dateofbirth,gender,hobbies FROM mainform";
    $result = mysqli_query($con,$sql);
    if (mysqli_num_rows($result)>0)
    {
        while ($row=mysqli_fetch_assoc($result))
        {
            echo $row['id']."<br>".$row['firstname']."<br>".$row['lastname']."<br>".$row['email']."<br>".
                $row['password']."<br>".$row['gender']."<br>".$row['hobbies']."<br><br>";
        }
    }
    else
    {
        "No Record Found";
    }
}
?>
<?php
if (isset($_POST['del']))
{
    $con = mysqli_connect('localhost','root','','sech');
    $id= $_POST['id'];
    $sql = "DELETE FROM mainform WHERE id = '$id'";
    if (!mysqli_query($con,$sql))
    {
        echo "Error deleting record";
    }
    else
    {
        echo "Record deleted successfully";
    }
}
?>
</body>
</html>