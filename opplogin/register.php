<?php 
$page_title = "register";
include ("components/header.php");
include ("components/navbar.php");
?>

<div class="container col-4 mt-5" id="form">
    <form action="/opplogin/do_register.php" method="POST">
        <h2 class="mb-4 mt-3 text-success">Registration Form</h2>

        <div class="mb-3">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name" required>

            <label class="form-label mt-2">Last Name</label>
            <input type="text" class="form-control" name="last_name" required>

            <label class="form-label mt-2">Email address</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>

<?php include ("components/footer.php"); ?>
