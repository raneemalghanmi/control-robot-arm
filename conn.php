<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname="rebortdata";

// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);
// Check connection
if (mysqli_connect_errno()) {
   printf("Connection failed: %s\n " ,mysqli_connect_errno());
}


// if  No Records  well  Insert Record 
$sql = "select count(*) as RecCount from control where ID=1 " ;
$result = mysqli_query($conn, $sql);
$count =@(int)mysqli_fetch_array($result)['RecCount'];

if ($count ==0 ) {
$sql = "insert into control Values(1,'') " ;
$result = mysqli_query($conn, $sql);
}


/*
if(isset($_POST['forward'])){
    
    if (mysqli_query($conn, "UPDATE  control SET direction='k' where ID=1 ")) {
        echo "New Update successfully !";
     } else {
        echo "Error: "  . mysqli_error($conn);
     }
   }
     else if(isset($_POST['stop'])){

        if (mysqli_query($conn, "UPDATE  control SET direction='s' where ID=1 ")) {
            echo "New Update successfully !";
         } else {
            echo "Error: "  . mysqli_error($conn);
         }
     }

     else if(isset($_POST['backward'])){

        if (mysqli_query($conn, "UPDATE  control SET direction='b' where ID=1 ")) {
            echo "New Update successfully !";
         } else {
            echo "Error: "  . mysqli_error($conn);
         }
     }

     else if(isset($_POST['right'])){

        if (mysqli_query($conn, "UPDATE  control SET direction='r' where ID=1 ")) {
            echo "New Update successfully !";
         } else {
            echo "Error: "  . mysqli_error($conn);
         }
     
     
            }

            else if(isset($_POST['left'])){

                if (mysqli_query($conn, "UPDATE  control SET direction='L' where ID=1 ")) {
                    echo "New Update successfully !";
                 } else {
                    echo "Error: "  . mysqli_error($conn);
                 }
             
             
                    }

                 */   

                if(isset($_POST['dir'])){
$dir = @trim($_POST['dir']) ;
                  if (mysqli_query($conn, "UPDATE  control SET direction='$dir' where ID=1 ")) {
                      echo "New Update successfully !";
                   } else {
                      echo "Error: No Update :- "  . mysqli_error($conn);
                   }
               
               
                      }






     
?>
