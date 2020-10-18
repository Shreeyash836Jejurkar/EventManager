<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Lister</title>
  <link rel="stylesheet" href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- jQuery and JS bundle w/ Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <style>
    ::-webkit-scrollbar {
      display: none;
    }
    html{
      scroll-behavior: smooth;
    }
    body {
      background: url("") fixed;
      background-size: cover;
    }

    .container-fluid {
      padding: 0;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    a{
      color: grey;
    }
    a:hover{
      color: white;
      text-decoration: none;
    }
  </style>
</head>

<body>

  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About Event Manager</h4><br>
            <p class="text-muted">Welcome to Event Manager this is the place where you can find the everyday events around you. You can also create events and post the details so that it is visible to all. </p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Manage Events</h4><br>
            <ul class="list-unstyled">
              <li><a href="index.php" class="active">View Event</a></li>
              <li><a href="create.php" class="">Create Event</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container-fluid d-flex justify-content-between">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <svg width="3em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
            <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
          </svg>
          <h5> Event Manager</h5>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>


  <div style="position: absolute; top: 20; margin: 1em; float: right;"><?php displayMessage(); ?></div>