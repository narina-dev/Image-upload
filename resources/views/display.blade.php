<!DOCTYPE html>
<html lang="en">

<head>
    <title>Images Display</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        body {
            background-color: #ffffff
        }

    </style>

</head>

<body>

    <!--Navbar-->
    
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#2f353a">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="navbar-brand-full" src="logo\logo.png" width="100" height="50" alt="Egermart Logo">

            </a>
        <div class="container">
            
           

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Sell</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>

                    

                </ul>
                <!-- Links -->

                
            </div>
            <!-- Collapsible content -->
        </div>
    </nav>
    <!--/.Navbar-->
    <div class="row mt-2">
            <form class="form-inline">
                    <div class="md-form my-0 ml-4">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" style="width:500px; padding-left:30px">
                    </div>
                </form>
    </div>


    <div class="container mt-4">

        <div class="row">

            @foreach ($images as $image)
            <div class="col-md-3 mb-2 ">
                <div class="card" style="box-shadow: #e9ecef 2px 4px 7px 0px;">
                    <img class="card-img-top" src="{{ '/images/'.$image->image_name }}" alt="Card image" height="150">
                    <div class="card-body" style="padding-top:4px; padding-bottom:5px;">
                        <h5 class="card-title mb-0">{{ $image->product_name}} </h5>
                        Ksh {{ $image->product_price}}

                        <!-- <a href=" " class="btn btn-primary stretched-link">See Profile</a> -->
                    </div>
                </div>
            </div>
            <br>

            @endforeach

            <br><br>

        </div>

    </div>

</body>

</html>
