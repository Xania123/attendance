<?php
    require_once 'db/conn.php';

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $specialty = $_POST['specialty'];

        $result = $crud->editAttendee($id,$fname,$lname,$dob,$email,$phone,$specialty);
        if($result){
            header("location: viewrecords.php");
        }
        else{
            //echo 'error';
            include 'includes/errormessage.php';
        }
    }
    else{
        //echo 'error';
        include 'includes/errormessage.php';
    }
?> 

    

   