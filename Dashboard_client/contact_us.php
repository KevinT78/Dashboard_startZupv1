<?php
// Database Connection
include '../config.php';
session_start();

if (!isset($_SESSION['email'])) {
  header('Location: ../index.php');
}
?>
<!DOCTYPE html> 
<html> 

<head> 
  <meta charset="utf-8" />
  <base href="/Dashboard_startZupv1/Dashboard_client/">
	<meta content="initial-scale=1, maximum-scale=1, 
		user-scalable=0" name="viewport" /> 

	<meta name="viewport" content="width=device-width" /> 

	<!--Datatable plugin CSS file -->
	<link rel="stylesheet" href= 
"https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" /> 

	<!--jQuery library file -->
	<script type="text/javascript"
		src="https://code.jquery.com/jquery-3.5.1.js"> 
	</script> 

	<!--Datatable plugin JS library file -->
	<script type="text/javascript" src= 
"https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"> 
	</script> 
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
  rel="stylesheet"
/>


</head> 

<body> 
  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar brand -->
          <a class="navbar-brand mt-2 mt-lg-0" href="#">
            <a class="navbar-brand" href="#">
              <img
                src="../images/icon.png"
                height="25"
                alt="KJJJ" />

            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link"
                  href="/Dashboard_startZupv1/home">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"
                  href="/Dashboard_startZupv1/les-stagiaires"> Les
                  stagiaires</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/Dashboard_startZupv1/favoris">List
                  des favoris</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"
                  href="/Dashboard_startZupv1/votre-calendrier">Calendrier</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"
                  href="/Dashboard_startZupv1/contact">Contact</a>
              </li>
              <?php if ($_SESSION['status'] == 'Admin') { ?>
                  <li class="nav-item">
                    <a class="nav-link btn btn-warning text-white"
                      href="/Dashboard_startZupv1/accueil">Dashboard Admin</a>
                  </li>
                <?php } ?>
            </ul>
            <!-- Left links -->
          </div>
          <!-- Collapsible wrapper -->

          <!-- Right elements -->
          <div class="d-flex align-items-center">
            <!-- Icon -->

            <!-- Notifications -->
            <div class="dropdown">

              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <a class="dropdown-item" href="#">Some news</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Another news</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </div>
            <!-- Avatar -->
            <div class="dropdown">
              <a
                class="dropdown-toggle d-flex align-items-center hidden-arrow"
                href="#"
                id="navbarDropdownMenuAvatar"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false">
                <img
                  src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                  class="rounded-circle"
                  height="25"
                  alt="Black and White Portrait of a Man"
                  loading="lazy" />
              </a>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuAvatar">
                <li>
                  <a class="dropdown-item" href="#">My profile</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Settings</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../logout.php">Logout</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Right elements -->
        </div>
        <!-- Container wrapper -->

      </nav>
<!-- Navbar -->
  </header>
  <main style="margin-top: 58px">
    <div class="container">


        <div class="container my-5 z-depth-1">


            <!--Section: Content-->
            <section class="dark-grey-text p-5">
          
              <!-- Grid row -->
              <div class="row">
          
                <!-- Grid column -->
                <div class="col-md-5 mb-4 mb-md-0">
          
                  <div class="view">
                    <img src="https://mdbootstrap.com/img/illustrations/undraw_Group_chat_unwm.svg" class="img-fluid" alt="smaple image">
                  </div>
          
                </div>
                <!-- Grid column -->
          
                <!-- Grid column -->
                <div class="col-md-7 mb-lg-0 mb-4">
          
                  <!-- Form -->
                  <h3 class="font-weight-bold my-4">Contact Us</h3>
                  <!-- Section description -->
                  <p class="font-weight-light mx-auto mb-4 pb-2">Lorem ipsum dolor, sit amet consectetur<br> adipisicing elit. Id quam sapiente molestiae.</p>
          
                  <form class="mb-4 mx-md-5" action="">
          
                    <div class="row">
                      <div class="col-md-6 mb-4">
          
                        <!-- Name -->
                        <input type="text" id="name" class="form-control" placeholder="Name">
          
                      </div>
                      <div class="col-md-6 mb-4">
          
                        <!-- Email -->
                        <input type="email" id="email" class="form-control" placeholder="Email">
          
                      </div>
                    </div>
          
                    <div class="row">
                      <div class="col-md-12 mb-4">
          
                        <!-- Subject -->
                        <input type="text" id="subject" class="form-control" placeholder="Subject">
          
                      </div>
                    </div>
          
                    <div class="row">
                      <div class="col-md-12">
          
                        <div class="form-group mb-4">
                          <textarea class="form-control rounded" id="message" rows="3" placeholder="How can we help?"></textarea>
                        </div>
          
                        <div class="text-center">
                          <button type="submit" class="btn btn-info btn-md">Submit</button>
                        </div>
          
                      </div>
                    </div>
          
                  </form>
                  
                
                  <!-- Form -->
          
                </div>
                <!-- Grid column -->
          
              </div>
              <!-- Grid row -->
              
            </section>
            <!--Section: Content-->
          
          
          </div>


</main>
<footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
  <!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
></script>
</body> 

</html>
