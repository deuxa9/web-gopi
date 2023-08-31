<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Global Pristya ID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.2.0/swiper-bundle.css">
    <link rel="stylesheet" href="./assets/vendors/animate.css/animate.min.css">
    <link rel="stylesheet" href="./assets/vendors/slick-carousel/slick.css">
    <link rel="stylesheet" href="./assets/vendors/slick-carousel/slick-theme.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/vendors/jquery/jquery.min.js"></script>
    <script src="assets/js/loader.js"></script>

    <style>
		.mobile-show {
            display: none;
        }

        .desktop-show {
            display: block;
        }

        #more {
            display: none;
        }

        @media screen and (max-width: 450px) {
            .desktop-show {
                display: none;
            }

            .mobile-show {
                display: block;
            }

            #mores {
                display: none;
            }
        }

	</style>
</head>

<body>
    <div class="oleez-loader"></div>
    <header class="oleez-header">
        @include('homes.navbar')
    </header>

    <main>
        <section>
            @yield('content') 
        </section>
        
        <section id="overview">
            @include('homes.overviewsection')  
        </section>

        <section id="business-strategy" class="desktop-show oleez-landing-section oleez-landing-section-projects">
            @include('homes.businessstrategysection')  
        </section>

        <section id="business-strategy" class="mobile-show">
            @include('homes.businessstrategysection')  
        </section>

        <section id="business-sector" class="desktop-show oleez-landing-section oleez-landing-section-projects">
            @include('homes.businesssectorsection')  
        </section>
        <section id="business-sector" class="mobile-show mt-3">
            @include('homes.businesssectorsection')  
        </section>

        <section id="organization-structur" class="desktop-show oleez-landing-section oleez-landing-section-projects">
            @include('homes.organizationstructursection')
        </section>

        <section id="organization-structur" class="mobile-show mt-3">
            @include('homes.organizationstructursection')
        </section>

        <section id="joinwith-us" class="oleez-landing-section-projects">
            @include('homes.joinwithussection')
        </section>
    </main>

    <footer id="footer" class="oleez-footer wow fadeInUp">
        @include('homes.footersection')
    </footer>

    <!-- Modals -->
    <!-- Off canvas social menu -->
    <nav id="offCanvasMenu" class="off-canvas-menu">
        <button type="button" class="close" aria-label="Close" data-dismiss="offCanvasMenu">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul class="oleez-social-menu">
            <li>
                <a href="#!" class="oleez-social-menu-link">Facebook</a>
            </li>
            <li>
                <a href="#!" class="oleez-social-menu-link">Instagram</a>
            </li>
            <li>
                <a href="#!" class="oleez-social-menu-link">Behance</a>
            </li>
            <li>
                <a href="#!" class="oleez-social-menu-link">Dribbble</a>
            </li>
            <li>
                <a href="#!" class="oleez-social-menu-link">Email</a>
            </li>
        </ul>
    </nav>
    <!-- Full screen search box -->
    <div id="searchModal" class="search-modal">
        <button type="button" class="close" aria-label="Close" data-dismiss="searchModal">
            <span aria-hidden="true">&times;</span>
        </button>
        <form action="index.html" method="get" class="oleez-overlay-search-form">
            <label for="search" class="sr-only">Search</label>
            <input type="search" class="oleez-overlay-search-input" id="search" name="search" placeholder="Search here">
        </form>
    </div>
    <section>
        @include('js.gopimain')
    </section>
</body>


</html>