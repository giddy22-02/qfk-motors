<?php

    // database
    include('config/db_connect.php');

    // check GET request id param
    if(isset($_GET['id'])) {
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        // make sql
        $sql = "SELECT * FROM listings WHERE id = $id";

        // get the query result
        $result = mysqli_query($conn, $sql);

        // fetch result in array format
        $listing = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);

    }

?>


<!DOCTYPE html>
<html lang="en">
<?php include ('templates/header.php'); ?>
    <main>
        <!-- hero section -->
        <div class="hero-secondary-section">
            <div class="container-custom">
                <div class="hero-secondary-content">
                    <p>Qfk-motors / Listing</p>
                </div>
            </div>
        </div>

        <!-- about -->
        <section class="listings">
            <div class="container-custom">
                <div class="listings-content">
                <?php if($listing): ?>
                    <header class="listings-header">
                        <h1>
                            <?php echo htmlspecialchars($listing['make']); ?>
                            <?php echo htmlspecialchars($listing['model']); ?>
                        </h1>
                    </header>
                    <div class="single-listing">
                        <div class="single-listing-info">
                            <div class="single-listing-data">
                                <div class="data-col">
                                    <ul class="data-title">
                                        <li>Availability:</li>
                                        <li>Make:</li>
                                        <li>Model:</li>
                                        <li>Year:</li>
                                        <li>Mileage:</li>
                                        <li>Transmission:</li>
                                        <li>Fuel:</li>
                                        <li>Body:</li>
                                        <li>Drive:</li>
                                        <li>Exterior:</li>
                                    </ul>
                                </div>
                                <div class="data-col">
                                    <ul class="data-data">
                                        <li><?php echo htmlspecialchars($listing['stock']); ?></li>
                                        <li><?php echo htmlspecialchars($listing['make']); ?></li>
                                        <li><?php echo htmlspecialchars($listing['model']); ?></li>
                                        <li><?php echo htmlspecialchars($listing['manufacture']); ?></li>
                                        <li><?php echo htmlspecialchars($listing['mileage']); ?>km</li>
                                        <li><?php echo htmlspecialchars($listing['transmission']); ?></li>
                                        <li><?php echo htmlspecialchars($listing['fuel']); ?></li>
                                        <li><?php echo htmlspecialchars($listing['body']); ?></li>
                                        <li><?php echo htmlspecialchars($listing['drive']); ?></li>
                                        <li><?php echo htmlspecialchars($listing['exterior']); ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-listing-image">
                                <div class="single-listing-imgcontainer">
                                    <img src="assets/img/Hero.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                </div>
            </div>
        </section>

        <!-- footer -->
        <?php include ('templates/footer.php'); ?>
</html>