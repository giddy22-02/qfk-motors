<?php

  include('config/db_connect.php');

  $stock = $make = $model = $manufacture = $mileage = $transmission = $fuel = $body = $drive = $exterior = $price  = '';
  $errors = array('stock'=>'', 'make'=>'', 'model'=>'', 'manufacture'=>'', 'mileage'=>'', 'transmission '=>'', 'fuel'=>'', 'body'=>'', 'drive'=>'', 'exterior'=>'', 'price'=>'');

  if (isset($_POST['submit'])) {

    // check stock
    if(empty($_POST['stock'])) {
      $errors['stock'] = 'Stock is required <br />';
    } else {
      $stock = $_POST['stock'];
    }

    // check make
    if(empty($_POST['make'])) {
        $errors['make'] = 'make is required <br />';
    } else {
        $make = $_POST['make'];
    }

    // check model
    if(empty($_POST['model'])) {
        $errors['model'] = 'model is required <br />';
    } else {
        $model = $_POST['model'];
    }

    // check manufacture
    if(empty($_POST['manufacture'])) {
        $errors['manufacture'] = 'manufacture is required <br />';
    } else {
        $manufacture = $_POST['manufacture'];
    }

    // check mileage
    if(empty($_POST['mileage'])) {
        $errors['mileage'] = 'mileage is required <br />';
    } else {
        $mileage = $_POST['mileage'];
    }

    // check transmission
    if(empty($_POST['transmission'])) {
        $errors['transmission'] = 'transmission is required <br />';
    } else {
        $transmission = $_POST['transmission'];
    }

    // check fuel
    if(empty($_POST['fuel'])) {
        $errors['fuel'] = 'fuel is required <br />';
    } else {
        $fuel = $_POST['fuel'];
    }

    // check body
    if(empty($_POST['body'])) {
        $errors['body'] = 'body is required <br />';
    } else {
        $body = $_POST['body'];
    }

    // check drive
    if(empty($_POST['drive'])) {
        $errors['drive'] = 'drive is required <br />';
    } else {
        $drive = $_POST['drive'];
    }

    // check exterior
    if(empty($_POST['exterior'])) {
        $errors['exterior'] = 'exterior is required <br />';
    } else {
        $exterior = $_POST['exterior'];
    }

    // check price
    if(empty($_POST['price'])) {
        $errors['price'] = 'price is required <br />';
    } else {
        $price = $_POST['price'];
    }
    // check price
    if(empty($_POST['price'])) {
        $errors['price'] = 'price is required <br />';
    } else {
        $photo = $_POST['photo'];
    }



    if(array_filter($errors)) {
      echo 'errors in the form';
    } else {

      $stock = mysqli_real_escape_string($conn, $_POST['stock']);
      $make = mysqli_real_escape_string($conn, $_POST['make']);
      $model = mysqli_real_escape_string($conn, $_POST['model']);
      $manufacture = mysqli_real_escape_string($conn, $_POST['manufacture']);
      $mileage = mysqli_real_escape_string($conn, $_POST['mileage']);
      $transmission = mysqli_real_escape_string($conn, $_POST['transmission']);
      $fuel = mysqli_real_escape_string($conn, $_POST['fuel']);
      $body = mysqli_real_escape_string($conn, $_POST['body']);
      $drive = mysqli_real_escape_string($conn, $_POST['drive']);
      $exterior = mysqli_real_escape_string($conn, $_POST['exterior']);
      $price = mysqli_real_escape_string($conn, $_POST['price']);
      $photo = $_FILES['photo']['name'];
      $tmp_name = $_FILES['photo']['tmp_name'];


      // create sql
       move_uploaded_file($tmp_name, "uploads/$photo");
      $sql = "INSERT INTO listings(stock, make, model, manufacture, mileage, transmission, fuel, body, drive, exterior, price,photo)
      VALUES('$stock', '$make', '$model', '$manufacture', '$mileage', '$transmission', '$fuel', '$body', '$drive', '$exterior', '$price','$photo')";

      // save to db and check
      if(mysqli_query($conn, $sql)){
        // success
        header('Location: index.php');
      } else {
        // error
        echo 'query error: ' . mysqli_error($conn);
      }
    }


  } // end of POST check
