<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>
    
    <h1 class="p-3 mb-2 bg-info text-white text-center 
    font-weight-bold mb-5">
        Edit Category
    </h1>
    <a class="d-flex justify-content-end mr-3" href="cat-list.php">Category List</a>

    <div class="container text-center">
        <?php
            include("confs/config.php");

            $id = $_GET['id'];

            $request = mysqli_query($conn,"select * from categories where id=$id");
            $row = mysqli_fetch_assoc($request);
        ?>
        <form action="cat-update.php" method="post">

            <div class="row mb-3">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <label class="col-6 font-weight-bold" for="name">Category Name</label>

                <input class ="col-4" type="text" name="name" id="name" 
                value="<?php echo $row['name'] ?>">
            </div>

            <div class="row">
                <label class="col-6 font-weight-bold" for="remark">Category Remark</label>
                <textarea class="col-4" name="remark" id="remark" row="3">
                    <?php echo $row['remark'] ?>
                </textarea>
            </div>

            <input class="btn btn-info mt-5" type="submit" value="Update Category">

        </form>
    </div>
</body>
</html>