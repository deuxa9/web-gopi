<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Global Pristya ID</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logonav-mobile.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.2.0/swiper-bundle.css">
    <link rel="stylesheet" href="./assets/vendors/animate.css/animate.min.css">
    <link rel="stylesheet" href="./assets/vendors/slick-carousel/slick.css">
    <link rel="stylesheet" href="./assets/vendors/slick-carousel/slick-theme.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
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

        <section id="business-strategy" class="mt-5 desktop-show">
            @include('homes.businessstrategysection')  
        </section>

        <section id="business-strategy" class="mt-4 mobile-show">
            @include('homes.businessstrategysection')  
        </section>

        <section id="business-sector" class="mt-5 desktop-show">
            @include('homes.businesssectorsection')  
        </section>
        <section id="business-sector" class="mobile-show mt-3">
            @include('homes.businesssectorsection')  
        </section>

        <section id="organization-structur" class="desktop-show mt-5">
            @include('homes.organizationstructursection')
        </section>

        <section id="organization-structur" class="mobile-show mt-2">
            @include('homes.organizationstructursection')
        </section>

        <section id="joinwith-us">
            @include('homes.joinwithussection')
        </section>
    </main>

    <footer id="footer" class="oleez-footer wow">
        @include('homes.footersection')
    </footer>

    <section>
        @include('js.gopimain')
    </section>
</body>


</html>