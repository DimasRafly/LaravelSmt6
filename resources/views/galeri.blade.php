<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dimas Rafly's Gallery</title>
  
  <!-- Load Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  <!-- Load CSS file -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

</head>
<body>

    <!-- Navbar -->

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

<!-- CONTAINER 1 -->

<div class="container">
  <div class="d-flex justify-content-around align-items-start flex-wrap">
    <div class="card">
      <div class= "card-image">
        <img src="{{ asset('assets/img/muamalat.jpg')}}" class="card-img-top" alt="...">
      </div>
      <div class="card-body">
        <h5 class="card-title">Business Intelligence Analyst</h5>
        <p class="card-text">In this project-based internship, I, as a business intelligence analyst, am assigned to process data and create a sales dashboard.</p>
      </div>
      <a href="https://colab.research.google.com/drive/1lRqXK3JUBHfOWOr-pPO2FpwXCabV_2e1" target = "_blank" class="btn btn-primary">View Project</a>
    </div>
    <div class="card">
      <div class= "card-image">
        <img src="{{ asset('assets/img/btpns.jpeg')}}" class="card-img-top" alt="...">
      </div>
      <div class="card-body">
        <h5 class="card-title">Data Engineer</h5>
        <p class="card-text">In this project-based internship as a data engineer, my tasks are determining business objectives, conducting data exploration, delivering insight presentations, and providing conclusions and recommendations.</p>
      </div>
      <a href="https://colab.research.google.com/drive/1lRqXK3JUBHfOWOr-pPO2FpwXCabV_2e1" target = "_blank" class="btn btn-primary">View Project</a>
    </div>
    <div class="card">
      <div class= "card-image">
        <img src="{{ asset('assets/img/rakamin.png')}}" class="card-img-top" alt="...">
      </div>
      <div class="card-body">
        <h5 class="card-title">Data Science</h5>
        <p class="card-text">The task in this project is to measure online retail, to determine how well an online store or e-commerce business is selling products or services on digital platforms.</p>
      </div>
      <a href="https://colab.research.google.com/drive/1lRqXK3JUBHfOWOr-pPO2FpwXCabV_2e1" target = "_blank" class="btn btn-primary">View Project</a>
    </div>

    <!-- CONTAINER 2 -->

    <div class="card">
      <div class= "card-image">
      <img src="{{ asset('assets/img/fifa.png') }}" class="card-img-top" alt="...">
      </div>
      <div class="card-body">
        <h5 class="card-title">Analytics with SQL and Python</h5>
        <p class="card-text">This project aims to find the top data in several variables, such as the top 5 player's salary, top 5 Germany players salary, and so on.</p>
      </div>
      <a href="https://colab.research.google.com/drive/1NrG4Fj5y2dGsxaYke4qcSQ7Sa8Auoi4A" target = "_blank" class="btn btn-primary">View Project</a>
    </div>
    <div class="card">
      <div class= "card-image">
      <img src="{{ asset('assets/img/bwa.jpg') }}" class="card-img-top" alt="...">
      </div>
      <div class="card-body">
        <h5 class="card-title">Data Science : Linear Regression</h5>
        <p class="card-text">Forecasting the price of pizza based on several variables using a machine learning model.</p>
      </div>
      <a href="https://medium.com/@dimasrafly17/data-science-project-predict-pizza-price-using-linear-regression-1989ac87f84" target = "_blank" class="btn btn-primary">View Project</a>
    </div>
    <div class="card">
      <div class= "card-image">
      <img src="{{ asset('assets/img/games.png') }}" class="card-img-top" alt="...">
      </div>
      <div class="card-body">
        <h5 class="card-title">Data Analytics : Game insights</h5>
        <p class="card-text">Finding insights that match the given problem statement using Python and visualizing them.</p>
      </div>
      <a href="https://medium.com/@dimasrafly17/series-game-insights-fc4a84733028" target = "_blank" class="btn btn-primary">View Project</a>
    </div>

    <!-- CONTAINER 3 -->

    <div class="card">
      <div class= "card-image">
        <img src="{{ asset('assets/img/sklearn.png')}}" class="card-img-top" alt="...">
      </div>
      <div class="card-body">
        <h5 class="card-title">Data Mining : K-Means Implementation</h5>
        <p class="card-text">Clustering people's names based on their height and weight using the K-Means algorithm. One of the libraries used is scikit-learn.</p>
      </div>
      <a href="https://colab.research.google.com/drive/1Pftzg8sHtNAd_N-D-iM2YD-BFWd-jY8U" target = "_blank" class="btn btn-primary">View Project</a>
    </div>
    <div class="card">
      <div class= "card-image">
        <img src="{{ asset('assets/img/cofe.jpg') }}" class="card-img-top" alt="...">
      </div>
      <div class="card-body">
        <h5 class="card-title">Data Analytics : Coffe Shop Sales Dashboard</h5>
        <p class="card-text">Analyzing trends of coffee shops in New York City, such as their top-selling products, total revenue, and analyzing their customers' habits.</p>
      </div>
      <a href="https://colab.research.google.com/drive/1bD3s4Ul64bOYhOzjO9NxHwJHtrkn9_7b?usp=share_link" target = "_blank" class="btn btn-primary">View Project</a>
    </div>
    <div class="card">
      <div class= "card-image">
        <img src="{{ asset('assets/img/poly.png') }}" class="card-img-top" alt="...">
      </div>
      <div class="card-body">
        <h5 class="card-title">Data Warehouse & Business Intelligence</h5>
        <p class="card-text">Creating a sales dashboard report to view the performance and sales trends of PT Insera Sena over the past two months.</p>
      </div>
      <a href="https://bit.ly/FinalProject_DWBI" target = "_blank" class="btn btn-primary">View Project</a>
    </div>
  </div>
</div>

<!-- END -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>