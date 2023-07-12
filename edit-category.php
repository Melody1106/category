<?php include("db_connect.php")?>
<?php 
if(!isset($_GET["id"])){
    die("資料不存在");
}
$id = $_GET["id"];

$sql = "SELECT c.category_name, c.category_id, s.subcategory_id, s.subcategory_name, s.valid
FROM subcategory AS s
JOIN category AS c
ON s.category_id = c.category_id
WHERE s.subcategory_id = $id
";
$resultCateE = $conn->query($sql);
$rowCateE = $resultCateE->fetch_all(MYSQLI_ASSOC);

var_dump($rowCateE);

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
                <form action="" method="post">
                <?php foreach($rowCateE as $row): ?>
                    <div class="form-group mb-2">
                        <label class="" for="exampleFormControlInput1">ID</label>
                        <input disabled type="text" class="form-control" id="exampleFormControlInput1"value="<?=$row["subcategory_id"]?>" >
                    </div>
                  
                    <div class="form-group mb-2">
                        <label class="" for="exampleFormControlInput1">子類別名稱</label>
                        <input type="text" value="<?=$row["subcategory_name"]?>" class="form-control" id="exampleFormControlInput1" name="subcategory">
                    </div>
                    
                    <div class="form-group mb-2">
                        <label class="" for="exampleFormControlInput1">狀態</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="valid">
                    </div>
                    <?php endforeach;?>
                    <div class="form-group mb-2">
                        <label for="exampleFormControlSelect1">主類別</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="maincategory">
                            <option value="<?=$row["category_id"]?>"><?=$row["category_id"]?></option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                        </select>
                    </div>
                    
                   
                    <button class="btn btn-secondary" type="submit"> 確認</button>
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