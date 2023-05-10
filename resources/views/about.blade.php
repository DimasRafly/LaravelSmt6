<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dimas Rafly's CV</title>
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

<!-- Container -->

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Curriculum Vitae</h1>
        <hr>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-4">
        <!-- Personal Information -->
        <h3>Personal Information</h3>
        <div class="row">
          <div class="col-sm-4">Name :</div>
          <div class="col-sm-8">Dimas Rafly</div>
        </div>
        <div class="row">
          <div class="col-sm-4">Email :</div>
          <div class="col-sm-8">dimasrafly17@gmail.com</div>
        </div>
        <div class="row">
          <div class="col-sm-4">Linkedin :</div>
          <div class="col-sm-8">linkedin.com/in/dimas-rafly/</div>
        </div>
        <!-- About Me -->
        <h3>About Me</h3>
        <p>I am an active student at Telkom Institute of Technology in Surabaya, with a strong interest in the field of data. 
          As an independent and self-motivated individual, I possess verified and proficient skills in Data Analytics.
        </p>
        <!-- Skills -->
        <h3>Skills</h3>
        <ul>
          <li>Python</li>
          <li>SQL</li>
          <li>Tableau</li>
          <li>Looker Studio</li>
          <li>Analytical Thinking</li>
        </ul>
        <!-- Courses -->
      <h3>Certification</h3>
      <ul>
        <li>
          <strong>SAP Course HR050</strong>
          <p>Business Processes in Human Capital Management</p>
          <p>2022</p>
        </li>
        <li>
          <strong>Data Analyst</strong>
          <p>International Certified Data Analyst RMDS</p>
          <p>2023</p>
        </li>
      </ul>
      <!-- Education -->
      <h3>Education</h3>
      <ul>
        <li>
          <strong>Bachelor of Information System</strong>
          <p>Telkom Institute of Technology Surabaya</p>
          <p>2020 - 2024</p>
          <p><i>GPA : 3.57</i></p>
        </li>
      </ul>
      </div>
      <!-- Right Grid -->
      <div class="col-md-8">
        <h3>Experiences</h3>
        <ul>
          <li>
            <strong>E-Commerce Admin Intern</strong>
            <p>Sunday Lab</p>
            <p>Surabaya</p>
            <p>Oct 2022 - Dec 2022</p>
            <ul>
              <li>Provide assistance to clients in conducting product research on ecommerce platforms.</li>
              <li>Assist clients in preparing their products for launch on ecommerce platforms.</li>
            </ul>
          </li>
          <li>
            <strong>Project Based-Intern : Data Engineer</strong>
            <p>Bank BTPN Syariah</p>
            <p>Jakarta</p>
            <p>Sep 2022</p>
            <ul>
              <li>Acquire proficiency in TSQL and Data Visualization.</li>
              <li>Analyze datasets and generate customer profiling dashboards.</li>
            </ul>
          </li>
          <li>
            <strong>Project Based-Intern : Business Intelligence Analyst</strong>
            <p>Bank Muamalat</p>
            <p>Jakarta</p>
            <p>Aug 2022</p>
            <ul>
              <li>Acquire proficiency in SQL querying utilizing Ms Access and develop mastery in advanced formulas within Ms Excel.</li>
              <li>Formulate a sales performance dashboard and extract key insights.</li>
            </ul>
          </li>
          <li>
            <strong>Computer Operator</strong>
            <p>PT Tata Bisnis Solusi</p>
            <p>Malang</p>
            <p>Aug 2020 - Jan 2021</p>
            <ul>
              <li>Assist clients in transitioning physical documents to digital format through the use of scanners.</li>
              <li>Upload digital documents onto the designated server.</li>
            </ul>
          </li>
          <li>
            <strong>Dot Net Intern Developer</strong>
            <p>PT Visionet Data International</p>
            <p>Malang</p>
            <p>Jul 2019 - Sep 2019</p>
            <ul>
              <li>Acquire proficiency in SCRUM methodology, Dot Net framework, and Swagger API.</li>
              <li>Collaborate with senior team members to document project code.</li>
            </ul>
          </li>
        </ul>
        <!-- Projects -->
        <h3>Projects</h3>
        <ul>  
          <!-- DWBI -->
          <li>
            <strong>Data Warehouse and Business Intelligence : Sales Dashboard</strong>
            <p>Develop a Sales Dashboard utilizing Google Data Studio within the realm of Data Warehouse and Business Intelligence.</p>
            <!-- <a href="https://bit.ly/FinalProject_DWBI" class="link-dark" target="_blank">View my Work</a> -->
          </li>
          <!-- Linear Regression -->
          <li>
            <strong>Data Science : Linear Regression</strong>
            <p>Forecasting the price of pizza based on several variables using a machine learning model.</p>
            <!-- <a href="https://colab.research.google.com/drive/1zWbO2xOpqM9n9_ECqR8IhJik3wVXf--G?usp=share_link" class="link-dark" target="_blank">View my Work</a> -->
          </li>
          <!-- CDA -->
          <li>
            <strong>Data Analytics : Coffe Shop Sales Dashboard Performance</strong>
            <p>Course Capstone Project</p>
            <ul>
              <li>Perform exploratory data analysis on the dataset.</li>
              <li>Generate dashboards pertaining to customer profiling and sales performance.</li>
              <li>Formulate recommendations based on the findings of the EDA.</li>
            </ul>
            <!-- <a href="https://colab.research.google.com/drive/1bD3s4Ul64bOYhOzjO9NxHwJHtrkn9_7b?usp=share_link" class="link-dark" target="_blank">View my Work</a> -->
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Load Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
</body>
</html>