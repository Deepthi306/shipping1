<?php include 'includes/header.php'; ?>

<?php

include_once 'controller/main.php';
$user = new dashboard();


$id = $_GET['edit_id'];
$gallery = $user->gallerydetails($id);


if (isset($_REQUEST['submit'])) {

    if (isset($_FILES['gallery']['name']) && $_FILES['gallery']['name'] != "") {
        $tmpFilePath = $_FILES['gallery']['tmp_name'];
        $path = $_FILES['gallery']['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $galleryfi = "subcategory_" . time() . "." . $ext;
        $gallery = "uploads/" . $galleryfi;
        move_uploaded_file($tmpFilePath, $gallery);
    } else {
        $gallery =  $_POST['oldgallery'];
    }
    extract($_REQUEST);

    $user->editgallery($id, $gallery);
    //$update = mysqli_query($conn, "UPDATE `tbl_pdf` SET Image='$ImagePath', Title='$Title', Pdf='$PdfPath', Paragraph='$Paragraph' where id='$id'");

    if ($user) {

?><script>
            alert('Gallery Edited Succesfully');
            window.location = 'gallery.php';
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
        <h1>Add Gallery</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Gallery</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title ">Edit Gallery</h5>
                        <a href="gallery.php" class="btn cur-p btn-dark mb-3">Back</a>


                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Gallery(600*460 pixels)</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="banner">
                                </div>
                            </div>
                            <div>
                                <input type="hidden" name="oldgallery" value="<?php echo $gallery->gallery; ?>">
                                <img style="height:460px; width:100%" src="<?php echo $gallery->gallery; ?>">
                            </div><br>

                            <div class="mb-3">
                                <div class="input-group input-group-merge">
                                    <input type="submit" class="btn btn-success" name="submit">
                                </div>
                            </div>
                        </form>






                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->









<?php include 'includes/footer.php'; ?>