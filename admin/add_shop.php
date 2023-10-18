<?php include 'includes/header.php'; ?>

<?php

include_once 'controller/main.php';
$user = new dashboard();


if(isset($_POST['submit']))
{
      extract($_REQUEST);
      $user->addshops($name,$shop_name,$mobile_number,$address,$location);

    if ($user) {
        ?><script>
            alert('Shop Added Successfully');
                            window.location = 'shops.php';
                        </script><?php
                                } else {
                                    ?><script>
                            document.getElementById("error").innerHTML = "Error : Please Check Database Connections And Main Classes.";
                        </script><?php
                                }
                             
}                 
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Shops</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Shops</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

            <form action="" method="post" enctype="multipart/form-data">

            <div class="mt-3">
               <label for="exampleFormControlInput1" class="form-label">Name</label>
               <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name">
            </div>

            <div class="mt-3">
               <label for="exampleFormControlInput2" class="form-label">Shop Name</label>
               <input type="text"  name="shop_name" class="form-control" id="exampleFormControlInput1" placeholder=" Shop Name">
            </div>

            <div class="mt-3">
               <label for="exampleFormControlInput3" class="form-label">Mobile Number</label>
               <input type="text" name="mobile_number" class="form-control" id="exampleFormControlInput3" placeholder="Mobile Number">
            </div>
            
            <div class="mb-3">
               <label for="exampleFormControlTextarea1" class="form-label">Address</label>
               <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mt-3">
               <label for="exampleFormControlInput4" class="form-label">Location</label>
               <input type="text" name="location" class="form-control" id="exampleFormControlInput4" placeholder="Location">
            </div>

            <div class="mt-3">
            <input type="submit"  name="submit" class="btn btn-primary" value="submit">
            </div>
            </form>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php
    include('includes/footer.php');
    ?>
