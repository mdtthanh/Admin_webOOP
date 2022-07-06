<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice Detail</title>

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

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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

    <div class="page-title">Invoice Detail</div>
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
        <a href="#" class="actions-btn">
            <i class="bi bi-three-dots"></i>
        </a>
    </div>
    <!-- ./ Header mobile buttons -->
</div>


    <!-- content -->
    <div class="content ">

    <div class="d-flex gap-3 mb-4 d-print-none">
        <button class="btn btn-outline-primary btn-icon">
            <i class="bi bi-download"></i> Download
        </button>
        <button onclick="javascript:window.print()" class="btn btn-outline-secondary d-none d-md-block btn-icon">
            <i class="bi bi-printer"></i> Print
        </button>
        <button class="btn btn-outline-success btn-icon">
            <i class="bi bi-share"></i> Share
        </button>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="invoice">
                <div class="d-md-flex justify-content-between align-items-center mb-4">
                    <div>Invoice No : #000756</div>
                    <div>Date: 	3/29/2021</div>
                </div>
                <div class="d-md-flex justify-content-between align-items-center">
                    <h4>Invoice</h4>
                    <div>
                        <img width="120" src="../../assets/images/logo.svg" alt="logo">
                    </div>
                </div>
                <hr class="my-4">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>Bill From</strong>
                        </p>
                        <p>81 Fulton Park, <br>Brazil/Pedro Leopoldo</p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-start text-md-end">
                            <strong>Bill to</strong>
                        </p>
                        <p>81 Fulton Park, <br>Brazil/Pedro Leopoldo</p>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table mb-4 mt-4">
                        <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Description</th>
                            <th class="text-end">Quantity</th>
                            <th class="text-end">Price</th>
                            <th class="text-end">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="text-end">
                            <td class="text-start">1</td>
                            <td class="text-start">Digital clock</td>
                            <td>1</td>
                            <td>$1.190,90</td>
                            <td>$1.190,90</td>
                        </tr>
                        <tr class="text-end">
                            <td class="text-start">1</td>
                            <td class="text-start">Toy Car</td>
                            <td>1</td>
                            <td>$139.58</td>
                            <td>$139.58</td>
                        </tr>
                        <tr class="text-end">
                            <td class="text-start">2</td>
                            <td class="text-start">Sunglasses</td>
                            <td>1</td>
                            <td>$50,90</td>
                            <td>$101,80</td>
                        </tr>
                        <tr class="text-end">
                            <td class="text-start">3</td>
                            <td class="text-start">Cake</td>
                            <td>1</td>
                            <td>$10,50</td>
                            <td>$10,50</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-end">
                    <p>Sub Total: $1.442,78</p>
                    <p>Shipping: Free</p>
                    <p>Tax(18%) : $259.70</p>
                    <h4 class="fw-bold">Total: $1.702,48</h4>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- ./ content -->

    <!-- content-footer -->
    <footer class="content-footer">

    </footer>
    <!-- ./ content-footer -->

</div>
<!-- ./ layout-wrapper -->

<!-- Bundle scripts -->
<script src="../../libs/bundle.js"></script>


<!-- Main Javascript file -->
<script src="../../dist/js/app.min.js"></script>
</body>
</html>
