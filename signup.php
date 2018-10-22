<?php
include 'includes\common.php';
include 'includes\header.php';

?>


<div class="container" style="margin-top: 150;">
  <h2>Sign Up </h2>
  <form action="register.php" method="post">

    <div class="form-group">
      <label for="user_name">Full Name:</label>
      <input type="text" class="form-control" id="user_name" placeholder="Enter Name" name="user_name">
    </div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>


    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>

    <div class="form-group">
      <label for="repwd">Re-Enter Password:</label>
      <input type="password" class="form-control" id="repwd" placeholder="Re Enter password" name="repwd">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>


<?php
include 'includes\footer.php';
?>