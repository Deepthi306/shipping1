<?php include 'includes/header.php'; ?>

<?php

include_once 'controller/main.php';
$user = new dashboard();


if (isset($_POST['submit'])) {

    extract($_REQUEST);

    if (isset($_FILES['testimonals']['name']) && $_FILES['testimonals']['name'] != "") {

        $ImageFilePath = $_FILES['testimonals']['tmp_name'];
        $Imagepath = $_FILES['testimonals']['name'];
        $Imageext = pathinfo($Imagepath, PATHINFO_EXTENSION);
        $imagefi = "testimonals_" . time() . "." . $Imageext;
        $newsdsFilePath = "uploads/" . $imagefi;
        move_uploaded_file($ImageFilePath, $newsdsFilePath);
        $testimonals = $newsdsFilePath;
    } else {
        $testimonals = "NONE";
    }



    $user->addnewtestimonals($name, $content, $testimonals);

    if ($user) {
?><script>
            alert('Testimonals Added Successfully');
            window.location = 'testimonals.php';
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
        <h1>Add Testimonals</h1>
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
                        <h5 class="card-title">Add Testimonals</h5>

                        <!-- General Form Elements -->
                        <form method="post" enctype="multipart/form-data">


                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Image (300*150 pixels)</label>
                                <input class="form-control" name="testimonals" type="file" id="formFile" required>
                            </div>



                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
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