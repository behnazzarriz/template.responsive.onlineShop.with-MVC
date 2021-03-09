
    <link href="public/css/showCart.css" rel="stylesheet">
    <link href="public/css/SameCssShowCart.css" rel="stylesheet">
    
<!--MainContent start-->
<div class="container bg-white showCart showCart3 sameTimeOrder pt-4 pb-4">
    <div class="card">
        <div class="card-header">
            <div class="order-steps text-center pt-2 pb-2">
                <ul class="circle">
                    <li>Login</li>
                    <li>Order</li>
                    <li  class="active">Review</li>
                    <li >Submit</li>

                </ul>
            </div>
            <button class="btn btn-primary fontSize2"><span class="fa fa-arrow-left mr-2"></span>Save and continue shopping</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col" class="align-middle">#</th>
                        <th scope="col" class="align-middle">Image</th>
                        <th scope="col" class="align-middle">Product Description</th>
                        <th scope="col" class="align-middle">Count</th>
                        <th scope="col" class="align-middle">Unit price</th>
                        <th scope="col" class="align-middle">Total Price</th>
                        <th scope="col" class="align-middle">Delete</th>
                    </tr>
                    </thead>
                    <tbody class="text-secondary">
                    <tr>
                        <th scope="row">1</th>
                        <td class="w-25">
                            <img class="img-fluid img-thumbnail" src="public/image/image3.jpg" alt="#" >
                        </td>
                        <td>
                            <p>
                                text text text text text text text text text text text text text text text text
                            </p>
                            <p><span class="fa fa-circle text-danger mr-1"></span> red</p>
                            <p>One year warranty</p>

                        </td>
                        <td>
                            <label for="select1" class="d-none"></label>
                            <select name="value" id="select1" class="custom-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </td>
                        <td>300 &euro;</td>
                        <td>600 &euro;</td>
                        <td class="bg-red-light align-middle align-">
                            <span class="fa fa-close text-danger fontSize4 w-100 text-center"></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="w-100 d-inline-block mt-2 mb-2">
                <span class="text-secondary fontSize4 float-md-left mt-1">
                    <span class="fa fa-angle-right text-primary mr-2"></span>Summery your bills
                </span>
                </div>
                <ul class="list-group w-100">
                    <li class="list-group-item">
                        <span class="float-md-left">Total Amount :</span>
                        <span class="float-md-right">550 &euro;</span>
                    </li>
                    <li class="list-group-item">
                        <span class="float-md-left">shipping cost :</span>
                        <span class="float-md-right">20 &euro;</span>
                    </li>
                    <li class="list-group-item list-group-item-danger">
                        <span class="float-md-left">Total discount :</span>
                        <span class="float-md-right">0 &euro;</span>
                    </li>
                    <li class="list-group-item list-group-item-success">
                        <span class="float-md-left">Payable :</span>
                        <span class="float-md-right">0 &euro;</span>
                    </li>
                </ul>
                <div class="w-100 d-inline-block mt-2">
                <span class="text-secondary fontSize4 float-md-left mt-1">
                    <span class="fa fa-angle-right text-primary mr-2"></span>Sending method
                </span>
                </div>
                <div class="clearfix"></div>
                <div class="size-dt">
                    <div class="row sendingMethodDt table-bordered">
                        <div class="col-1 position-relative border-lightDt">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="SendingMethod1" name="SendingMethod">
                                <label class="custom-control-label" for="SendingMethod1"></label>
                            </div>
                        </div>
                        <div class="col-8 border-lightDt">

                            <div class="fa fa-truck fontSize7 orange float-left"></div>
                            <div class="d-block float-left">
                                <div class="fontSize4 black p-0 m-0">Express mail</div>
                                <div class="text-secondary p-0 m-0">estimated time : 48-72 time</div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="fontSize4 black p-0 m-0">shipping cost</div>
                            <div class="text-secondary p-0 m-0">15 &euro;</div>

                        </div>

                    </div>
                    <div class="row sendingMethodDt table-bordered">
                        <div class="col-1 position-relative border-lightDt">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="SendingMethod2" name="SendingMethod">
                                <label class="custom-control-label" for="SendingMethod2"></label>
                            </div>
                        </div>
                        <div class="col-8 border-lightDt">

                            <div class="fa fa-truck fontSize7 text-primary float-left"></div>
                            <div class="d-block float-left">
                                <div class="fontSize4 black p-0 m-0">Heavy Duty Freight Forwarding</div>
                                <div class="text-secondary p-0 m-0">estimated time : 48-72 time</div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="fontSize4 black p-0 m-0">shipping cost</div>
                            <div class="text-secondary p-0 m-0">15 &euro;</div>

                        </div>

                    </div>
                </div>

                <button class="btn btn-secondary mt-2 ">Edit</button>

            </div>

        </div>
    </div>

</div>
<!-- End MainContent --->
