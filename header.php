<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?=URL?>">
    <meta charset="UTF-8">
    <title>ِDigikala online shop</title>
    <link rel="stylesheet" href="public/css/fontawesome/css/all.css">

    <link href="public/css/bootstrap/bootstrap.css" rel="stylesheet">
    <!--admin-->
    <link href="public/css/admin/sb-admin.css" rel="stylesheet" type="text/css">
    <link href="public/css/admin/admin.css" rel="stylesheet" type="text/css">
    <!--end admin-->
    <link href="public/css/style.css" rel="stylesheet">

    <link href="public/css/header.css" rel="stylesheet">
    <link href="public/css/navigation.css" rel="stylesheet">
    <link href="public/css/tab.css" rel="stylesheet">
    <link href="public/css/slider.css" rel="stylesheet">
    <link href="public/css/footer.css" rel="stylesheet">


    <!---flipTimer css-->
    <link href="public/timer/css/flipTimer.css" rel="stylesheet">
    <script src="public/js/jquery-3.3.1.min.js"></script>
    <script src="public/js/admin/popper.min.js"></script>
    <script src="public/js/bootstrap.js"></script>

    <!---flipTimer js-->
    <script src="public/timer/js/jquery.flipTimer.js"></script>



</head>
<body>

<header>
    <nav class="navbar navbar-light">
        <a class="navbar-brand">
            <img class="logo" src="public/image/logoDigikala.png" alt="">
        </a>
        <div class="card-box  w-50">
            <div class="card-header">
                <a href="register" class="mr-5">Register<i class="fa fa-user" aria-hidden="true"></i></a>
                <a href="login">Login<i class="fa fa-lock" aria-hidden="true"></i></a>
            </div>
            <div class="card-body">
                <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <span class="fa fa-search"></span>
                            </button>
                        </span>
                    <input class="form-control" type="submit" value="">
                    <span class="input-group-btn">
                            <button class="btn btn-success ml-2">
                                <span><i class="badge badge-light rounded-circle mr-4">1</i>Card</span>
                                 <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                             </button>
                        </span>
                </div>
            </div>
            <!-- /.input-group -->
        </div>
    </nav>
