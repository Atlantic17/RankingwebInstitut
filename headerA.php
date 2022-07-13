<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark text-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>237 Uds, Dschang, Cameroun</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <small class="far fa-clock text-primary me-2"></small>
                <small>Mer - juil : 09.00 AM - 09.00 PM</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>+237 673 030 965</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center mx-n2">
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.facebook.com/lackouong.stephane"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://twitter.com/lackouong"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.instagram.com/styvy_mhvv/"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square btn-link rounded-0" href="https://www.instagram.com/styvy_mhvv/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <h2 class="m-0"><img src="img/logo.GIF" alt="logo" class="logo">Ranking<sub>Instituts</sub></h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index2.php" class="nav-item nav-link">Accueil</a>
            <li class="nav-item px-4 dropdown style">
                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Classements</a>
                <div class="dropdown-menu dropdown-menu style1" aria-labelledby="servicesDropdown">
                    <div class="dropdown-divider"></div>
                    <div class="d-md-flex align-items-start justify-content-start">
                        <div>
                            <div class="dropdown-header">Brevet de Technicien Superieur (BTS)</div>
                            <a class="dropdown-item" href="#">Genie Civil</a>
                            <a class="dropdown-item" href="#">Genie Informatique</a>
                        </div>
                        <div>
                            <div class="dropdown-header">Licence Pro</div>
                            <a class="dropdown-item" href="#">Genie Civil</a>
                            <a class="dropdown-item" href="#">Genie Informatique</a>
                        </div>
                        <div>
                            <div class="dropdown-header">Master Pro</div>
                            <a class="dropdown-item" href="#">Genie Civil</a>
                            <a class="dropdown-item" href="#">Genie Informatique</a>
                        </div>
                    </div>
                </div>
            </li>
            <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                  <div class="dropdown-menu bg-light m-0">
                      <a href="GererInstitut.php" class="dropdown-item">Gerer Institut</a>
                      <a href="GererEtudiant.php" class="dropdown-item">Gerer Etudiant</a>
                  </div>
              </div>
            <a href="profil.php" class="nav-item nav-link">Modifier Profil</a>
            
        </div>
        <a href="logout.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Deconnexion<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->