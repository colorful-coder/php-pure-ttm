<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .ml-5 {
            margin-left: 13rem !important;
        }
    </style>

</head>
<body>

    <h1 class="p-3 mb-2 bg-info text-white text-center 
        font-weight-bold mb-5">
        Add New Category
    </h1>
    <a class="d-flex justify-content-end mr-3" href="cat-list.php">Category List</a>

    <div class="container">
        <form action="cat-add.php" method="post">
            <div class="row mb-1">
                <label class="font-weight-bold" for="name">Category Name</label>
            </div>

            <div class="row mb-3">
                <input class="col-6" type="text" name="name" id="name">
            </div>

            <div class="row mb-1">
                <label class="font-weight-bold" for="remark">Remark</label>
            </div>

            <div class="row mb-3">
                <textarea class="col-6" type="text" name="remark" id="remark"></textarea>
            </div>

            <input class="btn btn-info ml-5" type="submit" value="Add Category">
        </form>
    </div>

</body>
</html>