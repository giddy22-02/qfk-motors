<!DOCTYPE html>
<html lang="en">
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

        <!-- listings form -->
        <section class="listings">
            <div class="container-custom">
                <div class="listings-content">
                    <header class="listings-header">
                        <h1>Add Listings</h1>
                    </header>
                    <div class="shadow-sm bg-white p-4 mt-4">
                        <form action="">
                            <div class="">
                                <div>
                                    <label for="make" class="form-label form-text">Choose Car Make</label>
                                    <select class="form-select" id="make" name="make">
                                        <option selected>Select Car Make</option>
                                        <option value="toyota">Toyota</option>
                                        <option value="subaru">Subaru</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="model" class="form-label form-text">Model</label>
                                    <input type="text" class="form-control" id="model" placeholder="Model">
                                </div>
                                <div>
                                    <label for="year" class="form-label form-text">Year</label>
                                    <input type="text" class="form-control" id="year" placeholder="year">
                                </div>
                            </div>
                            <div class="pt-2">
                                <button type="submit" class="btn btn-success">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php include ('templates/footer.php'); ?>
</html>