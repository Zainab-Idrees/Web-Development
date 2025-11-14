<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Word Counter</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow-sm">
    <div class="card-body">
      <h3 class="text-center mb-4">Word Counter (PHP + Bootstrap)</h3>

      <form method="post">
        <div class="mb-3">
          <label for="text" class="form-label">Enter your text:</label>
          <textarea name="text" id="text" class="form-control" rows="6" placeholder="Type something here..."></textarea>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Count Words</button>
        </div>
      </form>

      <hr>

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST['text'];

        // Count words and characters
        $wordCount = str_word_count($text);
        $charCount = strlen($text);

        echo "<div class='alert alert-info mt-3'>";
        echo "<strong>Total Words:</strong> $wordCount <br>";
        echo "<strong>Total Characters:</strong> $charCount";
        echo "</div>";
      }
      ?>
    </div>
  </div>
</div>

</body>
</html>
