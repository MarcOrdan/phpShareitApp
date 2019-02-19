<div class="card">
  <h5 class="card-header">ShareBoard</h5>
  <div class="card-body">
    <h5 class="card-title">Share something</h5>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method= "POST">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Body</label>
            <textarea name="body" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="">Link</label>
            <input type="text" name="link" class="form-control">
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        <a href="<?php echo ROOT_URL; ?>shares" class="btn btn-danger">Cancel</a> 
    </form>
  </div>
</div>