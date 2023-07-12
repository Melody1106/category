<?php include("db_connect.php")?>

<?php



$sqlCategory="SELECT * FROM category ";
$resultCategory = $conn->query($sqlCategory);
$cateMainRows = $resultCategory->fetch_all(MYSQLI_ASSOC);

//----------------------------------------
if(isset($_GET["category"])){
  $getCate = $_GET["category"];

  $sql = "SELECT c.category_name, c.category_id, s.subcategory_id, s.subcategory_name
  FROM subcategory AS s
  JOIN category AS c
  ON s.category_id = c.category_id
  WHERE s.category_id = $getCate
";
}else{
  $sql = "SELECT c.category_name, c.category_id, s.subcategory_id, s.subcategory_name
FROM subcategory AS s
JOIN category AS c
ON s.category_id = c.category_id
";
}

// $sql = "SELECT c.category_name, c.category_id, s.subcategory_id, s.subcategory_name
// FROM subcategory AS s
// JOIN category AS c
// ON s.category_id = c.category_id
// ";
$resultCate = $conn->query($sql); 
$cateRows = $resultCate->fetch_all(MYSQLI_ASSOC);

//var_dump($cateSbRows);
?>

<!doctype html>
<html lang="en">
<head>
  <title>category</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <div class="container">
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="category.php">全部主類別</a>
  </li>
  <?php foreach($cateMainRows as $mCAT):?>
  <li class="nav-item">
    <a class="nav-link" href="category.php?category=<?=$mCAT["category_id"]?>"><?=$mCAT["category_name"]?></a>
  </li>
  <?php endforeach;?>
</ul>
</div>

  <div class="container">
  <a class="btn btn-info mx-3" href="add-category.php"> 新增子類別</a>
    <div class="table-wrapper m-3 border border-1 rounded">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">子類別名稱</th>
            <th scope="col">狀態</th>
            <th scope="col">主類別</th>
            <th scope="col">操作</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($cateRows as $sbCAT): ?>
        <tr>
            <th scope="row"><?=$sbCAT["subcategory_id"]?></th>
            <td><?=$sbCAT["subcategory_name"]?></td>
            <td>顯示</td>
            <td><a href="category.php?category=<?=$sbCAT["category_id"]?>" class="text-decoration-none"> <?=$sbCAT["category_name"]?></a></td>
            <td>編輯|刪除|複製</td>
          </tr>
        <?php endforeach;?>
      
          <!-- <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>隱藏</td>
            <td>第二層級</td>
            <td>編輯|刪除|複製</td>
          </tr>
          -->
 
        </tbody>
      </table>
    </div>
    </div>




  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>