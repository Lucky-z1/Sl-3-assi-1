<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <style>
    body{
            position: absolute;
            top: 40%;
            left:30%;
            transform: translate(0, -50%);
            border: 4px solid black;
            width:500px;
            text-align: center;
            padding: 50px;
            background-color:#white;
        }
        input[type=text]{
            height:30px;
            width:300px;
        }
        input[type=submit]{
            font-size:20px;
            height:25px;
            text-align:center;
            margin:5px;
        }
        label{
            font-size:20px;
        }
        button{
            font-size:15px;
            height:25px;
        }
    </style>
</head>
<body>
    <a href="index.html"><button>Go to Main page</button></a>
    <br><br>
    <h3>Enter name of student you want to edit</h3>
    <form method="post" action="#">
        <label for="Name">Name</label>
        <input type="text" id="Name" name="Name">
        <br><br>
        <h3>Please enter year of study to update</h3>
        
        <label for="year">Year</label> <br>
        <input type="text" id="year" name="Year_of_Study">  
        <br><br>
        <input type="submit" value="submit">
    </form>
    <?php
        $conn=mysqli_connect('localhost','lucky','Iamlucky@123','DB')  or die('Unable to connect');
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $name=$_POST['Name'];
            $year=$_POST['Year_of_Study'];

            $query = "UPDATE Student_Details SET Year_of_Study='$year' WHERE Name='$name'";
            $execute = mysqli_query($conn,$query);
            if($execute){
                echo "<script>alert('Updated Successfully');</script>";
            }
            else{
                echo "<script>alert('Unable to update');</script>";
            }
        }
    ?>
</body>
</html>
