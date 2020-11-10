<?php
include("connectionfile.php");

?>

<?php

if(isset($_POST['say']))		{
                                    
                                 	  $name = $_POST['name'];
                                 	  $email = $_POST['email'];
                                 	  $comment = $_POST['comment'];
                                 	  

                                 	  
                                   


                             	$query = "INSERT INTO contact (`name`,`email`,`comment`) 
                             	VALUES ('$name','$email','$comment')";
                             echo "<script type='text/javascript'> document.location = 'Thank.html'; </script>";
                              
                            

                             $result = mysqli_query($conn,$query);
                              echo 
                              exit();
                              
                                     
                                      
                                      // check if mysql query successful

                                      
                                   }

?>