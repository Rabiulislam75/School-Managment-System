<?php
    
    $con= mysqli_connect('localhost','root','','project');
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome</title>
    <link rel="stylesheet" href="wstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style>
        .dropdown:hover>.dropdown-menu{
            display: block;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="welcome.php">School</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Insert
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="student.php">Student</a>
          <a class="dropdown-item" href="teacher.php">Teacher</a>
            <a class="dropdown-item" href="staff.php">Staff</a>
        </div>
      </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Information
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="vstudent.php">Student</a>
          <a class="dropdown-item" href="vteacher.php">Teacher</a>
            <a class="dropdown-item" href="vstaff.php">Staff</a>
        </div>
     <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <ul class="navbar-nav mr">
          
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Logout
        </a>
        <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cadmin.php">Create An Admin</a>
          <a class="dropdown-item" href="rpassword.php">Change Password</a>
            <a class="dropdown-item" href="login.php">logout</a>
        </div>
          </li>
          </ul>
  </div>
</nav>
    
    <table class="table table-striped table-dark">
        
        <tr>
            
            <th>ID</th>
             <th>Name</th>
             <th>Email</th>
             <th>Designation</th>
             <th>Address</th>
             <th>Mobile</th>
        
        </tr>
        <?php
        $select="select * from teacher";
        $run= mysqli_query($con,$select);
        while($show=mysqli_fetch_array($run))
        {
            
        
        ?>
        <tr>
        <td><?php echo $show['teacherid']; ?></td>
        <td><?php echo $show['teachername']; ?></td>
        <td><?php echo $show['teacheremail']; ?></td>
        <td><?php echo $show['teacherreg']; ?></td>
        <td><?php echo $show['teacheraddress']; ?></td>
        <td><?php echo $show['teachermobile']; ?></td>
        
        </tr>
        <?php
            }
        ?>
    </table>
    
</body>
</html>