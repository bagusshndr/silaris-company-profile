<!DOCTYPE html>
<?php
include('connection.php');
global $conn;
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_jenis_produk WHERE kd_kategori = " . $id;
$result = $conn->query($sql);
$sqlproduk = "SELECT * FROM tbl_produk WHERE kd_jenis_produk = $id ";
$resultproduk = $conn->query($sqlproduk);
$sqljenisproduk = "SELECT * FROM tbl_jenis_produk WHERE kd_jenis = $id";
$resultjenisproduk = $conn->query($sqljenisproduk);
$row = $resultjenisproduk->fetch_row();
$jenisproduk = $row[1];



?>
<html lang="en">


<body>


    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase"> Our Product</h2>
                <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
            </div>
            <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid servicepro mb-3 mb-lg-0" width="50%" src="assets/img/1.png" alt="" data-aos="fade-down" data-aos-delay="100" />
                </div>
                <div class="col-xl-4 col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="featured-text text-center text-lg-left">

                        <p class="text-black mb-0">Our core business involves bridging between our suppliers to our
                            customers, in certified quality and consistency of supplying import ingredients such as
                            Sorbitol, Dextrose Monohydrate, Maltodextrin and Corn Starch. We provide full services to
                            deliver food applications such as chocolate filling, vermicelli (Rice chocolate / meises),
                            seasoning powder, cake gel and flavor. For Traditional market and Horeca we distribute
                            products like cooking oil, frying fat, topping sauce, yoghurt, milk, and flavor.
                        </p>
                    </div>
                    <div class="featured-text text-center text-lg-left">
                        <p class="text-black mb-0">Our main principle is protecting our quality
                            consistency, stable continuity of supply
                            and their maintained quality standards.
                            Other than that, the ingredients we provide
                            have received the halal certificate from
                            the Indonesian Ulema Council.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="section-title">
                <h2>Our Product</h2>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <?php
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                $jenis_produk = $row["jenis_produk"];
                                $kd_jenis = $row["kd_jenis"];
                                echo "<li data-filter='.filter-$kd_jenis'>$jenis_produk</li>";
                            }
                        }
                        ?>
                        <!-- <li data-filter=".filter-cooking">Cooking Oil</li>

                        <li data-filter=".filter-margarine">Margarine</li>
                        <li data-filter=".filter-fat">Fat Oil</li>
                        <li data-filter=".filter-sari">Sari Roti</li>
                        <li data-filter=".filter-garam">Garam</li> -->
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">
                <?php
                if ($result->num_rows > 0) {
                    foreach ($result as $jenis_produk) {
                        $kdJenis = $jenis_produk['kd_jenis'];
                        $sqlproduk = "SELECT * FROM tbl_produk WHERE kd_jenis_produk = " . $kdJenis;
                        $resultproduk = $conn->query($sqlproduk);
                        foreach ($resultproduk as $produk) {
                            $kd_jenis_produk = $kdJenis;
                            $foto = $produk["foto"];
                            $imagePath = "backend/upload/produk/" . $foto;
                            // echo $imagePath;
                ?>
                            <?php
                            echo "<div class='col-lg-4 col-md-6 portfolio-item filter-$kd_jenis_produk'>";

                            // echo "<div class='col-lg-4 col-md-6 portfolio-item filter-$kd_jenis_produk'>";
                            ?>
                            <div class="portfolio-wrap">
                                <?php
                                echo "<img src='$imagePath' class='img-fluid' alt=''>";
                                ?>

                                <div class="portfolio-info">
                                    <?php
                                    $namaProduk = $produk['nama_produk'];
                                    $jenisProduk = $jenis_produk['jenis_produk'];

                                    echo "<h4>$namaProduk</h4>";
                                    echo "<p>$jenisProduk</p>";
                                    $kdProduk = "#portfolioModal" . $produk['kd_produk'];

                                    ?>
                                    <div class="portfolio-links">
                                        <?php
                                        echo " <a href='$imagePath' data-gall='portfolioGallery' class='venobox' title=''><i class='icofont-eye'></i></a>";
                                        echo "<a href='$kdProduk' data-toggle='modal' title='More Details'><i class='icofont-external-link'></i></a>";
                                        ?>

                                        <!-- <a href="#portfolioModal1" data-toggle="modal" title="More Details"><i class="icofont-external-link"></i></a> -->
                                    </div>
                                </div>
                            </div>
            </div>

<?php
                        }
                    }
                }
?>
        </div>

        </div>
    </section><!-- End Our Portfolio Section -->



    <!-- Portfolio Modals-->
    <!-- Modal 1-->
    <?php
    foreach ($result as $jenis_produk) {
        $kdJenis = $jenis_produk['kd_jenis'];
        $sqlproduk = "SELECT * FROM tbl_produk WHERE kd_jenis_produk = " . $kdJenis;
        $resultproduk = $conn->query($sqlproduk);
        foreach ($resultproduk as $produk) {
            $kd_jenis_produk = $kdJenis;
            $foto = $produk["foto"];
            $imagePath = "backend/upload/produk/" . $foto;
            $kdProduk = "portfolioModal" . $produk['kd_produk'];
            $keterangan = $produk["keterangan"];
            $nama_produk = $produk["nama_produk"];
            $kategori = $jenis_produk["jenis_produk"];
            // echo $imagePath;
            echo "<div class='portfolio-modal modal fade' id='$kdProduk' tabindex='-1' role='dialog' aria-hidden='true'>";
    ?>
            <!-- <div class="portfolio-modal modal fade" id="#portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true"> -->
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Product Name</h2>
                                    <?php
                                    echo "<h3 class='item-intro text-muted'>$nama_produk</h3>";
                                    echo "<img class='img-fluid d-block mx-auto' src='$imagePath' alt='' />";
                                    echo "<h3>Keterangan</h3>";
                                    echo "<p class='text-black'>$keterangan</p>";
                                    ?>


                                    <ul class="list-inline">
                                        <?php
                                        echo "<p><b>Kategori</b></p>";
                                        echo "<p>$kategori</p>";
                                        ?>
                                    </ul>
                                    <!-- <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    <?php
        }
    }
    ?>