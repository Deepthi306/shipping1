<?php include 'includes/header.php'; ?>

<?php

include_once 'controller/main.php';
$user = new dashboard();


if (isset($_POST['submit'])) {

    extract($_REQUEST);

    if (isset($_FILES['banner']['name']) && $_FILES['banner']['name'] != "") {

        $ImageFilePath = $_FILES['banner']['tmp_name'];
        $Imagepath = $_FILES['banner']['name'];
        $Imageext = pathinfo($Imagepath, PATHINFO_EXTENSION);
        $imagefi = "banner_" . time() . "." . $Imageext;
        $newsdsFilePath = "uploads/" . $imagefi;
        move_uploaded_file($ImageFilePath, $newsdsFilePath);
        $banner = $newsdsFilePath;
    } else {
        $banner = "NONE";
    }



    $user->addnewbanner($banner);

    if ($user) {
?><script>
            alert('Banner Added Successfully');
            window.location = 'banner.php';
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
        <h1>Add Banner</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Banner</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Banner</h5>

                        <!-- General Form Elements -->
                        <form method="post" enctype="multipart/form-data">

                            <div class="row mb-3">
                                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Title :</label>
                                <div class=" col-sm-10">

                                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="title">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Banner (1920*810 pixels)</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="banner" type="file" id="formFile" required>
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