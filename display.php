<?php
    require_once("config.php");
?>
   <!DOCTYPE html>  
 <html>  
      <head>  
           <title>SINHGAD INSTITUTES</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 
          
          
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          
          
      </head>  
      <body>
        
          
          
          <?php
            $subject = "SDL";
            $year = "TE";
            $division = "B";
            $date = "2017-09-14";
            $query = "SELECT `subject`, `class`, `division`, `date`, `attend_array`, `lesson_plan` FROM `attendance_record` WHERE `division` = '$division' AND `class` = '$year' AND `subject` = '$subject' AND `date` = '$date'";
            $result = mysqli_query($connect, $query);
          
             
                         
          ?>
          
          
          
          <br /><br />  
           <div class="container">  
                <h3 align="center">Attendence</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="attendance_record" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>    
                                    <td>class</td>  
                                    <td>division</td>  
                                    <td>Present rollNo</td>  
                                    <td>Lesson Plan</td>
				               </tr>  
                          </thead> 
                         
                          <?php
                         if($result)
                          while($row =  mysqli_fetch_array($result))  
                          {
                                $arr = array();
                                $arr = explode(", ", $row["attend_array"]);
                                $arr_count = count($arr);
                              
                                for($i = 0 ; $i < $arr_count; $i++){?>
                                    <tr>  
                                   <td><?php echo $row["class"];?></td> 
                                   <td><?php echo $row["division"];?></td>  
                                    <td><?php echo $arr[$i];?></td>
                                    <td><?php echo $row["lesson_plan"];?></td>
				               </tr>  
                               <?php }
                                
                          }  ?>
                     </table>
                    
                    <a href="export-book.php">Export To Excel</a>
                    
                </div>  
           </div>  
          
     </body>
</html>
          
<script>  
 $(document).ready(function(){  
      $('#attendance_record').DataTable();  
 });  
 </script>  