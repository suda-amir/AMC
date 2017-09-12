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
            $year = "TE";
            $division = "C";
            $query = "SELECT `name`, `roll` FROM `student` WHERE `division` = '$division' AND `acad_year` = '$year'";
            $result = mysqli_query($connect, $query);
          ?>
          
          
          
          <br /><br />  
           <div class="container">  
                <h3 align="center">Mark Attendence</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="attendance_record" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                   <td>Roll No</td>  
                                    <td>Name</td>  
                                    <td>Present</td>  
                                    <td>Absent</td>  
                                    
				               </tr>  
                          </thead> 
                         
                          <?php
                         if($result)
                          while($row =  mysqli_fetch_array($result))  
                          {
                              ?>
                                
                               <tr>  
                                    <td><?php echo $row["roll"];?></td> 
                                    <td><?php echo $row["name"];?></td>             
                                    <td><button class="btn btn-lg btn-login btn-block" type="submit">Present</button></td>
                                   <?php
                                        
                                   ?>
                                    <td><button class="btn btn-lg btn-login btn-block" type="submit">Absent</button></td>
				               </tr>  
                              
                         <?php }  
                          ?>  
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