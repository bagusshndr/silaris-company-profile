<!DOCTYPE html>
<?php
include('connection.php');
$sql = "SELECT * FROM tbl_jenis_produk ";
$result = $conn->query($sql);
?>
<html lang="en">







<section class="page-section icon" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Vision & Mision</h2>
            <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
        </div>
        <div class="row text-center">
            <div class="col-md-4" data-aos="fade-up">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-danger"></i>
                    <i class="fas fa-sun fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Vision</h4>
                <p class="text-muted">To be the most advanced, innovative, trusted and to always be sought by
                    customers and suppliers.
                </p>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-warning"></i>
                    <i class="fas fa-bullhorn fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Mision</h4>
                <p class="text-muted">To give wholehearted services by always listening, observing the market growth
                    especially in the food industry. Maintaining our customer’s trust which is why we value
                    relationships, great service, customizing to our customer’s needs and competitive selling
                    prices.
                </p>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-success"></i>
                    <i class="fas fa-handshake fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Goal</h4>
                <p class="text-muted">We are always there for the food industry; where we focus on finished products
                    from high, medium until the low-end markets.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="projects-section bg-white" id="projects">
    <div class="container">
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/logo.png" alt="" data-aos="fade-up" data-aos-delay="100" /></div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-black">Company Overview</h4>
                            <p class="mb-0 text-black-50">PT. Silaris Food Indonesia has been established in 2014 as a food trading company in Indonesia founded by professionals who are acquainted with the food trading world.
                                Silaris is growing to become one of the leading food trading companies in the Indonesian market due to founders strong presence in the food trading industry. We go with the motto “Experience, innovation and wholeheartedness” as it captures the value of what Silaris is as a brand.
                            </p>
                            <hr class="d-none d-lg-block mb-0 mr-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>