</header>
<!--navigation-->
<nav class="navigation navbar navbar-expand-lg bg-light">
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Links -->
    <div class="collapse navbar-collapse" id="nav-content">
        <ul class="navbar-nav ">
            <!-- first Dropdown -->
            <li class="nav-item dropdown ">
                <form>
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        Digital Products
                    </a>
                    <div class="dropdown-menu col-sm-12">
                        <!---Content of First menu-->
                        <div class="row navigation">
                            <div class="col-sm-12 ">
                                <nav>
                                    <div class="nav nav-tabs nav-fill"  role="tablist">
                                        <a class="nav-item nav-link active"  data-toggle="tab" href="#tab1" role="tab"  aria-selected="true">Mobile</a>
                                        <a class="nav-item nav-link"  data-toggle="tab" href="#tab2" role="tab" aria-selected="false">Tablet</a>
                                        <a class="nav-item nav-link"  data-toggle="tab" href="#tab3" role="tab"  aria-selected="false">Laptop</a>
                                    </div>
                                </nav>
                                <div class="tab-content py-3 px-3 px-sm-0" >
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                        <div class="row mobile back-col">
                                            <div class="col-md-3 data-col">
                                                <h6>Mobile</h6>
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">Apple</a>
                                                    <a href="#" class="list-group-item">LG</a>
                                                    <a href="#" class="list-group-item">HTC</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3 data-col">
                                                <h6>Operating system</h6>
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">Apple</a>
                                                    <a href="#" class="list-group-item">LG</a>
                                                    <a href="#" class="list-group-item">HTC</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3 data-col">
                                                <h6>Phone types</h6>
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">Apple</a>
                                                    <a href="#" class="list-group-item">LG</a>
                                                    <a href="#" class="list-group-item">HTC</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3 data-col">
                                                <h6>Phone accessories</h6>
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">Apple</a>
                                                    <a href="#" class="list-group-item">LG</a>
                                                    <a href="#" class="list-group-item">HTC</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel" >
                                        <div class="row tablet back-col">
                                            <div class="col-md-3 data-col">
                                                <h6>Mobile</h6>
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">Apple</a>
                                                    <a href="#" class="list-group-item">LG</a>
                                                    <a href="#" class="list-group-item">HTC</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3 data-col">
                                                <h6>Operating system</h6>
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">Apple</a>
                                                    <a href="#" class="list-group-item">LG</a>
                                                    <a href="#" class="list-group-item">HTC</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3 data-col">
                                                <h6>Phone types</h6>
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">Apple</a>
                                                    <a href="#" class="list-group-item">LG</a>
                                                    <a href="#" class="list-group-item">HTC</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3 data-col">
                                                <h6>Phone accessories</h6>
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">Apple</a>
                                                    <a href="#" class="list-group-item">LG</a>
                                                    <a href="#" class="list-group-item">HTC</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel" >
                                        <div class="row laptop back-col">
                                            <div class="col-md-3 data-col">
                                                <h6>Mobile</h6>
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">Apple</a>
                                                    <a href="#" class="list-group-item">LG</a>
                                                    <a href="#" class="list-group-item">HTC</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3 data-col">
                                                <h6>Operating system</h6>
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">Apple</a>
                                                    <a href="#" class="list-group-item">LG</a>
                                                    <a href="#" class="list-group-item">HTC</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3 data-col">
                                                <h6>Phone types</h6>
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">Apple</a>
                                                    <a href="#" class="list-group-item">LG</a>
                                                    <a href="#" class="list-group-item">HTC</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3 data-col">
                                                <h6>Phone accessories</h6>
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">Apple</a>
                                                    <a href="#" class="list-group-item">LG</a>
                                                    <a href="#" class="list-group-item">HTC</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </li>
            <!-- SecondDropdown -->
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                    Home Appliances
                </a>
                <div class="dropdown-menu col-sm-12">
                    <!--Content of Second menu-->
                    <div class="row navigation">
                        <div class="col-sm-12 ">
                            <nav>
                                <div class="nav nav-tabs nav-fill"  role="tablist">
                                    <a class="nav-item nav-link active"  data-toggle="tab" href="#tab4" role="tab"  aria-selected="true">Video and Audio</a>
                                    <a class="nav-item nav-link"  data-toggle="tab" href="#tab5" role="tab" aria-selected="false">Home Appliances</a>

                                </div>
                            </nav>
                            <div class="tab-content py-3 px-3 px-sm-0" >
                                <div class="tab-pane fade show active" id="tab4" role="tabpanel">
                                    <div class="row VideoAndAudio back-col">
                                        <div class="col-md-3 data-col">
                                            <h6>Mobile</h6>
                                            <div class="list-group">
                                                <a href="#" class="list-group-item">Apple</a>
                                                <a href="#" class="list-group-item">LG</a>
                                                <a href="#" class="list-group-item">HTC</a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 data-col">
                                            <h6>Operating system</h6>
                                            <div class="list-group">
                                                <a href="#" class="list-group-item">Apple</a>
                                                <a href="#" class="list-group-item">LG</a>
                                                <a href="#" class="list-group-item">HTC</a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 data-col">
                                            <h6>Phone types</h6>
                                            <div class="list-group">
                                                <a href="#" class="list-group-item">Apple</a>
                                                <a href="#" class="list-group-item">LG</a>
                                                <a href="#" class="list-group-item">HTC</a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 data-col">
                                            <h6>Phone accessories</h6>
                                            <div class="list-group">
                                                <a href="#" class="list-group-item">Apple</a>
                                                <a href="#" class="list-group-item">LG</a>
                                                <a href="#" class="list-group-item">HTC</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab5" role="tabpanel" >
                                    <div class="row HomeAppliances back-col">
                                        <div class="col-md-3 data-col">
                                            <h6>Mobile</h6>
                                            <div class="list-group">
                                                <a href="#" class="list-group-item">Apple</a>
                                                <a href="#" class="list-group-item">LG</a>
                                                <a href="#" class="list-group-item">HTC</a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 data-col">
                                            <h6>Operating system</h6>
                                            <div class="list-group">
                                                <a href="#" class="list-group-item">Apple</a>
                                                <a href="#" class="list-group-item">LG</a>
                                                <a href="#" class="list-group-item">HTC</a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 data-col">
                                            <h6>Phone types</h6>
                                            <div class="list-group">
                                                <a href="#" class="list-group-item">Apple</a>
                                                <a href="#" class="list-group-item">LG</a>
                                                <a href="#" class="list-group-item">HTC</a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 data-col">
                                            <h6>Phone accessories</h6>
                                            <div class="list-group">
                                                <a href="#" class="list-group-item">Apple</a>
                                                <a href="#" class="list-group-item">LG</a>
                                                <a href="#" class="list-group-item">HTC</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </li>
            <!-- Third Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                    Beauty and health
                </a>
                <div class="dropdown-menu col-sm-12">
                    <a class="dropdown-item" href="#">Link 5</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 5</a>
                </div>
            </li>
            <!--fourth Dropdown-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                    sport and entertainment
                </a>
                <div class="dropdown-menu col-sm-12">
                    <a class="dropdown-item" href="#">Link 1</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 3</a>
                </div>
            </li>
            <!--five Dropdown-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                    mother and child
                </a>
                <div class="dropdown-menu col-sm-12">
                    <a class="dropdown-item" href="#">Link 5</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 3</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!--End of navigation-->
