<?php include 'includes/header.php'; ?>

<?php

include_once 'controller/main.php';
$user = new dashboard();


if (isset($_POST['submit'])) {

    extract($_REQUEST);

    if (isset($_FILES['gallery']['name']) && $_FILES['gallery']['name'] != "") {

        $ImageFilePath = $_FILES['gallery']['tmp_name'];
        $Imagepath = $_FILES['gallery']['name'];
        $Imageext = pathinfo($Imagepath, PATHINFO_EXTENSION);
        $imagefi = "gallery_" . time() . "." . $Imageext;
        $newsdsFilePath = "uploads/" . $imagefi;
        move_uploaded_file($ImageFilePath, $newsdsFilePath);
        $gallery = $newsdsFilePath;
    } else {
        $gallery = "NONE";
    }



    $user->addnewgallery($gallery);

    if ($user) {
?><script>
            alert('gallery Added Successfully');
            window.location = 'gallery.php';
        </script><?php
                } else {
                    ?><script>
            document.getElementById("error").innerHTML = "Error : Please Check Database Connections And Main Clases.";
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
                        <h5 class="card-title">Add Gallery</h5>

                        <!-- General Form Elements -->
                        <form method="post" enctype="multipart/form-data">

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">File Upload (600*460 pixels)</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="gallery" type="file" id="formFile" required>
                                </div>
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