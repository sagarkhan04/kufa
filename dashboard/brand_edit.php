<?php 
    include('./extends/header.php');
    include('../config/db.php');

    $id = $_GET["edit_id"];

    $select_quary = "SELECT * FROM brands WHERE id='$id'";
    $connect = mysqli_query($db_connect,$select_quary);
    $brand = mysqli_fetch_assoc($connect);

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Brand Edit</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Brand edit</h3>
            </div>
            <div class="card-body">

                <form class="row g-3" action="brand_post.php" method="POST" enctype="multipart/form-data">

                    <div class="col-md-6">
                        <label for="" class="form-label">Brand Name</label>
                        <input type="text" class="form-control" placeholder="Brand Name" name="brand_name"
                            value="<?=$brand['brand_name']?>">
                        <input type="text" name="id" value="<?=$brand['id']?>">

                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="../images/brand/<?= $brand['image']; ?>" alt=""
                                style="width:150px; height:150px;">
                        </div>
                        <label for="" class="form-label">Brand Image</label>
                        <input type="file" class="form-control" name="image">

                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="update_btn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php 

include('./extends/footer.php')

?>