<?php
    include('includes/header.php');
    ?>

<?php

include_once 'controller/main.php';
$user = new dashboard();
$shop_id = $_GET['add_id'];

if(isset($_POST['submit']))
{
      extract($_REQUEST);
      $user->addpromo($shop_id,$product_name,$amount,$discount);

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
      <h1>Promo</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Promo</li>
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
               <label for="exampleFormControlInput1" class="form-label">Product Name</label>
               <input type="text" name="product_name" class="form-control" id="exampleFormControlInput1" value="" placeholder="Name">
            </div>

            <div class="mt-3">
               <label for="exampleFormControlTextarea1" class="form-label">Total Amount</label>
               <input type="text" name="amount" class="form-control" id="exampleFormControlInput4" value="" placeholder="Amount">
            </div>
            <div class="mt-3">
               <label for="exampleFormControlInput4" class="form-label">Discount Percentage</label>
               <input type="text" name="discount" class="form-control" id="exampleFormControlInput4" value="" placeholder="Discount">
            </div>

            <div class="mt-3">
            <input type="submit"  name="submit" class="btn btn-primary" value="Add">
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
