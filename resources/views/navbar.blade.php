<nav
            class="navbar navbar-expand-lg navbar-light bg-white border-bottom mx-0 p-0 flex-column  border-0 position-absolute w-100 z-index-30 bg-transparent navbar-dark navbar-transparent bg-white-hover transition-all">
            <div class="w-100 pb-lg-0 pt-lg-0 pt-4 pb-3">
                <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap">
        
                    <!-- Logo-->
                    <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0" href="{{route('/welcome')}}">
                        <!-- Start of Logo-->
                        <div class="d-flex align-items-center">
                            <div class="f-w-6 d-flex align-items-center me-2 lh-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 194 194"><path fill="currentColor" class="svg-logo-white" d="M47.45,60l1.36,27.58,53.41-51.66,50.87,50,3.84-26L194,100.65V31.94A31.94,31.94,0,0,0,162.06,0H31.94A31.94,31.94,0,0,0,0,31.94v82.57Z"/><path fill="currentColor" class="svg-logo-dark" d="M178.8,113.19l1,34.41L116.3,85.92l-14.12,15.9L88.07,85.92,24.58,147.53l.93-34.41L0,134.86v27.2A31.94,31.94,0,0,0,31.94,194H162.06A31.94,31.94,0,0,0,194,162.06V125.83Z"/></svg>
                            </div> <span class="fs-5"> Shareit</span>
                        </div>
                        <!-- / Logo-->
                        
                    </a>
                    <!-- / Logo-->
        
                    <!-- Main Navigation-->
                    <div class="ms-5 flex-shrink-0 collapse navbar-collapse navbar-collapse-light w-auto flex-grow-1" id="navbarNavDropdown">
        
                        <!-- Mobile Nav Toggler-->
                        <button
                            class="btn btn-link px-2 text-decoration-none navbar-toggler border-0 position-absolute top-0 end-0 mt-3 me-2"
                            data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="ri-close-circle-line ri-2x"></i>
                        </button>
                        <!-- / Mobile Nav Toggler-->
        
                        <ul class="navbar-nav py-lg-2 mx-auto">
                           
                            <li class="nav-item me-lg-4">
                                <a class="nav-link fw-bolder py-lg-4" href="{{route('category')}}">
                                   Annonces
                                </a>
                            </li>
                            @auth
                            <li class="nav-item me-lg-4">
                                <a class="nav-link fw-bolder py-lg-4" href="{{route('category')}}">
                                    Réservation
                                </a>
                            </li>
                            @else
                            <li class="nav-item me-lg-4">
                                <a class="nav-link fw-bolder py-lg-4" href="{{route('register')}}">
                                   Inscription
                                </a>
                            </li>
                            <li class="nav-item me-lg-4">
                                <a class="nav-link fw-bolder py-lg-4" href="{{route('login')}}">
                                    Connexion
                                </a>
                            </li>
                            @endauth
                            <li class="nav-item dropdown me-lg-4">
                                <a class="nav-link fw-bolder dropdown-toggle py-lg-4" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Commencer
                                </a>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/ajouterAnnonce') }}">Ajouter une annonce</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/category') }}">Consulter les annonces</a></li>
                                  </ul>
                            </li>
                        </ul>            </div>
                    <!-- / Main Navigation-->
        
                    <!-- Navbar Icons-->
                    <ul class="list-unstyled mb-0 d-flex align-items-center">
        
                        <!-- Navbar Toggle Icon-->
                      
                        <!-- /Navbar Toggle Icon-->
        
                        <!-- Navbar Search-->
            
                        <!-- /Navbar Search-->
        
                        <!-- Navbar Wishlist-->
                        
                        <!-- /Navbar Wishlist-->
        
                        <!-- Navbar Login-->

                        <!-- /Navbar Login-->
        
                        <!-- Navbar Cart-->
                      
                        <!-- /Navbar Cart-->
        
                    </ul>
                    <!-- Navbar Icons-->
        
                </div>
            </div>
        </nav>
        <!-- / Navbar-->    </div>
    <!-- / Navbar-->