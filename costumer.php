<!DOCTYPE html>
<?php
include('connection.php');
global $conn;
$sql = "SELECT * FROM tbl_costumer ";
$result = $conn->query($sql);
?>
<html lang="en">
<section class="page-section bg-white" id="portfolio">
    <div class="py-5">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Customer</h2>
                <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
            </div>
            <div class="row" data-aos="fade-left" data-aos-delay="100">

                <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $foto = $row["foto"];
                        $imagePath = "backend/upload/costumer/" . $foto;

                ?>
                        <div class="col-md-3 col-sm-6 my-3">
                            <?php
                            echo "<a href='#!'><img class='img-fluid customer d-block mx-auto' src='$imagePath' alt='' /></a>";
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