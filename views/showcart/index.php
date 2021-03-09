
 <link href="public/css/showCart.css" rel="stylesheet">
<!--MainContent start-->
<div class="container bg-white showCart pt-4 pb-4">
    <div class="card">
        <div class="card-header">
            <span class="float-sm-left fontSize4 text-secondary">Your cart in this store</span>
            <button class="btn btn-success float-sm-right text-white">Finalize the purchase</button>
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
                <div class="w-100">
                    <ul class="list-group w-50">
                        <li class="list-group-item">
                            <span class="float-md-left">Total purchases :</span>
                            <span class="float-md-right">600 &euro;</span>
                        </li>
                        <li class="list-group-item list-group-item-success">
                            <span class="float-md-left">Total Amount :</span>
                            <span class="float-md-right">550 &euro;</span>
                        </li>
                    </ul>
                    <button class="btn btn-success float-md-left  mt-2">Select shipping method</button>
                    <button class="btn btn-secondary float-md-right mt-2 ">Back to home</button>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End MainContent --->
