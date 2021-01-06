<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Kontaktirajte nas!</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">

        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.html"><i class="fa fa-undo" aria-hidden="true"></i> Nazad</a>
          </li>
        </ul>
      </nav>

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22679.517785670458!2d18.44827639572342!3d44.72084170580097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475c1e41d35dcffd%3A0x365a027a936fbe99!2sBabunovi%C4%87i!5e0!3m2!1shr!2sba!4v1604153919022!5m2!1shr!2sba" class="frame" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

      <div class="container-fluid mt-5 p-5">
          <div class="p-5">
              <h3>Kontaktirajte nas!</h3> <hr>
              <span><i class="fa fa-phone" aria-hidden="true"></i> +387 35 225 883</span> <br>
              <span><i class="fa fa-map-marker" aria-hidden="true"></i> 75 350 Srebrenik, Bosna i Hercegovina</span> <br>
              <span><i class="fa fa-envelope-o" aria-hidden="true"></i> info@eurobuilding.ba</span>
          </div>

          <form class="p-5" action="/Project3/action_page.php" method="POST">
          <div class="form-group">
            <label for="email">Vas e-mail:</label>
            <input type="email" class="form-control" id="email" placeholder="Vas e-mail" name="e-mail" required>
          </div>
          <div class="form-group">
              <label for="question">Vase pitanje:</label>
              <input type="text" class="form-control" id="question" placeholder="Vase pitanje" name="question" required>
          </div>
          <button type="submit" class="btn btn-dark">Posalji</button>
            </form>
      </div>

      <footer class="text-center">
          <span> &#169; 2020, <br> Faris Causevic	</span>
      </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
</body>
</html>