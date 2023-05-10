<!doctype html>
<html lang="en">
  <head>
    <title>Welcome!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/css/bootstrap.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">My Profile</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('galeri') }}">Gallery</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-6">
          <img src="{{ asset('assets/img/profile.jpg')}}" alt="Profile Picture" class="img-fluid rounded-circle mb-3" width="400" height="400">
        </div>
        <div class="col-lg-6">
          <h1>Hi, I'm Dimas Rafly</h1>
          <p>I am a final semester student of Telkom Institute of Technology Surabaya who is highly interested in the world of data, especially in the field of data science.</p>
          <p>Even though I have not graduated yet, I have been certified as an "International Certified Data Analytics RMDS 2023".</p>
          <a href="https://www.linkedin.com/in/dimas-rafly/" target='_blank' class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
  </body>
</html>