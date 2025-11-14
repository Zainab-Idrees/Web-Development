<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shape Calculator | PHP + Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow-lg p-4">
    <h2 class="text-center mb-3 text-primary">Shape Calculator</h2>
    <p class="text-center text-muted">Calculate area and perimeter of different shapes</p>
    <hr>

    <form method="POST">
      <div class="mb-3">
        <label for="shape" class="form-label">Select Shape</label>
        <select name="shape" id="shape" class="form-select" required>
          <option value="">-- Choose a Shape --</option>
          <option value="rectangle">Rectangle</option>
          <option value="square">Square</option>
          <option value="circle">Circle</option>
          <option value="triangle">Triangle</option>
        </select>
      </div>

      <!-- Rectangle -->
      <div id="rectangleFields" class="shape-fields d-none">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="form-label">Length</label>
            <input type="number" step="any" name="length" class="form-control">
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">Width</label>
            <input type="number" step="any" name="width" class="form-control">
          </div>
        </div>
      </div>

      <!-- Square -->
      <div id="squareFields" class="shape-fields d-none">
        <div class="mb-3">
          <label class="form-label">Side</label>
          <input type="number" step="any" name="side" class="form-control">
        </div>
      </div>

      <!-- Circle -->
      <div id="circleFields" class="shape-fields d-none">
        <div class="mb-3">
          <label class="form-label">Radius</label>
          <input type="number" step="any" name="radius" class="form-control">
        </div>
      </div>

      <!-- Triangle -->
      <div id="triangleFields" class="shape-fields d-none">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="form-label">Base</label>
            <input type="number" step="any" name="base" class="form-control">
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">Height</label>
            <input type="number" step="any" name="height" class="form-control">
          </div>
        </div>
      </div>

      <div class="text-center">
        <button type="submit" name="calculate" class="btn btn-primary px-4">Calculate</button>
        <button type="reset" class="btn btn-secondary px-4">Reset</button>
      </div>
    </form>

    <hr>

    <?php
    if (isset($_POST['calculate'])) {
        $shape = $_POST['shape'];
        $result = "";

        switch ($shape) {
            case 'rectangle':
                $length = $_POST['length'];
                $width = $_POST['width'];
                if ($length && $width) {
                    $area = $length * $width;
                    $perimeter = 2 * ($length + $width);
                    $result = "
                      <div class='alert alert-info mt-3'>
                        <h5>Rectangle Result</h5>
                        <p><b>Area:</b> {$area}</p>
                        <p><b>Perimeter:</b> {$perimeter}</p>
                      </div>";
                }
                break;

            case 'square':
                $side = $_POST['side'];
                if ($side) {
                    $area = $side * $side;
                    $perimeter = 4 * $side;
                    $result = "
                      <div class='alert alert-info mt-3'>
                        <h5>Square Result</h5>
                        <p><b>Area:</b> {$area}</p>
                        <p><b>Perimeter:</b> {$perimeter}</p>
                      </div>";
                }
                break;

            case 'circle':
                $radius = $_POST['radius'];
                if ($radius) {
                    $area = pi() * $radius * $radius;
                    $circumference = 2 * pi() * $radius;
                    $result = "
                      <div class='alert alert-info mt-3'>
                        <h5>Circle Result</h5>
                        <p><b>Area:</b> " . round($area, 2) . "</p>
                        <p><b>Circumference:</b> " . round($circumference, 2) . "</p>
                      </div>";
                }
                break;

            case 'triangle':
                $base = $_POST['base'];
                $height = $_POST['height'];
                if ($base && $height) {
                    $area = 0.5 * $base * $height;
                    $result = "
                      <div class='alert alert-info mt-3'>
                        <h5>Triangle Result</h5>
                        <p><b>Area:</b> {$area}</p>
                        <p><i>Perimeter not calculated (need all 3 sides)</i></p>
                      </div>";
                }
                break;

            default:
                $result = "<div class='alert alert-warning mt-3'>Please select a shape and fill all fields!</div>";
        }

        echo $result;
    }
    ?>
  </div>
</div>

<script>
// Show relevant input fields when shape changes
document.getElementById("shape").addEventListener("change", function () {
  const shapes = document.querySelectorAll(".shape-fields");
  shapes.forEach(div => div.classList.add("d-none"));
  const selected = this.value + "Fields";
  if (document.getElementById(selected)) {
    document.getElementById(selected).classList.remove("d-none");
  }
});
</script>

</body>
</html>
