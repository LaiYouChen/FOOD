<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;  //記得要跳出來，不然會重複轉址過多次
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>登入會員</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <script type="text/javascript" src="./main.js"></script>
    <nav
      class="navbar navbar-expand-lg navbar-light bg-light style= background-color: #e3f2fd;"
    >
      <div class="container-fluid">
        <a class="navbar-brand fs-1" href="./#">海線美食公道BRO</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <!--<div class="collapse navbar-collapse dropdown" id="navbarScroll">
          <ul class="navbar-nav ms-auto mb-2 mb-l g-0" >
          <ul
            class="navbar-nav ms-auto mb-2 mb-l g-0 navbar-nav-scroll"
            style="--bs-scroll-height: 100px"
          >
            <li class="nav-item">
              <a class="nav-link active fs-5" aria-current="page" href="./newindex.html"
                >| 首頁</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle active fs-5"
                href="#"
                id="navbarDarkDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                | 搜尋
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarDarkDropdownMenuLink"
              >
                <li>
                  <a class="dropdown-item" href="./areasearch.html"
                    >以地區搜尋</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="./foodsearch.html"
                    >以美食搜尋</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active fs-5" href="./trip.html">| 行程推薦</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active fs-5" href="./game.html">| 海線四選一</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active fs-5" href="./we.html">| 關於我們</a>
            </li>
          </ul>
        </div>--> 
      </div>
    </nav>

    
    <div class="card d-grid gap-2 col-8 mx-auto">
          <img class="logo" src="./foodimg/logo.jpg"/>
        <h2>Log in</h2>

        <form method = "post" action = "login.php" class="form">
            <input type="text" placeholder="Name" name="username">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" value="登入" name="submit">登入</button>
        </form>
        <footer>
            
            <a href="register.html">還沒有帳號？現在就註冊！</a>
        </footer>
    </div>


    <footer class="footer mt-auto py-3 bg-dark">
      <div class="container">
        <span class="text-muted"> 美食公道BRO </span>
      </div>
    </footer>
    
</body>
</html>