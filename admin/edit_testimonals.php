<?php include 'includes/header.php'; ?>

<?php

include_once 'controller/main.php';
$user = new dashboard();


$id = $_GET['edit_id'];
$testimonals = $user->testimonalsdetails($id);


if (isset($_REQUEST['submit'])) {

    if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
        $tmpFilePath = $_FILES['image']['tmp_name'];
        $path = $_FILES['image']['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $bannerfi = "testimonals_" . time() . "." . $ext;
        $testimonals = "uploads/" . $bannerfi;
        move_uploaded_file($tmpFilePath, $testimonals);
    } else {
        $testimonals =  $_POST['oldtest'];
    }
    extract($_REQUEST);

    $user->edittestiomnals($id, $testimonals, $name, $content);
    //$update = mysqli_query($conn, "UPDATE `tbl_pdf` SET Image='$ImagePath', Title='$Title', Pdf='$PdfPath', Paragraph='$Paragraph' where id='$id'");

    if ($user) {

?><script>
            alert('Testimonals Edited Succesfully');
            window.location = 'testimonals.php';
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
        <h1>Add testimonals</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Testimonals</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title ">Edit Testimonals</h5>
                        <a href="testimonals.php" class="btn cur-p btn-dark mb-3">Back</a>


                        <!-- General Form Elements -->
                        <form method="post" enctype="multipart/form-data">


                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="<?php echo $testimonals->name ?>">
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Image (80*80 pixels)</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div>
                                <input type="hidden" name="oldtest" value="<?php echo $testimonals->image; ?>">
                                <img style="height:80px; width:80px" src="<?php echo $testimonals->image; ?>">
                            </div>


                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"><?php echo $testimonals->content ?></textarea>
                            </div>



                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->


                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->









<?php include 'includes/footer.php'; ?>