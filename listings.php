<?php

    include('config/db_connect.php');

    // write query for all listings
    $sql = 'SELECT * FROM listings ORDER BY id';
    // make query & get result
    $result = mysqli_query($conn, $sql);
    // fetch the resulting rows as an array
    $listings = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // free result from memory
    mysqli_free_result($result);
    // close connection
    mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">
<?php $page="listings.php" ?>
<?php include ('templates/header.php'); ?>
    <main>
        <!-- hero section -->
        <div class="hero-secondary-section">
            <div class="container-custom">
                <div class="hero-secondary-content">
                    <p>Qfk-motors / Listings</p>
                </div>
            </div>
        </div>

        <!-- listings -->
        <section class="listings">
            <div class="container-custom">
                <div class="listings-content">
                    <header class="listings-header">
                        <h1>Cars In Stock</h1>
                    </header>
                    <div class="listings-cards">

                    <?php foreach($listings as $listing): ?>
                        <div class="listings-card">
                            <div class="listings-card-imgcontainer">
                                <p class="pricetag">TZS <?php echo htmlspecialchars($listing['price']); ?></p>
                                <img src="assets/img/Hero.png" alt="">
                            </div>
                            <div class="listings-card-info">
                                <div class="info-top">
                                    <h5 class="makeandmodel">
                                        <?php echo htmlspecialchars($listing['make']); ?>
                                        <?php echo htmlspecialchars($listing['model']); ?>
                                    </h5>
                                    <p class="year"><?php echo htmlspecialchars($listing['manufacture']); ?></p>
                                </div>
                                <hr>
                                <div class="info-bottom">
                                    <div class="mileage">
                                        <h5>Mileage</h5>
                                        <p><?php echo htmlspecialchars($listing['mileage']); ?>Km</p>
                                    </div>
                                    <div class="transmission">
                                        <h5>Transmission</h5>
                                        <p><?php echo htmlspecialchars($listing['transmission']); ?></p>
                                    </div>
                                    <div class="fuel">
                                        <h5>Fuel</h5>
                                        <p><?php echo htmlspecialchars($listing['fuel']); ?></p>
                                    </div>
                                </div>
                                <div class="info-cta">
                                    <a href="details.php?id=<?php echo $listing['id']?>">
                                        <button class="button-sm">More Details</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- listings -->
        <section class="listings">
            <div class="container-custom">
                <div class="listings-content">
                    <header class="listings-header">
                        <h2>Cars Sold</h2>
                    </header>
                    <div class="listings-cards">

                    <?php foreach($listings as $listing): ?>
                        <div class="listings-card">
                            <div class="listings-card-imgcontainer">
                                <p class="pricetag">TZS <?php echo htmlspecialchars($listing['price']); ?></p>
                                <img src="assets/img/Hero.png" alt="">
                            </div>
                            <div class="listings-card-info">
                                <div class="info-top">
                                    <h5 class="makeandmodel">
                                        <?php echo htmlspecialchars($listing['make']); ?>
                                        <?php echo htmlspecialchars($listing['model']); ?>
                                    </h5>
                                    <p class="year"><?php echo htmlspecialchars($listing['manufacture']); ?></p>
                                </div>
                                <hr>
                                <div class="info-bottom">
                                    <div class="mileage">
                                        <h5>Mileage</h5>
                                        <p><?php echo htmlspecialchars($listing['mileage']); ?>Km</p>
                                    </div>
                                    <div class="transmission">
                                        <h5>Transmission</h5>
                                        <p><?php echo htmlspecialchars($listing['transmission']); ?></p>
                                    </div>
                                    <div class="fuel">
                                        <h5>Fuel</h5>
                                        <p><?php echo htmlspecialchars($listing['fuel']); ?></p>
                                    </div>
                                </div>
                                <div class="info-cta">
                                    <a href="details.php?id=<?php echo $listing['id']?>">
                                        <button class="button-sm">More Details</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer -->
        <?php include ('templates/footer.php'); ?>
</html>