?>

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
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST"  enctype="multipart/form-data" lass="p-3">
                            <div class="">
                                <!-- stock -->
                                <div>
                                    <label for="stock" class="form-label form-text">Stock Availability</label>
                                    <select class="form-select" id="stock" name="stock" value="<?php echo htmlspecialchars($stock) ?>">
                                        <option selected>Select Availability</option>
                                        <option value="in-stock">In Stock</option>
                                        <option value="sold">Sold</option>
                                        <option value="shipping">Shipping</option>
                                    </select>
                                </div>
                                <!-- Make -->
                                <div>
                                    <label for="make" class="form-label form-text">Choose Car Make</label>
                                    <select class="form-select" id="make" name="make" value="<?php echo htmlspecialchars($make) ?>">
                                        <option selected>Select Car Make</option>
                                        <option value="toyota">Toyota</option>
                                        <option value="subaru">Subaru</option>
                                        <option value="mercedes-benz">Mercedes Benz</option>
                                        <option value="bmw">BMW</option>
                                        <option value="volkswagen">Volkswagen</option>
                                        <option value="audi">Audi</option>
                                        <option value="land rover">Land Rover</option>
                                        <option value="lexus">Lexus</option>
                                        <option value="nissan">Nissan</option>
                                        <option value="ford">Ford</option>
                                        <option value="jeep">Jeep</option>
                                        <option value="mitsubishi">Mitsubishi</option>
                                        <option value="suzuki">Suzuki</option>
                                        <option value="isuzu">Isuzu</option>
                                    </select>
                                </div>
                                <!-- Model -->
                                <div>
                                    <label for="model" class="form-label form-text">Model</label>
                                    <input type="text" class="form-control" id="model" name="model" value="<?php echo htmlspecialchars($model) ?>" placeholder="altezza">
                                </div>
                                <!-- Manufacture Year -->
                                <div>
                                    <label for="manufacture" class="form-label form-text">Year of Manufacture</label>
                                    <input type="text" class="form-control" id="manufacture" name="manufacture" value="<?php echo htmlspecialchars($manufacture) ?>" placeholder="Manufacture Year">
                                </div>
                                <!-- Mileage -->
                                <div>
                                    <label for="mileage" class="form-label form-text">Mileage Km</label>
                                    <input type="text" class="form-control" id="mileage" name="mileage" value="<?php echo htmlspecialchars($mileage) ?>" placeholder="25000">
                                </div>
                                <!-- Transmission -->
                                <div>
                                    <label for="transmission" class="form-label form-text">Transmission</label>
                                    <select class="form-select" id="transmission" name="transmission" value="<?php echo htmlspecialchars($transmission) ?>">
                                        <option selected>Select Transmission</option>
                                        <option value="automatic">Automatic</option>
                                        <option value="manual">Manual</option>
                                        <option value="dual">Dual</option>
                                    </select>
                                </div>
                                <!-- Fuel -->
                                <div>
                                    <label for="fuel" class="form-label form-text">Fuel</label>
                                    <select class="form-select" id="fuel" name="fuel" value="<?php echo htmlspecialchars($fuel) ?>">
                                        <option selected>Select Fuel</option>
                                        <option value="petrol">Petrol</option>
                                        <option value="diesel">Diesel</option>
                                    </select>
                                </div>
                                <!-- Body -->
                                <div>
                                    <label for="body" class="form-label form-text">Body</label>
                                    <select class="form-select" id="body" name="body"value="<?php echo htmlspecialchars($body) ?>">
                                        <option selected>Select Car Body</option>
                                        <option value="sedan">Sedan</option>
                                        <option value="suv">SUV</option>
                                        <option value="station-wagon">Station Wagon</option>
                                        <option value="hatchback">Hatchback</option>
                                        <option value="pickup">Pick Up</option>
                                        <option value="sports">Sports</option>
                                        <option value="mini-van">Mini Van</option>
                                        <option value="mini-bus">Mini Bus</option>
                                        <option value="coupe">Coupe</option>
                                        <option value="truck">Truck</option>
                                        <option value="motorbike">Motor Bike</option>
                                        <option value="compact">Compact</option>
                                    </select>
                                </div>
                                <!-- Drive -->
                                <div>
                                    <label for="drive" class="form-label form-text">Drive</label>
                                    <select class="form-select" id="drive" name="drive" value="<?php echo htmlspecialchars($drive) ?>">
                                        <option selected>Select Car Drive</option>
                                        <option value="2wd">2WD</option>
                                        <option value="awd">AWD</option>
                                        <option value="4wd">4WD</option>
                                    </select>
                                </div>
                                <!-- Exterior -->
                                <div>
                                    <label for="exterior" class="form-label form-text">Exterior</label>
                                    <select class="form-select" id="exterior" name="exterior" value="<?php echo htmlspecialchars($exterior) ?>">
                                        <option selected>Select Exterior</option>
                                        <option value="white">White</option>
                                        <option value="black">Black</option>
                                        <option value="gray">Gray</option>
                                        <option value="silver">Silver</option>
                                        <option value="red">Red</option>
                                        <option value="blue">Blue</option>
                                        <option value="brown">Brown</option>
                                        <option value="green">Green</option>
                                        <option value="orange">Orange</option>
                                        <option value="gold">Gold</option>
                                        <option value="yellow">Yellow</option>
                                        <option value="maroon">Maroon</option>
                                    </select>
                                </div>
                                <!-- Price -->
                                <div>
                                    <label for="price" class="form-label form-text">Price</label>
                                    <input type="text" class="form-control" id="price" name="price" value="<?php echo htmlspecialchars($price) ?>" placeholder="8000000">
                                </div>
                                <div>
                                    <label for="photo" class="form-label form-text">Image</label>
                                    <input type="file" class="form-control" id="photo" name="photo" placeholder="Select Images">
                                </div>
                            </div>
                            <div class="pt-2">
                                <input type="submit" name="submit" value="submit" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php include ('templates/footer.php'); ?>
</html>