<div class="container desktop-show">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="footer-widget-text">
                <h6 class="fs-5 fw-bold">Address:</h6>
                <p class="widget-content fw-normal fs-6 text-left">GOODEVA CBD Division, Grand Galaxy Commercial RSK 6 No. 15, <br> Kota Bekasi</p>
            </div>
            <div class="footer-widget-text">
                <h6 class="fs-5 fw-bold">Email:</h6>
                <p class="widget-content fw-normal fs-6 text-left">globalpristiya@gopi.com</p>
            </div>
            <div class="footer-widget-text">
                <h6 class="fs-5 fw-bold">Follow Us</h6>
                <p class="widget-content">
                    <a class="text-decoration-none text-black" href=""> <i class="bi bi-youtube fs-4 mx-2"></i></a>
                    <a class="text-decoration-none text-black" href=""> <i class="bi bi-twitter fs-4 mx-2"></i></a>
                    <a class="text-decoration-none text-black" href=""> <i class="bi bi-instagram fs-4 mx-2"></i></a>
                    <a class="text-decoration-none text-black" href=""> <i class="bi bi-facebook fs-4 mx-2"></i></a>
                </p>
            </div>
        </div>
        <div class="col-md-8">
            @if (Session::has('message_sent'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('message_sent'); }}
                </div>
            @endif
            <form action="{{ route('send.email') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-container mt-0">
                    <input type="text" id="name" name="name" required>
                    <label for="name" class="label">Your Name</label>
                    <div class="underline"></div>
                    @error('name')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>   
                <div class="input-container mt-5">
                    <input type="text" id="email" name="email" required>
                    <label for="email" class="label">Email Address</label>
                    <div class="underline"></div>
                    @error('email')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>   
                <div class="input-container mt-5">
                    <input type="text" id="phone" name="phone" required>
                    <label for="phone" class="label">Phone</label>
                    <div class="underline"></div>
                </div>   
                <div class="input-container mt-5 mb-4">
                    <input type="text" id="messages" name="messages" required>
                    <label for="messages" class="label">Messages</label>
                    <div class="underline"></div>
                    @error('messages')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>   

                <button class="btn btn-black px-3 py-2 rounded-0 mt-0">Submit</button>
            </form>
        </div>
    </div>
</div>

<div class="container mobile-show">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Session::has('message_sent'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('message_sent'); }}
                </div>
            @endif
            <form action="{{ route('send.email') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-container mt-3">
                    <input type="text" id="name" name="name" required>
                    <label for="name" class="label">Your Name</label>
                    <div class="underline"></div>
                    @error('name')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>   
                <div class="input-container mt-4">
                    <input type="text" id="email" name="email" required>
                    <label for="email" class="label">Email Address</label>
                    <div class="underline"></div>
                    @error('email')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>   
                <div class="input-container mt-4">
                    <input type="text" id="phone" name="phone" required>
                    <label for="phone" class="label">Phone</label>
                    <div class="underline"></div>
                </div>   
                <div class="input-container mt-4">
                    <input type="text" id="messages" name="messages" required>
                    <label for="messages" class="label">Messages</label>
                    <div class="underline"></div>
                    @error('messages')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>   

                <div class="d-grid gap-2">
                    <button class="btn btn-black px-3 py-2 rounded-0 mt-0">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-4 mt-5">
            <div class="footer-widget-text">
                <h6 class="fs-5 fw-bold">Address:</h6>
                <p class="widget-content fw-normal fs-6 text-left">GOODEVA CBD Division, Grand Galaxy Commercial RSK 6 No. 15, <br> Kota Bekasi</p>
            </div>
            <div class="footer-widget-text">
                <h6 class="fs-5 fw-bold">Email:</h6>
                <p class="widget-content fw-normal fs-6 text-left">globalpristiya@gopi.com</p>
            </div>
            <div class="footer-widget-text">
                <h6 class="fs-5 fw-bold">Follow Us</h6>
                <p class="widget-content">
                    <a class="text-decoration-none text-black" href=""> <i class="bi bi-youtube fs-4 mx-2"></i></a>
                    <a class="text-decoration-none text-black" href=""> <i class="bi bi-twitter fs-4 mx-2"></i></a>
                    <a class="text-decoration-none text-black" href=""> <i class="bi bi-instagram fs-4 mx-2"></i></a>
                    <a class="text-decoration-none text-black" href=""> <i class="bi bi-facebook fs-4 mx-2"></i></a>
                </p>
            </div>
        </div>
    </div>
</div>