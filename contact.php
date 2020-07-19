<!DOCTYPE html>
<?php
include('connection.php');
$sql = "SELECT * FROM tbl_jenis_produk ";
$result = $conn->query($sql);
?>
<html lang="en">







<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact Us</h2>
        </div>

        <div class="row">

            <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Our Address</h3>
                    <p>Jl. Pelita II, No.6, Kedung Halang, Bogor</p>
                </div>
            </div>

            <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="info-box">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>custcare@silarisfood.com</p>
                </div>
            </div>

            <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="info-box ">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p>0251-7503390</p>
                </div>
            </div>
        </div>
    </div>
</section>