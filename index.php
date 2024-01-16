<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="Website Icon" type="png" href="logo.png">
  <title> Vinay</title>
  <link rel="stylesheet" href="portfolio.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>

<body id="body">

  <!-- Navbar  Section Start -->
  <nav class="nav-bar">
    <div id="row">
      <img id="logo" src="logo.png">
      <div id="menu-icon" onclick="myFunction(this)">
        <p id="first"></p>
        <p id="second"></p>
        <p id="third"></p>
      </div>
    </div>
    <div id="navbar">
      <ul id="display">
        <li><a href="#home" onclick="bodyclose()">Home</a></li>
        <li><a href="#about" onclick="bodyclose()">About</a></li>
        <li><a href="#projects" onclick="bodyclose()">Projects</a></li>
        <li><a href="#contact" onclick="bodyclose()">Contact</a></li>
        <!---<li class="bx bx-moon" id="darkmode" onclick="mymoon(this)"></li>-->
      </ul>
    </div>
  </nav>

  <!-- Navbar Section End -->
  <main id="main" onclick="bodyclose()">
    <!-- Home Section Start -->
    <section class="home" id="home">
      <div id="home-img-div">
        <div id="home-div">
          <h5>WELLCOME TO MY PORTFOLIO</h5>
          <h4>I'm <span>Vinay</span></h4>
          <p>I am an Enthusiastic Engineering Student with a deep passion for Programming. Currently pursuing
            my studies in Computer Science and Engineering.</p>
          <h6>I'm a <span class="typed-text"></span><span class="cursor">&nbsp;</span></h6>
          <div id="icons">
            <a href="#"><i class="bx bxl-github"></i></a>
            <a href="#"><i class="bx bxl-instagram"></i></a>
            <a href="#"><i class="bx bxl-linkedin-square"></i></a>
            <a href="#"><i class="bx bxl-facebook-circle"></i></a>
          </div>
          <a id="downloadcv" href="#">download cv</a>
        </div>
        <div id="home-img">
          <img id="profile-img" src="profile.jpeg" href="#">
        </div>
      </div>

    </section>
    <!-- Home Section End -->
    <!-- About Section Start -->

    <section class="about" id="about">
      <h4>About me</h4>
      <div id="about-img-details">
        <div id="about-img">
        </div>
        <div id="about-details">
          <div id="about-content">
            <p>My name is Gadde Vinay and I'm always lokking out for learning new.I'm very curios and intrested in my
              ambition .I strongly believe in accuracy and precision in whatever I do.</p>
            <div class="pt-4">
              <ul class="nav-pills" id="pills-tab" role="tablist">

                <li class="nav-item active" role="presentation">
                  <button class="nav-link" id="pills-skill-tab">Main Skills</button>
                </li>

                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-certificates-tab">Certificates</button>
                </li>

                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-achievements-tab">Achievements</button>
                </li>

                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-education-tab">Education</button>
                </li>

              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane con-active" id="pills-skill" style="display: block;">
                  <div class="single-progress">
                    <h6>HTML ,CSS ,Java-Script ,bootstrap</h6>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100">
                      </div>
                    </div>
                    <span class="label">95%</span>
                  </div>
                  <div class="single-progress">
                    <h6>Problem solving skills</h6>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100">
                      </div>
                    </div>
                    <span class="label">90%</span>
                  </div>
                  <div class="single-progress">
                    <h6>Programming language competencies</h6>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100">
                      </div>
                    </div>
                    <span class="label">80%</span>
                  </div>
                  <div class="single-progress">
                    <h6>C , C++ , DSA with C++</h6>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100">
                      </div>
                    </div>
                    <span class="label">85%</span>
                  </div>
                  <div class="single-progress">
                    <h6>Python , DBMS , Java</h6>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 83%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100">
                      </div>
                    </div>
                    <span class="label">83%</span>
                  </div>
                </div>
                <div class="tab-pane" id="pills-certificates" style="display: none;">
                  <ul class="text-start ps-0">
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
                <div class="tab-pane" id="pills-achievements" style="display: none;">
                  <ul class="text-start ps-0">
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
                <div class="tab-pane" id="pills-education" style="display: none;">
                  <ul class="text-start ps-0">
                    <li><a href="#">Passed 10th MP Board --<span>Higher Secondary
                          School</span></a>2018-2019</li>
                    <li><a href="#">Passed 12th MP Board --<span> Higher Secondary
                          School</span></a>2020-2021</li>
                    <li><a href="#">Pursuing B-Tech(CSE) 4 year intigrated --<span> </span></a>2021-Current</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Projects Section Start -->

    <section class="projects" id="projects">
      <h4>Projects</h4>
      <div class="allprojects">
        <div class="project" id="proj-1">
          <div class="proj-img" id="proj-img-1">
            <img src="./netflix-proj.PNG" alt=""  class="pi" id="pi1">
          </div>
          <h5>Netflix-Clone</h5>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus commodi,  eius suscipit odit quod dicta quidem corporis.</p>
        </div>
          <div class="project" id="proj-2">
          <div class="proj-img" id="proj-img-2">
            <img src="./calci-proj.PNG" alt="" class="pi" id="pi2">
          </div>
          <h5>Calculator</h5>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus commodi,  eius suscipit odit quod dicta quidem corporis.</p>
        </div>
          <div class="project" id="proj-cm">
            <h6>Coming Soon...</h4>
          </div>
      </div>


    </section>
    <!--Projects section End-->


    <!-- Contact Section Start -->
    <section class="contact" id="contact">
      <h3>Contact Me</h3>
      <form action="connect.php" method="post" >
        <input type="text" name="name" id="name" placeholder="Your Name" required>
        <input type="email" name="email" id="mail" placeholder="Your Email" required>
        <textarea name="comment" type="text" id="area" cols="30" rows="10" placeholder="Write Message Here..."
          required></textarea>
        <input type="submit" id="submit" value="Send" onclick="success()" class="contact-button">
      </form>
    </section>

  </main>
  <!-- Contact Section End -->
  
  <div class="footer">
    <img id="logo" src="logo.png">
    <div id="icons">
      <a href="#"><i class="bx bxl-github"></i></a>
      <a href="#"><i class="bx bxl-instagram"></i></a>
      <a href="#"><i class="bx bxl-linkedin-square"></i></a>
      <a href="#"><i class="bx bxl-facebook-circle"></i></a>
    </div>
    <p>Copyright © 2023 <a href=""><span>Vinay's</span></a> , All Rights Reserved.</p>
  </div>

  <script src="portfolio.js"></script>
</body>

</html>