<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- bootstrap css  -->
  <link rel="stylesheet" href="./static/bootstrap/css/bootstrap.min.css">
  <!-- font awesome icons  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- custom css -->
  <link rel="stylesheet" href="./static/css/style.css">
</head>

<body>
  <header>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark px-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Tesla Computer Institute</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Courses
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="course.html">Office Automation</a></li>
                <li><a class="dropdown-item" href="#">Certified In Information technology</a></li>
                <li><a class="dropdown-item" href="#">Advance Diploma In Information Technology</a></li>
                <li><a class="dropdown-item" href="#">Graphic Designing</a></li>
                <li><a class="dropdown-item" href="#">Mobile App Development</a></li>
                <li><a class="dropdown-item" href="#">Web Development</a></li>
                <li><a class="dropdown-item" href="#">Ethical Hacking</a></li>


              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="team.html">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="contact.html">Contact</a>
            </li>
          </ul>

          <div class="nav-item">
            <a href="" class="nav-link mybtn"><i class="fas fa-user mx-2"></i>Login</a>
          </div>

        </div>
      </div>
    </nav>
    <!-- navbar -->

    <!-- head section  -->
    <section class="headcontent">

      <div class="row h-100">
        <div class="coursetab bg-white p-3 shadow w-50 rounded">
          <button class="mybtn" onclick="run('COAC')" data-bs-toggle="tooltip" data-bs-placement="top"
            title="Certified In Office Automation Course">COAC</button>
          <button class="mybtn" data-bs-toggle="tooltip" data-bs-placement="top"
            title="Certified In Information Technology">CIT</button>
          <button class="mybtn" data-bs-toggle="tooltip" data-bs-placement="top"
            title="Advance Diploma In Information Technology">ADIT</button>
          <button class="mybtn" data-bs-toggle="tooltip" data-bs-placement="top"
            title="Diploma In Mobile App Development">DMAD</button>
          <button class="mybtn" data-bs-toggle="tooltip" data-bs-placement="top"
            title="Advance Diploma In Ethical Hacking">ADEH</button>
          <button class="mybtn" data-bs-toggle="tooltip" data-bs-placement="top" title="Diploma In Python">DIP</button>
        </div>

        <div class="jabir" id="box">
          <!-- <div class="row">

            <div class="col-sm-12 col-md-8 col-lg-8 centery pe-4 ">
              <div class="maincontent ">

                <h2>OFFICE AUTOMATION COURSE</h2>
                <p>Our vision and mission is to empower PAKISTAN through technology. I.T. when rightly employed leads to
                  productivity improvements and prosperity at </p>
                <h6 class="fw-bold">Including Softwares : </h6>
                <ul>
                  <li>MS Word</li>
                  <li>MS Excel</li>
                  <li>MS Powerpoint</li>
                  <li>In Page</li>
                  <li>Windows</li>
                </ul>
                <a href="about.html" class="mybtn">Get Admission Now</a>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 h-100 ">
              <img src="./static/images/advance-graphic-designing.jpg" width="100%" alt="">
            </div>
          </div> -->
        </div>
      </div>


    </section>
    <!-- head section  -->
  </header>

  <!-- bootstrap js  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <!-- custom js  -->
  <script>

    function run(text) {
      var xhttp = new XMLHttpRequest();
      xhttp.onload = function () {
        document.getElementById("box").innerHTML=this.responseText;

    }

    xhttp.open('GET','static/js/note.txt',true)
    xhttp.send()
  }
  </script>
</body>

</html>