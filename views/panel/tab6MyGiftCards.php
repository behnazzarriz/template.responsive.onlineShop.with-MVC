<div class="w-100 mb-3">
    <div class="md-form mt-0">
        <div class="input-group">
            <div class="w-50">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </div>
            <button type="button" class="btn btn-primary ml-2">
                Activation
            </button>
        </div>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped">
        <thead class="table-dark">
        <tr>
            <th scope="col" class="align-middle">#</th>
            <th scope="col" class="align-middle">Code</th>
            <th scope="col" class="align-middle">Card Number</th>
            <th scope="col" class="align-middle">Price</th>
            <th scope="col" class="align-middle">Credit balance</th>
            <th scope="col" class="align-middle">Expiration date</th>
            <th scope="col" class="align-middle">Situation</th>
            <th scope="col" class="align-middle">Details</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td scope="row">1</td>
            <td>1452154</td>
            <td>DKJ-5856121</td>
            <td>DKJ-5856121</td>
            <td>2015-2-2</td>
            <td>2015-2-10</td>
            <td>2015-2-10</td>
            <td> <span onclick="showDetailTrOfTable(this)" class="fa fa-chevron-circle-down text-secondary btnDetails"></span></td>
        </tr>
        <tr class="detailsPanel">
            <td colspan="11"><!-- Merge columns-->
                <div class="table-responsive mt-3">
                    <table class="table table-striped">
                        <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th scope="col">Order</th>
                            <th scope="col">Type</th>
                            <th scope="col">Date</th>
                            <th scope="col">Expiration date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>