<?php include 'includes/header.php'; ?>

<?php

include_once 'controller/main.php';
$user = new dashboard();


$id= $_GET['edit_id'];


if (isset($_REQUEST['submit'])) {

    extract($_REQUEST);
     $user->edituser($id, $name,$email,$mobile_number,$location);
    if ($user) {
?>

<script>
    alert('User edited Succesfully');
            window.location = 'user.php';
        </script><?php
                } else {
                    ?><script>
            alert('Error : Please Try Again....');
        </script><?php
                }
            }


?>



<main id="main" class="main">

<div class="pagetitle">
  <h1> Edit Users</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active">Users</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">

  <form action="" method="post" enctype="multipart/form-data">

  <?php
        $id = $_GET['edit_id'];
        $query = mysqli_query($conn, "Select * from users where id='$id'");
                        while ($row = mysqli_fetch_array($query)) {

                        ?>
        <div class="mt-3">
           <label for="exampleFormControlInput1" class="form-label">Name</label>
           <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['name']; ?>"placeholder="Name">
        </div>

        <div class="mt-3">
           <label for="exampleFormControlInput2" class="form-label">Mobile Number</label>
           <input type="tel" name="mobile_number" class="form-control" id="exampleFormControlInput2" value="<?php echo $row['mobile']; ?>" placeholder="Mobile Number">
        </div>
        
        <div class="mt-3">
           <label for="exampleFormControlInput3" class="form-label">Email address</label>
           <input type="email" name="email" class="form-control" id="exampleFormControlInput3" value="<?php echo $row['email']; ?>" placeholder="name@example.com">
        </div>
       
        <div class="mt-3">
           <label for="exampleFormControlInput4" class="form-label">Location</label>
           <input type="text"  name="location" class="form-control" id="exampleFormControlInput4" value="<?php echo $row['location']; ?>" placeholder="Location">
        </div>

        <div class="mt-3">
        <input type="submit"  name="submit" class="btn btn-primary" value="submit">
        </div>
        <?php } ?>
  </form>
        </div>
      </div>

    </div>
  </div>

</section>

</main><!-- End #main -->

                    


<?php include 'includes/footer.php'; ?>