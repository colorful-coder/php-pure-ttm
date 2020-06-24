<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <div class="p-3 mb-2 bg-info text-white mb-5">
        <h1 class="text-center font-weight-bold">
            Category List
        </h1>
    </div>
    <div class="container">
        <?php
            include("confs/config.php");
            $result = mysqli_query($conn,"select * from categories");
        ?>
        <div class="row text-center mb-2">
            <?php
                while($row = mysqli_fetch_assoc($result)):
            ?>
                <div class="col-6" title="<?php echo $row['remark'] ?>">
                    <?php echo $row['name'] ?>
                </div>
                <div class="col-6 mb-2">
                    <a href="cat-del.php?id=<?php echo $row['id'] ?>"
                        class="btn btn-outline-danger ml-3"> Del </a>
                    <a href="cat-edit.php?id=<?php echo $row['id'] ?>"
                    class="btn btn-outline-success"> Edit </a>
                </div>
            <?php
                endwhile;
            ?>
        </div>
        <a href="cat-new.php" class="btn btn-info float-right">New Category</a>
    </div>
</body>
</html>