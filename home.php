<!DOCTYPE html>
<?php
include('connection.php');
$sql = "SELECT * FROM tbl_jenis_produk ";
$result = $conn->query($sql);
?>
<html lang="en">

<section>
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Bridging The GAP</h2>
            <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
        </div>
        <div class="row text-center">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-black"></i>
                    <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Producer</h4>
                <p class="text-muted">
                </p>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-warning"></i>
                    <i class="fas fa-bullhorn fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Silaris</h4>
                <p class="text-muted">

                </p>
            </div>
            <div class="col-md-4" data-aos="fade-up">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-success"></i>
                    <i class="fas fa-handshake fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Customer</h4>
                <p class="text-muted">

                </p>
            </div>
        </div>
    </div>
</section>