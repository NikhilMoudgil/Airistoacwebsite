<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<title>Home Airisto</title>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Airisto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-md-center" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  nav4 " aria-current="page" href="bsindex.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav4" href="bsabout.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav4" href="bscontact.php">Contact Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="bsservice.php" id="navbarDropdown2" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="bsservice.php#iservice">Installation And Uninstallation</a></li>
            <li><a class="dropdown-item" href="bsservice.php#sservice">Service</a></li>
            <li><a class="dropdown-item" href="bsservice.php#rservice">Repair And Gas Refil</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="bscharges.php" id="navbarDropdown3" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Charges
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="bscharges.php#icharges">Installation And Uninstallation Charges</a></li>
            <li><a class="dropdown-item" href="bscharges.php#scharges">Service Charges</a></li>
            <li><a class="dropdown-item" href="bscharges.php#rcharges">Repair And Gas Refil Charges</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link nav4" href="marketplace.php">Market Place</a>
        </li>
      </ul>
    </div>
    <a class="btn btn-primary" href="adminlogin.php" role="button">Admin login</a>
  </div>
</nav>