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

        @media screen and (max-width: 450px) {
            .desktop-show {
                display: none;
            }

            .mobile-show {
                display: block;
            }
        }

	</style>
</head>

<body>
    <div class="oleez-loader"></div>
    <header class="oleez-header">
        @include('aboutus.navbar')
    </header>

    <main>
        <section class="mt-5 desktop-show">
            @include('aboutus.heroimg') 
        </section>

        <section class="mobile-show">
            @include('aboutus.heroimg') 
        </section>
        
        <section id="about-us">
            @include('aboutus.aboutussection')  
        </section>

        <section id="visi-misi" class="desktop-show oleez-landing-section oleez-landing-section-projects">
            @include('aboutus.visimisisection')  
        </section>

        <section id="visi-misi" class="mobile-show mb-3">
            @include('aboutus.visimisisection')  
        </section>

        <section id="our-values" class="desktop-show oleez-landing-section oleez-landing-section-projects bg-dark">
            @include('aboutus.ourvaluessection')  
        </section>

        <section id="our-values" class="mobile-show py-3 bg-dark">
            @include('aboutus.ourvaluessection')  
        </section>

        <section id="organisation-structur" class="desktop-show oleez-landing-section oleez-landing-section-projects">
            @include('aboutus.organizationstructursection')  
        </section>

        <section id="organisation-structur" class="mobile-show mt-3">
            @include('aboutus.organizationstructursection')  
        </section>
    </main>

    <footer id="footer" class="oleez-footer wow fadeInUp">
        @include('aboutus.footersection')
    </footer>
    
    <section>
        @include('js.gopimain')
    </section>
</body>


</html>