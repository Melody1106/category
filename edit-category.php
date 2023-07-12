<?php include("db_connect.php")?>
<?php
if(!isset($_POST["category"])){
    die("請依正常管道進入");
}
 //$id = $_GET["id"];

//  $sql = "SELECT * FROM subcategory WHERE id=$id AND valid=1";
//  $result = $conn->query($sql);
//  $row = $result->fetch_assoc(MYSQLI_ASSOC);

//  var_dump($row );

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>


    <div class="container  d-flex flex-column justify-content-center align-items-center my-5">
        <div class="col-8 mb-3">
            <a class="btn btn-info" href="category.php">回類別頁面</a>
        </div>
        <div class="card col-8">
            <div class="card-header text-center">
                    編輯
            </div>
            <div class="card-body">
                <form action="doadd-category.php" method="post">

                    <div class="form-group mb-2">
                        <label class="" for="exampleFormControlInput1">ID</label>
                        <input disabled type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group mb-2">
                        <label class="" for="exampleFormControlInput1">子類別名稱</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="subcategory">
                    </div>
                    <div class="form-group mb-2">
                        <label class="" for="exampleFormControlInput1">狀態</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="valid">
                    </div>

                    <div class="form-group mb-2">
                        <label for="exampleFormControlSelect1">主類別</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="maincategory">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                        </select>
                    </div>

                   
                    <button class="btn btn-secondary" type="submit"> 送出</button>
                </form>


            </div>
        </div>



    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>