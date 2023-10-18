<?php include 'includes/header.php'; ?>

<?php

include_once 'controller/main.php';
$user = new dashboard();


$id = $_GET['edit_id'];
$banner = $user->bannerdetails($id);


if (isset($_REQUEST['submit'])) {

    if (isset($_FILES['banner']['name']) && $_FILES['banner']['name'] != "") {
        $tmpFilePath = $_FILES['banner']['tmp_name'];
        $path = $_FILES['banner']['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $bannerfi = "subcategory_" . time() . "." . $ext;
        $banner = "uploads/" . $bannerfi;
        move_uploaded_file($tmpFilePath, $banner);
    } else {
        $banner =  $_POST['oldbanner'];
    }
    extract($_REQUEST);

    $user->editbanner($id, $title, $banner);
    //$update = mysqli_query($conn, "UPDATE `tbl_pdf` SET Image='$ImagePath', Title='$Title', Pdf='$PdfPath', Paragraph='$Paragraph' where id='$id'");

    if ($user) {

?><script>
            alert('Banner Edited Succesfully');
            window.location = 'banner.php';
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
                        <h5 class="card-title ">Edit Banner</h5>
                        <a href="banner.php" class="btn cur-p btn-dark mb-3">Back</a>

                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="row mb-3">
                                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Title :</label>
                                <div class=" col-sm-10">

                                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" value="<?php echo $banner->title ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Banner(1920*810 pixels)</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="banner">
                                </div>
                            </div>
                            <div>
                                <input type="hidden" name="oldbanner" value="<?php echo $banner->banner; ?>">
                                <img style="height:810px; width:100%" src="<?php echo $banner->banner; ?>">
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