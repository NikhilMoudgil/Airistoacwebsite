<?php
include('header.php');
?>
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/sslide1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block ">
                <h5>Installation</h5>
                <p>Ac installation And Unintallation</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/sslide2.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h5>Service</h5>
                <p>Window And Split Ac service</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/sslide3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Repair</h5>
                <p>Repair and Gas refil and fix</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container-fluid" id="iservice">
    <div class="row featurette d-flex justify-content-center align-items-center my-4 text-center">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Installation</h2>
            <p>Installation of indoor and outdoor unit with free gas check</p>
            <p>Installation of Window Ac and free gas check</p>
            <p>Procurement of spare parts at extra cost</p>
            <p>Unistallation of Window and Split ACs</p>
        </div>
        <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                src="images/sinstallation.jpg">
        </div>
    </div>
</div>
<div class="container-fluid" id="sservice">
    <div class="row featurette d-flex justify-content-center align-items-center my-4 text-center">
        <div class="col-md-7  order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Service</h2>
            <p>Get 2x dust removel with foam and power Jet technology </p>
            <p>Intence Cleaning of both outdoor and indoor units in Split Ac</p>
            <p>Deep Cleaning of filters , coil , drain trays , fins with foam and powerje </p>
            <p>Ac jacket for spill prevention in work area</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                src="images/sservice.jpg">
        </div>
    </div>
</div>
<div class="container-fluid" id="rservice">
    <div class="row featurette d-flex justify-content-center align-items-center my-4 text-center">
        <div class="col-md-7  order-md-1">
            <h2 class="featurette-heading fw-normal lh-1">Repair</h2>
            <p>Detailed diagnosis with same day resolution</p>
            <p>Visiting Charges Will be adjusted in the final bill </p>
            <p>Thorough Diagnosis and leak identification and fixing to avoid leakage</p>
        </div>
        <div class="col-md-5 order-md-2">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                src="images/srepair.jpg">
        </div>
    </div>
</div>

<!--Unsplash Api-->
<!--"http://source.unsplash.com/900x300/?Airconditioner"-->


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
<?php
include('footer.php');
?>