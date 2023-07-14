<!DOCTYPE html>
<html>
<head>
  <title>FEETBACK FORM</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #00BFFF; 
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1000px;
      margin: 0 auto;
      padding: 20px;
      background-color: #87CEEB;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    form {
      margin-top: 20px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      resize: vertical;
    }

    .rating {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 10px;
    }

    .rating input[type="radio"] {
      display: none;
    }

    .rating label {
      color: #;
      font-size: 40px;
      margin: 0 5px;
      cursor: pointer;
    }

    .rating label:hover,
    .rating label:hover ~ label,
    .rating input[type="radio"]:checked ~ label {
      color: #ffca08;
    }

    input[type="submit"] {
      background-color: #4caf50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "feedback";

  // Create database connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    // Insert data into the database
    $sql = "INSERT INTO feedback (name, email, rating, comment)
            VALUES ('$name', '$email', '$rating', '$comment')";

    if (mysqli_query($conn, $sql)) {
        echo "<p class='success'></p>";
    } else {
        echo "<p class='error'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
    }
  }

  // Close database connection
  mysqli_close($conn);
  ?>

  <div class="container">
    <h1><u><B>FEETBACK FORM</B></u></h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email ID:</label>
      <input type="email" id="email" name="email" required>

      <label for="rating">Rating:</label>
      <div class="rating">
        <input type="radio" id="star5" name="rating" value="5" required>
        <label for="star5">&#9733;</label>
        <input type="radio" id="star4" name="rating" value="4" required>
        <label for="star4">&#9733;</label>
        <input type="radio" id="star3" name="rating" value="3" required>
        <label for="star3">&#9733;</label>
        <input type="radio" id="star2" name="rating" value="2" required>
        <label for="star2">&#9733;</label>
        <input type="radio" id="star1" name="rating" value="1" required>
        <label for="star1">&#9733;</label>
      </div>

      <label for="comment">Comment:</label>
      <textarea id="comment" name="comment" rows="4" required></textarea>
    
     <center> <input type="submit" name="submit" value="Submit"> </center>
    </form>
  </div>
</body>
</html>
