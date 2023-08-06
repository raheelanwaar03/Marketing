<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Authentication</title>
</head>

<body
    style="background-image: url({{ asset('assets/images/bag.jpg') }});background-repeat:no-repeat;background-size:cover;">
    <img src="" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-warning">Login New Account</h1>
            </div>
        </div>
        <div class="row min-vh-100">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <div class="card bg-transparent border-light shadow-lg w-100">
                    <div class="card-body">
                        <form href="{{ route('register') }}" method="POST" class="contact-form newsletter">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Name</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter New User Name">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Email <small>Enter offical email
                                                here</small></label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="info@gmail.com">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Your Password</label>
                                        <input type="password" name="password" class="form-control"
                                            placeholder="*********">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Your Password</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            placeholder="*********">
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-warning">Have not register yet?<span><a href="https://fiyver.com/register"
                            style="text-decoration: none;" class="btn text-warning btn-lg text-light">Register
                            Now!</a></span></h1>
            </div>
        </div>
    </div>
</body>

</html>
