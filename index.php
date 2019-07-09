<?php require_once 'actions/db_connect.php'; ?> 
<!--At this point, we don’t have any data in the database. 
From that reason, we will make just a database connection 
and the table which will hold the data. Later, when we insert 
data into the database we will retrieve data in the table.-->
<?php require_once 'actions/db_connect.php'; ?> 

<!DOCTYPE html>
<html>
<head>
   <title>PHP CRUD</title>

   <style type="text/css">
       .manageUser {
           width : 50%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
       }

   </style>

</head>
<body>

<div class ="manageUser">
   <a href= "create.php"><button type="button" >Add User</button></a>
   <table  border="1" cellspacing= "0" cellpadding="0">
       <thead>
           <tr>
               <th>Name</th>
               <th >Date of birth</th>
               <th >Option</th>
           </tr>
       </thead>
       <tbody>

            <?php
           $sql = "SELECT * FROM user WHERE active = 0";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['first_name']." ".$row['last_name' ]."</td>
                       <td>" .$row['date_of_birth']."</td>
                       <td>
                           <a href='update.php?id=" .$row['id']."'><button type='button'>Edit</button></a>
                           <a href='delete.php?id=" .$row['id']."'><button type='button'>Delete</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>

            
       </tbody>
   </table>
</div>

</body>
</html>