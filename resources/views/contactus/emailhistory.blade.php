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

        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #343a40;
            border-color: #343a40;
        }

        .page-link {
            position: relative;
            display: block;
            padding: 0.5rem 0.75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #343a40;
            background-color: #fff;
            border: 1px solid #dee2e6;
        }

        th, td{
            font-size: 13.5px;
        }
	</style>
</head>

<body>
    <div class="oleez-loader"></div>
    <header class="oleez-header">
        @include('contactus.navbar')
    </header>

    <main>
        <section class="mt-5 desktop-show">
            @include('contactus.heroimg') 
        </section>
        
        <section class="mobile-show">
            @include('contactus.heroimg') 
        </section>

        <section class="container mt-5 mb-5">
            <h1 class="fw-bold text-center text-black mb-3">History Email</h1>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="col-md-6 mt-3 mx-1">
                            <a href="/exportemailhistorypdf" class="btn btn-black">Export PDF</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Nomor Telepon</th>
                                            <th>Pesan</th>
                                            <th>Dibuat Pada</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($emails as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email}}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->messages }}</td>
                                            <td>{{ $item->created_at }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $emails->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="oleez-footer wow">
        @include('contactus.footersection')
    </footer>
    
    <section>
        @include('js.gopimain')
    </section>
</body>
</html>
