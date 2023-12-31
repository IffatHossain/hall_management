<html lang="en">
<?php
    ob_start();
    session_start();
    $servername="localhost";
    $username="root";
    $pass="";
    $db="hall_management";
    $conn=mysqli_connect($servername, $username, $pass, $db);
    if(!$conn) die("Connection failed: ". mysqli_connect_error());

    if(!isset($_SESSION['link'])){
        $_SESSION['link']='home.php';
    }
    $link=$_SESSION['link'];
    if (!isset($_SESSION['username'])) {
        //$_SESSION['link']='Hall_residence_application.php';
        $_SESSION['info']="<script type='text/javascript'>$.notify('You need to login first..','info')</script>";
        //$_SESSION['info']='You need to login first..';
        //echo $link;
        header("location: $link");
        exit();
    }
    else $user=$_SESSION['username']; $pplink;
    $info="";
    if(isset($_SESSION['info'])){
        $info=$_SESSION['info'];
        $_SESSION['info']='';
    }

?>
<head>
    <title>Hall Management System</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="css/lib/w3.css">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-flex.css">
    <link rel="stylesheet" href="css/bootstrap-flex.min.css">
    <link rel="stylesheet" href="css/bootstrap-flex.min.css">
    <link rel="stylesheet" href="css/bootstrap-flex.min.css">
    <link rel="stylesheet" href="css/bootstrap-flex.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/notify.js"></script>
    <script type="text/javascript" src="js/notify.min.js"></script>
    <style>
        table{
            width: 50%;
        }
        table, th, td {
            border: 5px solid red;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
        table#t01, tr#t02, td{
            border: 1px solid black;
        }
        #t03{
            border: 1px solid black;
            text-align: center;
            color: black;
        }

        #t02{
            background-color: #aaa;
            color: white;
        }
        button#b {
            background-color: Transparent;
            background-repeat:no-repeat;
            border: none;
            cursor:pointer;
            overflow: hidden;
            outline:none;
        }
        button#c {
            color: green;
            background: khaki;
            font-size: 120%;
        }
        button#d {
            color: red;
            background: khaki;
            font-size: 120%;
            margin-left: 22px ;
        }
        #dd{
            margin: 10px 30px 20px 30px;
        }
    </style>
