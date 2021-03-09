
<link href="public/css/registerAndLogin.css" rel="stylesheet">
<div class="container login bg-white mt-4">
    <div class="row">
        <div class="col-12  text-center">
            <div class="p-4 mb-2 bg-light">
                <i class="fa fa-lock text-secondary"></i>
                <h4 class="text-secondary">Login</h4>
            </div>
        </div>
        <hr class="clearfix w-100 d-md-none">
        <div class="col-md-6 col-12">
            <div class="pl-3">
                <ul class="list-group list-unstyled">
                    <li>
                        <a href="#"><i class="fa fa-shopping-basket text-secondary mr-2"></i>Simple and fast shopping </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-tasks text-secondary mr-2"></i>Manage your purchases and activities </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-heart text-secondary mr-2"></i>Build your own favorites and follow it </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-comment text-secondary mr-2"></i>Review </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-percent text-secondary mr-2"></i>special sale </a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="clearfix w-100 d-md-none">
        <div class="col-md-6 col-12">
            <div class="pl-3 pl-md-0">
                <form class="form-horizontal" action="">
                    <div class="form-group">
                        <label class="control-label col-sm-2 text-secondary" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control text-secondary" id="email" placeholder="Enter email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 text-secondary" for="pwd">Password:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control text-secondary" id="pwd" placeholder="Enter password" name="pwd">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="custom-control custom-checkbox text-secondary">
                                <input type="checkbox" class="custom-control-input" id="checkInputRemember" name="remember">
                                <label class="custom-control-label" for="checkInputRemember">Remember me</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit"  class="btn btn-success float-left" disabled="disabled">Submit</button>
                            <button type="button" class="btn btn-danger float-right">Cancel</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10 text-center mt-md-2 mt-4">

                            <span>Forgot <a href="#">password?</a></span>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
