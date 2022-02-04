<?php 

            $conn = mysqli_connect("localhost", "", "", "");
                
                // Check connection
                if($conn === false){
                    die("ERROR: Could not connect. "
                        . mysqli_connect_error());
                }
                
                mysqli_set_charset($conn, "utf8");
                // mysql_query("SET NAMES 'utf8';");
                // mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $conn);
                
            $data = json_decode($_POST['params'], true);
                $name = $data['name'];
                $phone = $data['phone'];
                $email = $data['email'];
                $answers = implode("\n\r",$data['answers']);
                echo $answers;
            
                // Performing insert query execution
                // here our table name is collect   

                if (!empty($name) && !empty($phone) && !empty($email)) {
                    mysqli_query($conn, "INSERT INTO users (name, phone, email, answers) VALUES ('$name','$phone','$email','$answers')");
                }
                
                mysqli_close($conn);
                
             
?>