<body>

    <?php 
        if(isset($_POST['approve'])){
        $id=$_POST['approve'];
        $sql="SELECT * FROM temporary_hall_fees WHERE ID=$id";
        $rslt=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($rslt);

        $level=$row['Level'];$term=$row['Term']; $pic=$row['Pic']; $green='<span style="color:green">&#10004</span>';
        $dlt="DELETE FROM temporary_hall_fees WHERE temporary_hall_fees.ID=$id";
        $user=$row['Username'];
        
        if($level=='Level-1' and $term=='Term-1'){
            $sql="UPDATE hall_fees SET L1T1='$green', L1T1_Pic='$pic' WHERE Username='$user'";
            if(mysqli_query($conn,$sql)){
                echo "<script type='text/javascript'>$.notify('Successfully Received..','success')</script>";
                mysqli_query($conn,$dlt);
            }
            else "<script type='text/javascript'>$.notify('Ooopss! an error occured..','warn')</script>";
        }

        else if($level=='Level-1' and $term=='Term-2'){
            $sql="UPDATE hall_fees SET L1T2='$green', L1T2_Pic='$pic' WHERE Username='$user'";
            if(mysqli_query($conn,$sql)){
                echo "<script type='text/javascript'>$.notify('Successfully Received..','success')</script>";
                mysqli_query($conn,$dlt);
            }
            else "<script type='text/javascript'>$.notify('Ooopss! an error occured..','warn')</script>";
        }
        else if($level=='Level-2' and $term=='Term-1'){
            $sql="UPDATE hall_fees SET L2T1='$green', L2T1_Pic='$pic' WHERE Username='$user'";
            if(mysqli_query($conn,$sql)){
                echo "<script type='text/javascript'>$.notify('Successfully Received..','success')</script>";
                mysqli_query($conn,$dlt);
            }
            else "<script type='text/javascript'>$.notify('Ooopss! an error occured..','warn')</script>";
        }
        else if($level=='Level-2' and $term=='Term-2'){
            $sql="UPDATE hall_fees SET L2T2='$green', L2T2_Pic='$pic' WHERE Username='$user'";
            if(mysqli_query($conn,$sql)){
                echo "<script type='text/javascript'>$.notify('Successfully Received..','success')</script>";
                mysqli_query($conn,$dlt);
            }
            else "<script type='text/javascript'>$.notify('Ooopss! an error occured..','warn')</script>";
        }
        else if($level=='Level-3' and $term=='Term-1'){
            $sql="UPDATE hall_fees SET L3T1='$green', L3T1_Pic='$pic' WHERE Username='$user'";
            if(mysqli_query($conn,$sql)){
                echo "<script type='text/javascript'>$.notify('Successfully Received..','success')</script>";
                mysqli_query($conn,$dlt);
            }
            else "<script type='text/javascript'>$.notify('Ooopss! an error occured..','warn')</script>";
        }
        else if($level=='Level-3' and $term=='Term-2'){
            $sql="UPDATE hall_fees SET L3T2='$green', L3T2_Pic='$pic' WHERE Username='$user'";
            if(mysqli_query($conn,$sql)){
                echo "<script type='text/javascript'>$.notify('Successfully Received..','success')</script>";
                mysqli_query($conn,$dlt);
            }
            else "<script type='text/javascript'>$.notify('Ooopss! an error occured..','warn')</script>";
        }
        else if($level=='Level-4' and $term=='Term-1'){
            $sql="UPDATE hall_fees SET L4T1='$green', L4T1_Pic='$pic' WHERE Username='$user'";
            if(mysqli_query($conn,$sql)){
                echo "<script type='text/javascript'>$.notify('Successfully Received..','success')</script>";
                mysqli_query($conn,$dlt);
            }
            else "<script type='text/javascript'>$.notify('Ooopss! an error occured..','warn')</script>";
        }
        else if($level=='Level-4' and $term=='Term-2'){
            $sql="UPDATE hall_fees SET L4T2='$green', L4T2_Pic='$pic' WHERE Username='$user'";
            if(mysqli_query($conn,$sql)){
                echo "<script type='text/javascript'>$.notify('Successfully Received..','success')</script>";
                mysqli_query($conn,$dlt);
            }
            else "<script type='text/javascript'>$.notify('Ooopss! an error occured..','warn')</script>";
        }
    }
    else if(isset($_POST['deny'])){
        $id=$_POST['deny'];
        $dlt="DELETE FROM temporary_hall_fees WHERE temporary_hall_fees.ID= $id";
        if(mysqli_query($conn,$dlt)){
            echo "<script type='text/javascript'>$.notify('Successfully Rejected..','success')</script>";
        }
        else "<script type='text/javascript'>$.notify('Ooopss! an error occured..','warn')</script>";
    }
    ?>

    <?php include('header.php'); ?>
        <div class="w3-row w3-khaki">
        
        
        <div class="w3-col w3-container w3-teall" style="width: 100%; background: rgb(12, 141, 154)">
            <center><h2 style="font-family: Imprint MT shadow; color: cyan">Hall Fees Payee's List</h2></center> <hr>
            <div id="dd" style="background : khaki">
                <table id="t01">
                    <tr id="t02">
                        <th id="t03">Username</th>
                        <th id="t03">Student ID</th>      
                        <th id="t03">First Name</th>
                        <th id="t03">Last Name</th>
                        <th id="t03">Level</th>
                        <th id="t03">Term</th>
                        <th id="t03">Response</th>
                    </tr>
                    <?php

                        $sql="SELECT * FROM temporary_hall_fees LIMIT 0,25";
                        $rslt=mysqli_query($conn, $sql);

                        if(mysqli_num_rows($rslt)){
                            while($row=mysqli_fetch_assoc($rslt)){ 
                            $a=$row["ID"];
                            $aa=$row['Username'];
                            $b=$row['StID']; $c=$row['Fname']; $d=$row['Lname'];
                            $e=$row['Level'];$f=$row['Term'];
                            $v=$_SERVER["PHP_SELF"];

                            echo "<tr><td id='t03'><form action='Hall_fees_profile.php' target='_blank' method='POST'><button id='b' value='$a' name='app'>$aa</button></form></td>
                                <td id='t03'><form action='Hall_fees_profile.php' target='_blank' method='POST'><button id='b' value='$a' name='app'>$b</button></form></td>
                                <td id='t03'><form action='Hall_fees_profile.php' target='_blank' method='POST'><button id='b' value='$a' name='app'>$c</button></form></td>
                                <td id='t03'><form action='Hall_fees_profile.php' target='_blank' method='POST'><button id='b' value='$a' name='app'>$d</button></form></td>
                                <td id='t03'><form action='Hall_fees_profile.php' target='_blank' method='POST'><button id='b' value='$a' name='app'>$e</button></form></td>
                                <td id='t03'><form action='Hall_fees_profile.php' target='_blank' method='POST'><button id='b' value='$a' name='app'>$f</button></form></td>
                                <form action='$v' method='POST'><td id='t03'><button id='c' name='approve' value='$a'>&#10004</button><button name='deny' id='d' value='$a'>&#10008</button></td></form>
                                </tr>";
                            }
                            //style='background-color: transparent;'class='w3-btn w3-transparent w3-card-1'
                        }
                    ?>
                </table>
            </div>
            <br><br>
        </div>

    </div>
    
    <?php include('footer.php'); ?>
</body>
</html>