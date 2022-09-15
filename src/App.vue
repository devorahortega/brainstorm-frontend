<template>
  <div id="app">
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="index.html">BrainSTORM</a></h1>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="/">Home</a></li>
            <li><a class="nav-link scrollto" href="/about">About</a></li>
            <li><a class="nav-link scrollto" href="/cards">Cards</a></li>
            <li><a class="nav-link scrollto" href="/create">Create</a></li>
            <li><a class="nav-link scrollto" href="/ideas">Ideas</a></li>
            <li class="dropdown">
              <a href="#">
                <span>Account</span>
                <i class="bi bi-chevron-down"></i>
              </a>
              <ul>
                <li><a href="/signup">Signup</a></li>
                <li class="dropdown"></li>
                <li><a href="/login">Login</a></li>
                <li><a href="/logout">Logout</a></li>
              </ul>
            </li>
            <!-- <li><a class="nav-link scrollto" href="/contact">Contact</a></li> -->
            <li><a class="getstarted scrollto" href="/create">Get Started</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
      </div>
    </header>

    <router-view />

    <footer id="footer">
      <!-- <div class="footer-newsletter">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <h4>Questions Comments or Complaints</h4>
              <p>Let us know what you think about our app!</p>
              <form action="" method="post">
                <input type="email" name="email" />
                <input type="submit" value="Send" />
              </form>
            </div>
          </div>
        </div>
      </div> -->

      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>BrainSTORM</h3>
              <p>
                7567 Laffayette ST
                <br />
                Chicago, IL 101055
                <br />
                United States
                <br />
                <br />
                <strong>Phone:</strong>
                +1 558 554 8855
                <br />
                <strong>Email:</strong>
                brainstorm@example.com
                <br />
              </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="/">Home</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="/about">About us</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="/cards">Cards</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="/create">Create</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="/ideas">Ideas</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Stress Relief</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Emotional Expression</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Journaling</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Ideas</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Literaly Brainstorming</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <!-- <h4>Our Social Networks</h4>
              <p>
                Unfortunately we don't currently have any socials up and running but feel free to send us a message
                using the
                <a href="/contact">contact</a>
                page.
              </p> -->
              <div class="social-links mt-3">
                <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container footer-bottom clearfix">
        <div class="copyright">
          &copy; Copyright
          <strong><span>Arsha</span></strong>
          . All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
          Designed by
          <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer>
  </div>
</template>

<style></style>
