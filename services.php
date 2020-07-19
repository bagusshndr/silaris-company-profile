<!DOCTYPE html>
<?php
include('connection.php');
global $conn;
$sql = "SELECT * FROM tbl_costumer ";
$result = $conn->query($sql);
$sqlprincipal = "SELECT * FROM tbl_principal ";
$resultprincipal = $conn->query($sqlprincipal);

?>
<html lang="en">






<section class="projects-section bg-white" id="projects">
    <div class="container">
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6">
                <div class="project-text w-100 my-auto text-center text-lg-right icon" data-aos="fade-center" data-aos-delay="100">
                    <h4 class="text-black">Distributor for Horeca and General Trade :
                    </h4>
                    <p class="mb-0 text-black-50">We distribute consumer products for traditional market, Hotel, Restaurant, Catering, and reseller with distribution coverage Bogor, Sukabumi, and Cianjur.
                        Serve from our warehouse in Bogor, Jawa Barat
                    </p>
                    <hr class="d-none d-lg-block mb-0 mr-0" />
                </div>
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project icon">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right" data-aos="fade-center" data-aos-delay="100">
                            <h4 class="text-black">Distributor for Factories and Industrials :
                            </h4>
                            <p class="mb-0 text-black-50">We distribute raw material products for many big Factories and Industrials with distribution coverage Sumatera and Jawa.
                                Serve from our warehouse in Jatiuwung-Tangerang, and Grand Galaxy City-Bekasi.

                            </p>
                            <hr class="d-none d-lg-block mb-0 mr-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>