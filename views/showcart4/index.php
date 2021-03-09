
<link href="public/css/showCart.css" rel="stylesheet">
<link href="public/css/SameCssShowCart.css" rel="stylesheet">
<body>

<!--MainContent start-->
<div class="container bg-white showCart showCart4 sameTimeOrder pt-4 pb-4">
    <div class="card">
        <div class="card-header">
            <div class="order-steps text-center pt-2 pb-2">
                <ul class="circle">
                    <li>Login</li>
                    <li>Order</li>
                    <li>Review</li>
                    <li  class="active">Submit</li>

                </ul>
            </div>
            <button class="btn btn-primary fontSize2"><span class="fa fa-arrow-left mr-2"></span>Save and continue shopping</button>
        </div>
        <div class="card-body">
            <div class="list-group w-100">
                <span class="text-secondary fontSize4 float-md-left  pt-3 pb-3">
                    <span class="fa fa-angle-right text-primary mr-2"></span>Discount code
                </span>
                <div class="list-group-item">
                    <label for="discountCode" class="text-secondary">If you have a discount code enter here : </label>
                    <input type="text" id="discountCode" class="form-control discountCode ml-md-2">
                    <button class="btn btn-primary float-md-right mt-2 mt-md-0">submit discount code</button>
                </div>
            </div>
            <div class="list-group w-100">
                <span class="text-secondary fontSize4 float-md-left  pt-3 pb-3">
                    <span class="fa fa-angle-right text-primary mr-2"></span>GiftCard
                </span>
                <div class="list-group-item">
                    <label for="giftCard" class="text-secondary">If you use a gift card, just enter the code : </label>
                    <input type="text" id="giftCard" class="form-control discountCode ml-md-2">
                    <button class="btn btn-primary float-md-right mt-2 mt-md-0">submit giftCard</button>
                </div>
            </div>
            <div class="list-group w-100 mt-3 mb-3">
                <div class="list-group-item list-group-item-success">
                    <span class="float-md-left">The amount payable</span><span class="float-md-right">550 &euro;</span>
                </div>
            </div>
            <div class="d-inline-block mb-3 w-100 sameMethod">
                <div class="row sendingMethodDt table-bordered m-0">
                    <div class="col-sm-1 col-1 position-relative border-lightDt">
                        <div class="custom-control custom-radio chooseSendingMethod">
                            <input type="radio" id="SendingMethod2" name="SendingMethod" class="custom-control-input">
                            <label class="custom-control-label" for="SendingMethod2"></label>
                        </div>
                    </div>
                    <div class="col-sm-8 col-6 border-lightDt bank ">

                        <h6 class="mt-2">Online payment</h6>
                        <div class="custom-control custom-radio d-inline-block ml-md-3">
                            <input type="radio" id="firstChoose" name="ChooseMethod" class="custom-control-input" >
                            <label class="custom-control-label" for="firstChoose">First bank Online Payment Portal</label>
                        </div>
                        <div class="custom-control custom-radio d-inline-block ml-md-3">
                            <input type="radio" id="secondChoose" name="ChooseMethod" class="custom-control-input">
                            <label class="custom-control-label" for="secondChoose">Second bank Online Payment Portal</label>
                        </div>
                    </div>
                    <div class="col-sm-3 col-3">
                        <div class="fontSize4 black p-0 m-0">cost</div>
                        <div class="text-secondary p-0 m-0">15 &euro;</div>

                    </div>

                </div>
            </div>
            <div class="d-inline-block mb-3 w-100 sameMethod">
                <div class="row sendingMethodDt table-bordered m-0">
                    <div class="col-sm-1 col-1 position-relative border-lightDt">
                        <div class="custom-control custom-radio chooseSendingMethod">
                            <input type="radio" id="SendingMethod3" name="SendingMethod" class="custom-control-input">
                            <label class="custom-control-label" for="SendingMethod3"></label>
                        </div>
                    </div>
                    <div class="col-sm-11 col-11">
                        <h6 class="mt-2">Card to card</h6>
                        <p class="text-secondary fontSize2">Up to 24 hours after the order has been deposited, record the information</p>
                    </div>

                </div>
            </div>
            <div class="d-inline-block mb-3 w-100 sameMethod">
                <div class="row sendingMethodDt table-bordered m-0">
                    <div class="col-sm-1 col-1 position-relative border-lightDt">
                        <div class="custom-control custom-radio chooseSendingMethod">
                            <input type="radio" id="SendingMethod4" name="SendingMethod" class="custom-control-input">
                            <label class="custom-control-label" for="SendingMethod4"></label>
                        </div>
                    </div>
                    <div class="col-sm-11 col-11">
                        <h6 class="mt-2">Deposit to account</h6>
                        <p class="text-secondary fontSize2">You can deposit into a company account by visiting the bank branches and registering it for up to 24 hours after ordering.</p>
                    </div>

                </div>
            </div>
            <!--for choose radio button -->
            <script src="public/js/showCart4.js"></script>



            <button class="btn btn-secondary mt-2 ">Edit</button>



        </div>
    </div>

</div>
<!-- End MainContent --->
