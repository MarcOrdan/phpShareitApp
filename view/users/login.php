<div class="card">
  <h5 class="card-header">ShareBoard</h5>
  <div class="card-body">
    <h1 class="card-title">User Login</h1>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method= "POST">
        <div class="form-group">
            <label for=""><h4>Email</h4></label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for=""><h4>Password</h4></label>
            <input type="password" name="password" class="form-control">
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
    </form>
  </div>
</div>