<!--File create.php (create.php) contains an HTML form from which user’s input data will be passed to the server-side and data will be inserted in the database.-->
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
   <title>PHP CRUD  |  Add User</title>
</head>
<body>

<fieldset >
   <legend>Add User</legend>

   <form  action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>First Name</th >
               <td><input  type="text" name="first_name"  placeholder="First Name" /></td >
           </tr>     
           <tr>
               <th>Last Name</th>
               <td><input  type="text" name= "last_name" placeholder="Last Name" /></td>
           </tr>
           <tr>
               <th>Date of birth</th>
               <td><input type="text"  name="date_of_birth" placeholder ="Data of birth" /></td>
           </tr>
           <tr>
               <td><button type ="submit">Insert user</button></td>
               <td ><a href= "index.php"><button  type="button">Back</ button></a></td>
           </tr >
       </table>
   </form>

</fieldset >

</body>
</html>


