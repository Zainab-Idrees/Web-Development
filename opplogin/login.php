<?php 
$page_title = "register";
include ("components/header.php");
include ("components/navbar.php");

?>


<!-- form strat -->
<div class="container col-4 mt-5" id="form" >
    <form action="/opplogin/do_register.php" method="POST">
        <h2 class="mb-4 mt-3 text-success">Login Form</h2>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
<!-- form end -->




<?php 
include ("components/footer.php");
?>