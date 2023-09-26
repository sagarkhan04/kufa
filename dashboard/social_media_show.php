<?php 

include('./extends/header.php');
include('../config/db.php');



$select_social_media = "SELECT * FROM  social_medias";
$medias = mysqli_query($db_connect,$select_social_media);

// messege na thakle no data show korbe se jonno fetch_assoc

$single_port = mysqli_fetch_assoc($medias);  

$serial = 0;

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Service</h1>
        </div>
    </div>
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-container">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Social Media Contact</a></li>

            </ol>
        </nav>
    </div>
    <!--========================= success sms  ==========================-->
    <?php if(isset($_SESSION['media_success'])) : ?>
    <div class="alert alert-custom" role="alert">
        <div class="custom-alert-icon icon-success"><i class="material-icons-outline">Done</i></div>
        <div class="alert-content">
            <span class="alert-title">Successfully</span>
            <span class="alert-text"><?= ($_SESSION['media_success']); ?></span>
        </div>

    </div>
    <?php endif; unset($_SESSION['media_success']); ?>
    <!--========================= success sms end  ==========================-->

    <!--========================= Delete sms  ==========================-->
    <?php if(isset($_SESSION['media_delete_success'])) : ?>
    <div class="alert alert-custom" role="alert">
        <div class="custom-alert-icon icon-success"><i class="material-icons-outline">Done</i></div>
        <div class="alert-content">
            <span class="alert-title">Sorry</span>
            <span class="alert-text"><?= ($_SESSION['media_delete_success']); ?></span>
        </div>

    </div>
    <?php endif; unset($_SESSION['media_delete_success']); ?>
    <!--========================= Delete sms end  ==========================-->
    <div class="row">
        <div class="col-12">

        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Service List</h3>
                <a href="social_media_add.php" class="btn btn-primary">Add</a>
            </div>
            <div class="card-body" style="overflow-y: scroll;">
                <table class="table table-striped">
                    <thead class="table-dark">

                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Link</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php if($single_port) :?>
                        <?php foreach($medias as $media) :?>
                        <tr>
                            <th scope="row"><?= ++$serial ?></th>
                            <td><?= $media['icon'] ?></td>
                            <td><?= $media['link'] ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="social_media_edit.php?edit_id=<?= $media['id'] ?>"
                                        class="btn btn-secondary btn-sm">Edit</a>

                                    <a href="social_media_post.php?delete_id=<?= $media['id'] ?>"
                                        class="btn btn-danger btn-sm">Delete</a>
                                </div>
                            </td>


                        </tr>

                        <!-- data na thakle no data sms massege dekhabe -->
                        <?php endforeach; ?>
                        <?php else :?>
                        <tr>
                            <td colspan="6" class="text-center">No Data Found!</td>
                        </tr>
                        <?php endif;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<?php 

include('./extends/footer.php')

?>