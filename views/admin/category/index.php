
<?php
$categories=$result['categories'];
if(isset($result['parents']) && isset($result['categoryInfo'])){
    $parents=$result['parents'];
    $parents=array_reverse($parents);

    $CategoryInfo=$result['categoryInfo'];
}

?>

<div class="container admin">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <span class="badge badge-danger">9+</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <span class="badge badge-danger">7</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">
        <!-- Sidebar -->
        <?php require_once ('views/admin/sideBar.php')?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="adminCategory<?php if(isset($CategoryInfo['id'])){
                            echo '/showChildren/'.  $CategoryInfo['id'];
                        } ?>">Category Management</a>
                    </li>

                    <?php
                    if(isset($result['parents']) && isset($result['categoryInfo'])) {
                        foreach ($parents as $parent) {
                            ?>
                            <li class="breadcrumb-item">
                                <a href="adminCategory/showChildren/<?= $parent['id'] ?>">
                                    <?= $parent['title'] ?>
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                        <li class="breadcrumb-item">
                            <a href="adminCategory/showChildren/<?= $CategoryInfo['id'] ?>">
                                <?= $CategoryInfo['title'] ?>
                            </a>
                        </li>
                        <?php
                    }
                    ?>

                </ol>

                    <div class="mt-2 mb-2">
                        <a href="adminCategory/addCategory/<?=@$CategoryInfo['id']?>" class="btn btn-success">Add New Category</a>
                    </div>

                <table class="table">
                    <thead class="thead-dark">
                    <tr>

                        <th scope="col">id</th>
                        <th scope="col">title</th>
                        <th scope="col">subset</th>  <!--زیرمجموعه-->
                        <th scope="col">select</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($categories as $category){
                        ?>
                        <tr>
                            <th scope="row"><?=$category['id']?></th>
                            <td><?=$category['title']?></td>
                            <td>
                                <a href="adminCategory/showChildren/<?=$category['id']?>">view subset</a>
                            </td>
                            <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="<?=$category['id']?>">
                                        <label class="custom-control-label" for="<?=$category['id']?>"></label>
                                    </div>



                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                    </tbody>
                </table>



            </div>
            <!-- /.container-fluid -->


        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

</div>
