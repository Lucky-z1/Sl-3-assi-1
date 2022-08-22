<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <style>
    body{
            position: absolute;
            top: 50%;
            left:40%;
            transform: translate(0, -50%);
            border: 2px solid black;
            border-radius: 10px 40px;
            width:200px;
            text-align: center;
            padding: 50px;
            background-color:#e6e6fa;
        }
        input[type=text]{
            height:20px;
            width:200px;
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
    <h3>Enter Name of student you want to delete</h3>
    <form method="post" action="#">
        <label for="Name">Name</label> <br>
        <input type="text" id="Name" name="Name"> <br><br>
        <input type="submit" value="submit">
    </form>
    <?php
        $conn=mysqli_connect('localhost','user','password','StudentsDataBase') or die('Unable to connect');
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $name=$_POST['Name'];
            
            $query = "DELETE FROM Student_Details  WHERE Name LIKE '$name' ";
            
            $execute = mysqli_query($conn,$query);
            
            if($execute){
                echo "<script>alert('Deleted Successfully');</script>";
            }
            else{
                echo "<script>alert('Unable to delete');</script>";
            }
        }
        mysqli_close($conn);
    ?>
</body>
</html>
