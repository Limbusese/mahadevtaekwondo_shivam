<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Join Us Today</title>
  <link rel="icon" href="../src/assests/images/icons.png" type="images/png" />
  <link rel="stylesheet" href="../src/assests/css/joinToday.css" />
  <link rel="stylesheet" href="../src/assests/css/index.css" />
  <linK rel="stylesheet" href="../src/assests/css/responsive.css" />

  <script src="../src/assests/javascript/joinToday.js" defer></script>
  <script src="../src/assests/javascript/index.js" defer></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" defer></script>
</head>

<body>
  <!-- To Handle Data -->

  <!-- pandey data haru aauxw yaha form haru ko aba ya bata Email ma pathaune ho ki database pathaune hai -->

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data from the request
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];

    echo "First Name: " . $firstName . "<br>";
    echo "Last Name: " . $lastName . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Address: " . $address . "<br>";
    echo "Phone: " . $phone . "<br>";
    echo "Gender: " . $gender . "<br>";
  } else {
    http_response_code(405);
    // echo "Error: Only POST requests are allowed.";
  }
  ?>

  <section class="body_section">
    <section class="background_section">

      <!-- Header Section Starts -->
      <?php require('./header.php') ?>
      <!-- Header Section Ends Here -->

      <main>
        <section class="form_container">
          <section class="containers">
            <section class="title">Join Us</section>
            <form action="joinToday.php" method="post">
              <section class="user__details">
                <section class="input__box">
                  <span class="details">First Name</span>
                  <input type="text" placeholder=" John" required />
                </section>

                <section class="input__box">
                  <span class="details">Last Name</span>
                  <input type="text" placeholder=" Smith" required />
                </section>

                <section class="input__box">
                  <span class="details">Age</span>
                  <input type="number" placeholder=" 12" required />
                </section>

                <section class="input__box">
                  <span class="details">Email</span>
                  <input type="email" placeholder=" johnsmith@gmail.com" required />
                </section>

                <section class="input__box">
                  <span class="details">Address</span>
                  <input type="text" placeholder=" 123 Main Street, Sydney, NSW 2000" required />
                </section>

                <section class="input__box">
                  <span class="details">Phone</span>
                  <input type="tel" placeholder=" +(02) 1234 5678" required />
                </section>
              </section>
              <section class="gender__details">
                <input type="radio" name="gender" id="dot-1" value="male" />
                <input type="radio" name="gender" id="dot-2" value="female" />
                <input type="radio" name="gender" id="dot-3" value="prefer not to say" />
                <span class="gender__title">Gender</span>
                <section class="category">
                  <label for="dot-1">
                    <span class="dot one"></span>
                    <span>Male</span>
                  </label>
                  <label for="dot-2">
                    <span class="dot two"></span>
                    <span>Female</span>
                  </label>
                  <label for="dot-3">
                    <span class="dot three"></span>
                    <span>Prefer not to say</span>
                  </label>
                </section>
              </section>

              <section class="button">
                <input type="submit" value="Submit" />
              </section>
            </form>
          </section>
        </section>
      </main>

      <!-- Footer Section Starts -->
      <?php require('./footer.php') ?>
      <!-- Footer Section Ends Here -->

    </section>
  </section>
  </section>
</body>

</html>