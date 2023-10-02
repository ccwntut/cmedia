<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->

    <title>北科大陳擎文</title>
  </head>
  <body>
    <h1 class="text-center">北科大陳擎文，作業9</h1>
    <div class="container">
        <div class="row">
            <a class="btn bg-danger text-light col-2 offset-1" href="index.html">首頁</a>
            <a class="btn bg-warning col-2 offset-1" href="a1.html">第一題</a>
            <a class="btn bg-primary text-light col-2 offset-1" href="a2.html">第二題</a>
            <a class="btn bg-success text-light col-2 offset-1" href="a3.html">第三題</a>
        </div>
        <div class="row">
          <a class="btn bg-danger text-light col-2 offset-1" href="a4.html">第4題</a>
          <a class="btn bg-warning col-2 offset-1" href="a5.html">第5題</a>
          <a class="btn bg-primary text-light col-2 offset-1" href="a6.html">第6題</a>
      </div>
    </div>
    <hr>
    <form method="post" action="p9-6.php">
      <div class="container">
          <div class="row">
            <input name="t1" type="text" class="col-5 offset-1" value="Word">
            <input type="submit" class="btn btn-danger col-3 offset-1" value="關鍵字查詢書名">
          </div>
      </div>
  </form>    
  <h2 class="text-center">
  <?php    
    $str = $_POST["t1"];

    //讀取資料表，4個步驟：

    //1.連線資料庫
    $conn = new mysqli("sql12.freesqldatabase.com","sql12624444","pfqqf9xZTE","sql12624444");
    $conn->set_charset('utf8');

    //2.查詢資料表
    $result = $conn->query("select * from books where 書籍名稱 like '%".$str."%'");

    
    //3.輸出全部資料
    $rowall = $result->fetch_all(MYSQLI_ASSOC);
    foreach($rowall as $item)
    {
        echo "<br>".$item["書籍編號"].'，'.$item["書籍名稱"].'，'.$item["價格"];
    }        

    
    //4.關閉連線：close connect
    $conn->close();
?>  
  </h2>

  </body>
</html>


