<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Detail</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png"/>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="../../dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css" type="text/css">
    <!-- Bootstrap Docs -->
    <link rel="stylesheet" href="../../dist/css/bootstrap-docs.css" type="text/css">


    <!-- Main style file -->
    <link rel="stylesheet" href="../../dist/css/app.min.css" type="text/css">


</head>
<body>

<!-- menu -->
<div class="menu">
    <div class="menu-header">
        <a href="index.html" class="btn btn-sm menu-close-btn">
            <i class="bi bi-x"></i>
        </a>
    </div>
    <div class="menu-body">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                <div class="avatar me-3">
                    <img src="../../assets/images/user/man_avatar3.jpg"
                         class="rounded-circle" alt="image">
                </div>
                <div>
                    <div class="fw-bold">Timotheus Bendan</div>
                    <small class="text-muted">Sales Manager</small>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="../authen/login.html" class="dropdown-item d-flex align-items-center text-danger"
                   target="_blank">
                    <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                </a>
            </div>
        </div>
        <ul>
            <li>
                <a  href="../index.php">
                    <span class="nav-link-icon">
                        <i class="bi bi-bar-chart"></i>
                    </span>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="../orders/orders.php">
                    <span class="nav-link-icon">
                        <i class="bi bi-receipt"></i>
                    </span>
                    <span>Orders</span>
                </a>
            </li>
            <li>
                <a href="../products/product-list.php">
                    <span class="nav-link-icon">
                        <i class="bi bi-truck"></i>
                    </span>
                    <span>Products</span>
                </a>
            </li>
            <li>
                <a href="../categories/categories.php">
                    <span class="nav-link-icon">
                        <i class="bi bi-wallet2"></i>
                    </span>
                    <span>Categories</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- ./  menu -->
<!-- layout-wrapper -->
<div class="layout-wrapper">
    <!-- header -->
    <div class="header">
    <div class="menu-toggle-btn"> <!-- Menu close button for mobile devices -->
        <a href="#">
            <i class="bi bi-list"></i>
        </a>
    </div>
    <div class="page-title">Order Detail</div>
    <form class="search-form">
        <div class="input-group">
            <button class="btn btn-outline-light" type="button" id="button-addon1">
                <i class="bi bi-search"></i>
            </button>
            <input type="text" class="form-control" placeholder="Search..."
                   aria-label="Example text with button addon" aria-describedby="button-addon1">
            <a href="#" class="btn btn-outline-light close-header-search-bar">
                <i class="bi bi-x"></i>
            </a>
        </div>
    </form>
    <!-- Header mobile buttons -->
    <div class="header-mobile-buttons">
        <a href="#" class="search-bar-btn">
            <i class="bi bi-search"></i>
        </a>
    </div>
    <!-- ./ Header mobile buttons -->
    </div>
    <!-- ./ header -->

    <!-- content -->
    <div class="content ">

    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="../index.html">
                        <i class="bi bi-globe2 small me-2"></i> Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="orders.html">
                        <i class=" small me-2"></i> Orders
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Order Detail</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="mb-5 d-flex align-items-center justify-content-between">
                        <span>Order No : <a href="#">#5355619</a></span>
                        <span class="badge bg-success">Completed</span>
                    </div>
                    <div class="row mb-5 g-4">
                        <div class="col-md-3 col-sm-6">
                            <p class="fw-bold">Order Created at</p>
                            16/06/2021 at 04:23 PM
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p class="fw-bold">Name</p>
                            Sayres Seater
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p class="fw-bold">Email</p>
                            sayres@sayres.com
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p class="fw-bold">Contact No</p>
                            767-251-8637
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-body d-flex flex-column gap-3">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-0">Delivery Address</h5>
                                        <a href="#">Edit</a>
                                    </div>
                                    <div>Name: Home</div>
                                    <div>Josephin Villa</div>
                                    <div>81 Fulton Park, Brazil/Pedro Leopoldo</div>
                                    <div>
                                        <i class="bi bi-telephone me-2"></i> 408-963-7769
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-body d-flex flex-column gap-3">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-0">Billing Address</h5>
                                        <a href="#">Edit</a>
                                    </div>
                                    <div>Name: Workplace</div>
                                    <div>Josephin Villa</div>
                                    <div>29543 South Plaza, Canada/Sydney Mines</div>
                                    <div>
                                        <i class="bi bi-telephone me-2"></i> 484-948-8535
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card widget">
                <h5 class="card-header">Order Items</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-custom mb-0">
                            <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="#">
                                        <img src="../../assets/images/products/3.jpg" class="rounded" width="60" alt="...">
                                    </a>
                                </td>
                                <td>Digital clock</td>
                                <td>1</td>
                                <td>$1.190,90</td>
                                <td>$1.190,90</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        <img src="../../assets/images/products/4.jpg" class="rounded" width="60" alt="...">
                                    </a>
                                </td>
                                <td>Toy car</td>
                                <td>2</td>
                                <td>$139,58</td>
                                <td>$279,16</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        <img src="../../assets/images/products/5.jpg" class="rounded" width="60" alt="...">
                                    </a>
                                </td>
                                <td>Sunglasses</td>
                                <td>1</td>
                                <td>$50,90</td>
                                <td>$50,90</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 mt-4 mt-lg-0">
            <div class="card mb-4">
                <div class="card-body">
                    <h6 class="card-title mb-4">Price</h6>
                    <div class="row justify-content-center mb-3">
                        <div class="col-4 text-end">Sub Total :</div>
                        <div class="col-4">$1.520,96</div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-4 text-end">Shipping :</div>
                        <div class="col-4">Free</div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-4 text-end">Tax(18%) :</div>
                        <div class="col-4">$273,77</div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4 text-end">
                            <strong>Total :</strong>
                        </div>
                        <div class="col-4">
                            <strong>$1.794,73</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-4">Invoice</h6>
                    <div class="row justify-content-center mb-3">
                        <div class="col-6 text-end">Invoice No :</div>
                        <div class="col-6">
                            <a href="invoice-detail.html">#5355619</a>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-6 text-end">Seller GST :</div>
                        <div class="col-6">12HY87072641Z0</div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-6 text-end">Purchase GST :</div>
                        <div class="col-6">22HG9838964Z1</div>
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-outline-primary">Download PDF</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- ./ content -->

    <!-- content-footer -->
    <footer class="content-footer">
        <!-- <div>© 2022 - <a href=""OOP</a></div> -->
    </footer>
    <!-- ./ content-footer -->
</div>

<!-- Bundle scripts -->
<script src="../../libs/bundle.js"></script>

    <!-- Examples -->
    <script src="../../dist/js/examples/orders.js"></script>

<!-- Main Javascript file -->
<script src="../../dist/js/app.min.js"></script>
</body>
</html>
