<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>article</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
    <link href="./style1.css" rel="stylesheet" type="text/css">
</head>
<body>
  <script type="text/javascript" src="main.js"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-light style= background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand fs-1" href="./#">海線美食公道BRO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse dropdown" id="navbarScroll">
      <!--<ul class="navbar-nav ms-auto mb-2 mb-l g-0" >-->
      <ul class="navbar-nav ms-auto mb-2 mb-l g-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active fs-5" aria-current="page" href="./newindex.html">| 首頁</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active fs-5" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            |  搜尋
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="./areasearch.html">以地區搜尋</a></li>
            <li><a class="dropdown-item" href="./foodsearch.html">以美食搜尋</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-5" href="./trip.html">| 行程推薦</a>
        </li>
        <li class="nav-item">
              <a class="nav-link active fs-5" href="./game.html">| 海線四選一</a>
          </li>
        <li class="nav-item">
          <a class="nav-link active fs-5" href="./we.html">|  關於我們</a>
        </li>
        <li class="nav-item">
              <a class="nav-link active fs-5" href="./logout.php">| 登出&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a href="./logout.php"><img class="logo" src="./foodimg/logo.jpg"/></a>
          </li>
      </ul>
            
    </div>
  </div>
</nav>
<button><a href="./areasearch.html">上一頁</a></button>
<div class="card w-50 mx-auto">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link active" href="http://120.110.112.128/pu/project/stickycheese/%e5%b0%88%e9%a1%8c/0.0/NEW/article.php#7">照片</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://120.110.112.128/pu/project/stickycheese/%E5%B0%88%E9%A1%8C/0.0/NEW/map.php#">地圖</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
  <div class="card ">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>

    </div>
    <div class="carousel-inner" id="carousel">
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <hr style="filter: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color="#6f5499" size="4" />
  <div class="card-body mx-auto"  style="max-width: 30rem;">
    <h3 class="card-title" id ="title"></h3>
    <p class="card-text">
      <h5 id="address"></h5>
      <h5 id="tel"></h5>
      <h5 id="time"></h5>
      <h5 id="content"></h5> 
      </p>
  </div>
</div>
</div>
</div>

<form action = "" method = "POST">
<div class="row col-6 p-7 mx-auto" style="max-width: 30rem;">
  <textarea id="article_name" name = "name1" cols="60" rows="3" class="mx-auto" placeholder="請輸入店家名稱"></textarea>
  <textarea id="article_content" name = "content" cols="60" rows="6" class="mx-auto" placeholder="請輸入評論"></textarea>
  <br/>
  <div class="container">
    <div class="column">
        <input type="submit" value="保存" name = "submit" id = "savebtn" >
        <input type="reset" value="清除" name = "content" id = "clearbtn" >
    </div>
  </div>
<hr>
<p id="msg"></p>
</div>
</form>
<!-- <table>
  <tr>
      <th>Name</th>
      <th>Comment</th>
  </tr> -->
<footer class="footer mt-auto py-3 bg-dark">
  <div class="container">
    <span class="text-muted">
      美食公道BRO
    </span>
  </div>
</footer>

<?php

if(isset($_POST['submit'])){
  $new_message = array(
    "name1" => $_POST['name1'],
    "content" => $_POST['content']
  );
  if(filesize("./test1.json") == 0){
    $first_record = array($new_message);
    $data_to_save = $first_record;
  }
  else{
    $old_records = json_decode(file_get_contents("./test1.json"));
    array_push($old_records,$new_message);
    $data_to_save = $old_records;
  }
  if(!file_put_contents("./test1.json" , json_encode($data_to_save , JSON_PRETTY_PRINT), LOCK_EX)){
    $error = "Error storing message , please try again";
  }
  else{
    $success = "Message is stored successfully"; 
  }
}

?>

</body>
</html>