<!DOCTYPE html>
<?php
include('connection.php');
global $conn;
$sqlprincipal = "SELECT * FROM tbl_principal ";
$resultprincipal = $conn->query($sqlprincipal);

?>
<html lang="en">
<section class="page-section bg-white" id="portfolio">
    <div class="py-5">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Principal</h2>
                <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
            </div>
            <div class="row" data-aos="fade-right" data-aos-delay="100">
                <?php
                if ($resultprincipal->num_rows > 0) {
                    // output data of each row
                    while ($row = $resultprincipal->fetch_assoc()) {
                        $fotoprincipal = $row["foto"];
                        $imagePathPrincipal = "backend/upload/principal/" . $fotoprincipal;

                ?>
                        <div class="col-md-3 col-sm-6 my-3">
                            <?php
                            echo "<a href='#!'><img class='img-fluid principal d-block mx-auto' src='$imagePathPrincipal' alt='' /></a>";
                            ?>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>