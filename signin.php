<?php
include 'includes\common.php';
include 'includes\header.php';

if(isset($_SESSION['id'])){
	header('location: dashboard.php');
}

?>


<div class="container" style="margin-top: 150;">
  <h2> Login </h2>
  <form action="auth.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>


<?php
include 'includes\footer.php';
?>