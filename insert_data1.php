 <?php 
// $connec = mysqli_connect("localhost", "root", "", "sample");

// if (!$connec) {
//     die("connection error: " . mysqli_connect_error());
// }
//          $date = date("y-m-d");
//             $sqlDate = "SELECT * FROM attendance WHERE date = '$date'";
//             $result = $conn->query($sqlDate);
//             echo $date;
//             if ($result1->num_rows > 0) {
//             while ($row = $result1->fetch_assoc()) {
//             $detail = $row['rollno'];
        
//               }
//             } else {
//              $sqlSelect = "SELECT * FROM student ORDER BY name ASC";
// 			 $query = mysqli_query($connec,$sqlSelect);
// 			 $num = mysqli_num_rows($query);
//              if($num>0){
//                 $date = date("y-m-d");
//                 $period1 = 'absent';
//                $period2 = 'absent';
//                $period3 = 'absent';
//                $period4 = 'absent';
//                $period5 = 'absent';
// 				while($result=mysqli_fetch_assoc($query)){
                           
                         
//                          $rollno = $result['rollno'];
//                          $name = $result['name'];
//                          $id = $result['id'];
                        
//                             $insertQuery1 = "INSERT INTO attendance(name, rfidno, rollno, date, period1, period2, period3, period4, period5) 
//                                             VALUES('$name','$id','$rollno','$date', '$period1', '$period2', '$period3', '$period4', '$period5')";
//                             $result1 = $connec->query($insertQuery1);
                    
//                             if ($result1 == TRUE) {
//                                 $insert_attendance = "Attendance details inserted for $date.<br>";
//                             } else {
//                                 // echo "Error inserting attendance details: " . $connec->error . "<br>";
//                             }
//                          }
                          
//         }
//     }
    ?> 