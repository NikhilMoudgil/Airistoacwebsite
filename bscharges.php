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
                <h5>Installation Charges</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/sslide2.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h5>Service Charges</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/sslide3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Repair Charges</h5>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="container mt-4" id="icharges">
    <h1>Installation And Uninstallation Charges</h1>
    <table class="table table-bordered table-striped table-primary">
        <thead>
            <tr>
                <th scope="col">Service Type</th>
                <th scope="col">Rate</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th colspan="2">Installation</th>
            </tr>
            <tr>
                <td> Installation Split</td>
                <td>&#8377 1200</td>
            </tr>
            <tr>
                <td>Installation Window</td>
                <td>&#8377 600</td>
            </tr>
            <tr>
                <th colspan="2">Uninstallation</th>
            </tr>
            <tr>
                <td> Uninstallation Split</td>
                <td>&#8377 600</td>
            </tr>
            <tr>
                <td>Uninstallation Window</td>
                <td>&#8377 350</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="container mt-4" id="scharges">
    <h1>Service Charges</h1>
    <table class="table table-bordered table-striped table-primary">
        <thead>
            <tr>
                <th scope="col">Service Type</th>
                <th scope="col">Rate</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th colspan="2">Service Split AC</th>
            </tr>
            <tr>
                <td> Foam And Power Jet</td>
                <td>&#8377 600</td>
            </tr>
            <tr>
                <td>Power Jet Only</td>
                <td>&#8377 400</td>
            </tr>
            <tr>
                <th colspan="2">Service Window AC</th>
            </tr>
            <tr>
                <td>Foam And Power Jet</td>
                <td>&#8377 400</td>
            </tr>
            <tr>
                <td>Power Jet Only</td>
                <td>&#8377 350</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="container mt-4" id="rcharges">
    <h1>Repair Charges</h1>
    <table class="table table-bordered table-striped table-primary">
        <thead>
            <tr>
                <th scope="col">Service Type</th>
                <th scope="col">Rate</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> Visiting Charges</td>
                <td>&#8377 250</td>
            </tr>
            <tr>
                <td>Labour And Cost Of Parts</td>
                <td>(Include in bill) </td>
            </tr>
            <tr>
                <td> Gas Refil and Fix</td>
                <td>&#8377 2500</td>
            </tr>
        </tbody>
    </table>
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