<?php include("include/static.php");
include"connection.php"; ?>
<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar ">
<!-- Navbar brand -->
<div class="container">
<<<<<<< HEAD
  <a class="navbar-brand" href="admin.php">Digital Voter.</a>
=======
  <a class="navbar-brand" href="">Digital Voter.</a>
>>>>>>> 577552013fa8cfd54354f05695ac72a6775473a4
    <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
<!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
  <!-- Links -->
      <ul class="navbar-nav mr-auto">
<<<<<<< HEAD
        
        <li class='nav-item'>
          <a class="nav-link" href="view.php">VIEW RESULTS</a>
=======
        <li class='nav-item'>
          <a class="nav-link" href="index.php">HOME</a>
        </li>
        <li class='nav-item'>
          <a class="nav-link" href="register.php">VIEW RESULTS</a>
>>>>>>> 577552013fa8cfd54354f05695ac72a6775473a4
        </li>
        <li class='nav-item'>
          <a class="nav-link" href="login.php">CREATE</a>
        </li>
        <li class="nav-item">
<<<<<<< HEAD
          <a class="nav-link" href="admin.php">ASPIRANTS</a>
=======
          <a class="nav-link" href="#">ASPIRANTS</a>
>>>>>>> 577552013fa8cfd54354f05695ac72a6775473a4
        </li>
      </ul>

    </div>
    <!-- Collapsible content -->
</div>
</nav>

<!-- Table to display aspirants -->
<?php 
$count = 1;
$result=mysqli_query($con,"SELECT *FROM aspirant"); ?>

<div class="table-responsive text-nowrap">

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Admission NUmber</th>
        <th scope="col">Political Party</th>
         <th scope="col">Phone</th>
        <th scope="col">Seat</th>
        <th scope="col">Year of Study</th>
        <th scope="col">Verify</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <!--th scope="row">1</th>-->
         <?php while ($row=mysqli_fetch_array($result)){
          ?>
          <tr>
            <td><?php echo $count++ ?></td>
            <td><?php echo $row['asp_name']; ?></td>
             <td><?php echo $row['asp_adm']; ?></td>
              <td><?php echo $row['party']; ?></td>
              <td><?php echo $row['phone']; ?></td>
               <td><?php echo $row['asp_seat']; ?></td>
                <td><?php echo $row['year']; ?></td>
<<<<<<< HEAD
             
              <td><div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" value="">
=======
               <!--td><a href="EditCategory.php?edit=<?php echo $row['service_category_id'];?>" class= "edit-btn"> <img src="../public/images/icon_content_small.gif" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;"></a></td>-->
              <td><div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" value="<">
>>>>>>> 577552013fa8cfd54354f05695ac72a6775473a4
    <label class="form-check-label" for="exampleCheck1"></label>
  </div></td>
             </tr>
           <?php }?>
       
       
      </tr>
    
    </tbody>
  </table>

</div>
<div class="text-right">
<<<<<<< HEAD
<button type="button" class="btn btn-dark">SUBMIT</button>
=======
  <a href='../components/editUser.php?asp_id=<?php echo $user['asp_id'] ?>' class="btn btn-dark"> SUBMIT</a>

>>>>>>> 577552013fa8cfd54354f05695ac72a6775473a4
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript">// Animations init
  new WOW().init();
</script>