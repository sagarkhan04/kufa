<?php 

include('./extends/header.php');

include('../config/db.php');

$select_testimonial = "SELECT * FROM testimonials";
$testimonials = mysqli_query($db_connect,$select_testimonial);


$serial = 0;

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Testimonial Show</h1>
        </div>
    </div>
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-container">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Testimonial</a></li>

            </ol>
        </nav>
    </div>

    <!--========================= add success sms  ==========================-->
    <?php if(isset($_SESSION['testimonial_insert'])) : ?>
    <div class="alert alert-custom" role="alert">
        <div class="custom-alert-icon icon-success"><i class="material-icons-outline">done</i></div>
        <div class="alert-content">
            <span class="alert-title">Successfully</span>
            <span class="alert-text"><?= ($_SESSION['testimonial_insert']); ?></span>
        </div>
    </div>
    <?php endif; unset($_SESSION['testimonial_insert']); ?>
    <!--========================= add success sms end  ==========================-->

    <!--========================= delete success sms  ==========================-->
    <?php if(isset($_SESSION['testimonial_delete'])) : ?>
    <div class="alert alert-custom" role="alert">
        <div class="custom-alert-icon icon-success"><i class="material-icons-outline">done</i></div>
        <div class="alert-content">
            <span class="alert-title">Successfully</span>
            <span class="alert-text"><?= ($_SESSION['testimonial_delete']); ?></span>
        </div>
    </div>
    <?php endif; unset($_SESSION['testimonial_delete']); ?>
    <!--========================= delete success sms end  ==========================-->

    <div class="row">
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Testimonial List</h3>
            </div>
            <div class="card-body" style="overflow-y: scroll;">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Sub Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($testimonials as $testimonial) :?>
                        <tr>
                            <th scope="row"><?= ++$serial ?></th>
                            <td><img src="../images/testimonial/" alt="" style="width:80px; height:60px;"></td>
                            <td><?= $testimonial['name']?></td>
                            <td><?= $testimonial['sub_name']?></td>
                            <td><?= $testimonial['description']?></td>

                            <td>
                                <a href="testimonial_edit.php?edit_id=<?= $testimonial['id'] ?>"
                                    class="btn btn-secondary btn-sm">Edit</a>

                                <a href="testimonial_post.php?delete_id=<?= $testimonial['id'] ?>"
                                    class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<?php 

include('./extends/footer.php')

?>