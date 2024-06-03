<?php include 'process.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>COMP602/2401 Web Development: Assessment 3</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!-- Bootstrap Icon CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <!-- Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
      defer
    ></script>
    <!-- Custom JS -->
    <script scr="javascript/main.js" defer></script>
  </head>
  <body data-bs-theme="dark">
    <main class="container-lg mt-5 px-3 px-sm-5">
      <h1 class="mb-4 fw-bold">Please fill the form</h1>
      <form method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> id="form" novalidate>
        <!-- Name input -->
        <div class="mb-3">
          <label for="name" class="form-label fw-semibold"
            >Your name</label
          >
          <input
            type="text"
            class="form-control"
            id="name"
            name="name"
            placeholder="Bill"
          />
        </div>
        <!-- Age input -->
        <div class="mb-3">
          <label for="age" class="form-label fw-semibold">Your age</label>
          <input
            type="number"
            class="form-control"
            id="age"
            name="age"
            placeholder="30"
          />
        </div>
        <!-- Email input -->
        <div class="mb-3">
          <label for="email" class="form-label fw-semibold"
            >Your email</label
          >
          <input
            type="email"
            class="form-control"
            id="email"
            name="email"
            placeholder="example@mail.com"
          />
        </div>
        <!-- Favourite colour select -->
        <div class="mb-5">
          <label for="colour" class="form-label fw-semibold"
            >Your favourite colour</label
          >
          <select
            class="form-select"
            id="colour"
            name="colour"
            aria-label="Select colour"
          >
            <option selected>Select your favourite colour</option>
            <option value="red">Red</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
          </select>
        </div>
        <!-- Submit form button -->
        <button type="submit" class="btn btn-primary">Submit form</button>
        <!-- Reset form button -->
        <button type="button" class="btn btn-outline-primary" id="resetBtn">
          Reset form
        </button>
      </form>
      <?php
        // Display the inputs or error here
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Check if no errors, display success message
          if (empty($errors)) {
            echo "<p class='fs-5 mt-4'> Hello $name, your age is $age, your email is $email, and your favourite colour is $colour. </p>";
          } else {
            // Display errors
            foreach ($errors as $field => $error) {
                echo "<p class='fs-5 mt-4'>$error</p>";
            }
          }
        }
      ?>
    </main>
  </body>
</html>
