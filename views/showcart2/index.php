
    <link rel="stylesheet" href="public/css/SameCssShowCart.css">
    <script src="public/js/countryCityPicker/countries.js"></script>
<!--MainContent start-->
<div class="container bg-white showCart2 sameTimeOrder pt-4 pb-4">
    <div class="card ">
        <div class="card-header order-steps text-center">
            <ul class="circle">
                <li>Login</li>
                <li class="active">Order</li>
                <li>Review</li>
                <li >Submit</li>

            </ul>
        </div>
        <div class="card-body overflow-x">
            <div class="w-100 mb-2 d-inline-block">
                <span class="text-secondary fontSize4 float-md-left mt-1">
                    <span class="fa fa-angle-right text-primary mr-2"></span>Choose Address
                </span>
                <!-- Button trigger modal -->
                <button class="btn btn-secondary float-md-right mt-1" data-toggle="modal" data-target="#AddNewAddress">Add neu address</button>
                <!-- End Button trigger modal -->
                <!-- Modal -->
                <div class="modal fade" id="AddNewAddress" tabindex="-1" role="dialog" aria-labelledby="AddNewAddressTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="AddNewAddressTitle">Add new address</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span class="fa fa-close" aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" >
                                    <div class="form-group">
                                        <label for="nameInput">Name and surname :</label>
                                        <input type="text" class="form-control" name="name" id="nameInput">
                                    </div>
                                    <div class="form-group">
                                        <label for="telephoneInput">Telephone :</label>
                                        <input type="text" class="form-control" name="telephone" id="telephoneInput">
                                    </div>
                                    <div class="form-group">
                                        <label for="mobileInput">Mobile :</label>
                                        <input type="text" class="form-control" name="mobile" id="mobileInput">
                                    </div>
                                    <div class="form-group">
                                        <label for="Country">Country :</label>
                                        <select id="country" name ="country" class="custom-select"></select>
                                    </div>
                                    <div class="form-group">
                                        <label for="state">City :</label>
                                        <select name ="state" id ="state" class="custom-select"></select>
                                    </div>
                                    <div class="form-group">
                                        <label for="contentAddress">Address :</label>
                                        <textarea class="form-control" name="textAddress" id="contentAddress" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="PostalCode">Postal code :</label>
                                        <input type="text" class="form-control" name="PostalCode" id="PostalCode">
                                    </div>

                                </form>
                                <!----------------for County&City Picker-------------------------->
                                <script language="javascript">
                                    populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
                                </script>

                            </div>
                            <div class="modal-footer text-center">
                                <button type="button" class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end Modal-->
            </div>
            <table class="table table-bordered text-secondary fontSize2 size-dt">
                <tbody>
                <tr>
                    <td rowspan="3" class="col-1 position-relative bgActiveTd">
                        <!-- Group of default radios - option 1 -->
                        <div class="custom-control custom-radio posCircle">
                            <input type="radio" class="custom-control-input" id="ChooseAddress1" name="ChooseAddress" checked>
                            <label class="custom-control-label" for="ChooseAddress1"></label>
                        </div>
                    </td>
                    <td colspan="3" class="col-10">Name anf Family</td>
                    <td rowspan="3" class="col-1 p-0 ">
                            <span class="sameDetails bg-edit">
                                <a href="#"><span class="fa fa-edit text-primary"></span></a>
                            </span>
                        <span class="sameDetails bg-delete">
                                <a href="#"><span class="fa fa-close text-danger"></span></a>
                            </span>
                    </td>
                </tr>
                <tr>
                    <td class="col-2">State : Germany</td>
                    <td rowspan="2" class="col-6">
                        <p>Address: text text text text text text text text text text </p>
                        <p>Postal code: text text text text text text text text text text </p>
                    </td>
                    <td class="col-2">
                        Telephone : 322154114
                    </td>
                </tr>
                <tr>
                    <td class="col-2">City : Erlangen</td>
                    <td class="col-2">Mobil : 215465454464</td>

                </tr>
                </tbody>
            </table>
            <table class="table table-bordered text-secondary fontSize2 size-dt">
                <tbody>
                <tr>

                    <td rowspan="3" class="col-1 position-relative bgActiveTd">

                        <!-- Group of default radios - option 1 -->
                        <div class="custom-control custom-radio posCircle">
                            <input type="radio" class="custom-control-input" id="ChooseAddress2" name="ChooseAddress">
                            <label class="custom-control-label" for="ChooseAddress2"></label>
                        </div>
                    </td>
                    <td colspan="3" class="col-10">Name anf Family</td>
                    <td rowspan="3" class="col-1 p-0">
                            <span class="sameDetails bg-edit">
                                <a href="#"><span class="fa fa-edit text-primary"></span></a>
                            </span>
                        <span class="sameDetails bg-delete">
                                <a href="#"><span class="fa fa-close text-danger"></span></a>
                            </span>
                    </td>
                </tr>
                <tr>
                    <td class="col-2">State : Germany</td>
                    <td rowspan="2" class="col-6">
                        <p>Address: text text text text text text text text text text </p>
                        <p>Postal code: text text text text text text text text text text </p>
                    </td>
                    <td class="col-2">
                        Telephone : 322154114
                    </td>
                </tr>
                <tr>
                    <td class="col-2">City : Erlangen</td>
                    <td class="col-2">Mobil : 215465454464</td>

                </tr>
                </tbody>
            </table>


            <div class="w-100">
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
            <button class="btn btn-primary fontSize2"><span class="fa fa-arrow-left mr-2"></span>Save and continue shopping</button>
        </div>

    </div>
</div>
<!-- End MainContent --->
