<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Getting Started</title>
  <link rel="stylesheet" href="getstarted.css">
</head>

<body>
  <header>
    <div class="logo">
      <a href="#">CodixsGo</a>
    </div>
  </header>

  <div class="container">
    <h1><span class="auto-type"></span></h1>
    <div class="panel">
      <form>
        <!-- <input type="submit" name="">
        <input type="submit" name=""> -->
      </form>
    </div>
  </div>

  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

  <script>
    var phrases = new Typed(".auto-type", {
          strings: ["This is an auto typing animation effect!",
          "You can type anything you want here.",
          "Try out different phrases!",
          "This animation is customizable."],
          typeSpeed: 100,
          backSpeed: 100,
          loop: true
      })
  </script>
</body>
</html>
