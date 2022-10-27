<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <?php include 'helpers.php'; ?> 
    <div class="container">
      <div class="row">
        <div class="col-12">
        <?php include 'inputs.php'; ?> 
        <form action="index.php?haanaas=index" method="POST">
                <input type="password" name="password"/>
                <?php hr(); ?>
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> I have a bike</label><br>
                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                <label for="vehicle2"> I have a car</label><br>
                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                <label for="vehicle3"> I have a boat</label>

                <?php hr(); ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="male">
                    <label class="form-check-label" for="flexRadioDefault1">
                     Male
                    </label>
                </div>
                <div class="form-check">
                   <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="female" checked>
                   <label class="form-check-label" for="flexRadioDefault2">
                    Female
                  </label>
                </div>
                <?php hr(); ?>

                <label for="customRange1" class="form-label">Example range</label>
                <input name="range" type="range" class="form-range" id="customRange1" min="0" max="10" step="0.5">

                <?php hr(); ?>
                <input name="haanaas" value="index.php" type="hidden">
                <input type="submit">
        </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>