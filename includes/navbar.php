<?php

if(isset($_SESSION['loggedIn'])){
    echo '
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="navbar-collapse collapse w-100  dual-collapse2">
            <a class="navbar-brand d-flex justify-content-start" href="#">
                <img src="https://i.imgur.com/1YBHpIZ.png" width="101" height="40" alt="">
            </a>
        
            </div>
            <div class="mx-auto order-0 w-75 " style="width: 100%">
            <ul class="navbar-nav mr-auto d-flex justify-content-center">
                <li class="nav-item btn-link active">
                <a class="nav-link" href="index.php">Foreclosed</a>
                </li>
                <li class="nav-item btn-link">
                <a class="nav-link" href="sale.php">Sale</a>
                </li>
                <li class="nav-item btn-link">
                <a class="nav-link" href="rents.php">Rent</a>
                </li>
                <li class="nav-item btn-link">
                <a class="nav-link" href="agents.php">Agents</a>
                </li>
                <li class="nav-item btn-link">
                <a class="nav-link" href="blog.php">Blog</a>
                </li>
            </ul>
            <div class="form-inline my-2 mylg-0">
                <div class="input-group mb-3" style="width: 100%">
                <input style="border-radius: 10px 0px 0px 10px !important; border: transparent" type="text" class="form-control"
                        placeholder="Search Location" aria-label="Example text with button">
                <div class="input-group-append">
                    <button class="btn btn-light" type="button">
                    <i class="fas fa-search-location" style="color: #32CD32;"></i>
                    </button>
                    <button style="border-radius: 0px 10px 10px 0px;" class="btn btn-light" id="btn_filter" type="button">
                    <i class="fas fa-cogs" style="color: #32CD32;"></i>
                    </button>
                </div>
                </div>
            </div>
            </div>
            <div class="navbar-collapse collapse w-100 d-flex justify-content-end">
            <ul class="navbar-nav ">
                <li class="nav-item">
                <a class="nav-link" href="home_auction.php">Auction Calendar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"  id="nav_fullname">' . $_SESSION["userFullname"] . '</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="includes/sessions/logout.php"  id="nav_logout">Log Out</a>
                </li>
            </ul>
            </div>
        </nav>

    ';
} else{

    echo'
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="navbar-collapse collapse w-100  dual-collapse2">
      <a class="navbar-brand d-flex justify-content-start" href="#">
        <img src="https://i.imgur.com/1YBHpIZ.png" width="101" height="40" alt="">
      </a>
  
    </div>
    <div class="mx-auto order-0 w-75 " style="width: 100%">
      <ul class="navbar-nav mr-auto d-flex justify-content-center">
        <li class="nav-item btn-link active">
          <a class="nav-link" href="index.php">Foreclosed</a>
        </li>
        <li class="nav-item btn-link">
          <a class="nav-link" href="sale.php">Sale</a>
        </li>
        <li class="nav-item btn-link">
          <a class="nav-link" href="rents.php">Rent</a>
        </li>
        <li class="nav-item btn-link">
          <a class="nav-link" href="agents.php">Agents</a>
        </li>
        <li class="nav-item btn-link">
          <a class="nav-link" href="blog.php">Blog</a>
        </li>
      </ul>
      <div class="form-inline my-2 my-lg-0">
        <div class="input-group mb-3" style="width: 100%">
          <input style="border-radius: 10px 0px 0px 10px !important; border: transparent" type="text" class="form-control"
                 placeholder="Search Location" aria-label="Example text with button">
          <div class="input-group-append">
            <button class="btn btn-light" type="button">
              <i class="fas fa-search-location" style="color: #32CD32;"></i>
            </button>
            <button style="border-radius: 0px 10px 10px 0px;" class="btn btn-light" id="btn_filter" type="button">
              <i class="fas fa-cogs" style="color: #32CD32;"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-collapse collapse w-100 d-flex justify-content-end">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" href="home_auction.php">Auction Calendar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  id="nav_login" href="#">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="nav_register" href="#">Sign Up</a>
        </li>
      </ul>
    </div>
  </nav>
    
    
    ';
}


?>