<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoices</title>

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

    <div class="page-title">Invoices</div>
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

    <div class="card">
        <div class="card-body">
            <div class="d-md-flex">
                <div class="d-md-flex gap-4 align-items-center">
                    <form class="mb-3 mb-md-0">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option>Sort by</option>
                                    <option value="desc">Desc</option>
                                    <option value="asc">Asc</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <button class="btn btn-outline-light" type="button">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="dropdown ms-auto">
                    <a href="#" data-bs-toggle="dropdown"
                       class="btn btn-primary dropdown-toggle"
                       aria-haspopup="true" aria-expanded="false">Actions</a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="#" class="dropdown-item">Action</a>
                        <a href="#" class="dropdown-item">Another action</a>
                        <a href="#" class="dropdown-item">Something else here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table id="invoices" class="table table-custom table-lg">
            <thead>
            <tr>
                <th>
                    <input class="form-check-input select-all" type="checkbox" data-select-all-target="#invoices" id="defaultCheck1">
                </th>
                <th>Invoice</th>
                <th>Customer</th>
                <th>Total</th>
                <th>Status</th>
                <th>Date</th>
                <th class="text-end">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">INV-3145</a>
                </td>
                <td>
                    <div class="avatar avatar-sm avatar-success me-2">
                        <div class="avatar-text rounded-circle">D</div>
                    </div>
                    Dollie Bullock
                </td>
                <td>$230</td>
                <td>
                    <span class="badge bg-secondary">On pre-order (not paid)</span>
                </td>
                <td>1/11/2021</td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Send</a>
                            <a href="#" class="dropdown-item">Download</a>
                            <a href="#" class="dropdown-item">Print</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">INV-7321</a>
                </td>
                <td>
                    <div class="avatar avatar-sm avatar-danger me-2">
                        <div class="avatar-text rounded-circle">H</div>
                    </div>
                    Holmes Hines
                </td>
                <td>$300</td>
                <td>
                    <span class="badge bg-success">Payment accepted</span>
                </td>
                <td>1/15/2021</td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Send</a>
                            <a href="#" class="dropdown-item">Download</a>
                            <a href="#" class="dropdown-item">Print</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">INV-9342</a>
                </td>
                <td>
                    <div class="avatar avatar-sm avatar-info me-2">
                        <div class="avatar-text rounded-circle">S</div>
                    </div>
                    Serena Glover
                </td>
                <td>$250</td>
                <td>
                    <span class="badge bg-danger">Payment error</span>
                </td>
                <td>1/19/2021</td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Send</a>
                            <a href="#" class="dropdown-item">Download</a>
                            <a href="#" class="dropdown-item">Print</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">INV-6416</a>
                </td>
                <td>Dianne Prince</td>
                <td>$550</td>
                <td>
                    <span class="badge bg-success">Payment accepted</span>
                </td>
                <td>1/5/2021</td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Send</a>
                            <a href="#" class="dropdown-item">Download</a>
                            <a href="#" class="dropdown-item">Print</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">INV-92327</a>
                </td>
                <td>Morgan Pitts</td>
                <td>$280</td>
                <td>
                    <span class="badge bg-warning">Preparing the order</span>
                </td>
                <td>3/24/2021</td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Send</a>
                            <a href="#" class="dropdown-item">Download</a>
                            <a href="#" class="dropdown-item">Print</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">INV-3013</a>
                </td>
                <td>Merrill Richardson</td>
                <td>$128</td>
                <td>
                    <span class="badge bg-info">Awaiting PayPal payment</span>
                </td>
                <td>4/12/2021</td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Send</a>
                            <a href="#" class="dropdown-item">Download</a>
                            <a href="#" class="dropdown-item">Print</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">INV-10323</a>
                </td>
                <td>Krista Mathis</td>
                <td>$500</td>
                <td>
                    <span class="badge bg-secondary">Shipped</span>
                </td>
                <td>3/13/2021</td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Send</a>
                            <a href="#" class="dropdown-item">Download</a>
                            <a href="#" class="dropdown-item">Print</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">INV-4218</a>
                </td>
                <td>Frankie Hewitt</td>
                <td>$300</td>
                <td>
                    <span class="badge bg-success">Remote payment accepted</span>
                </td>
                <td>3/13/2021</td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Send</a>
                            <a href="#" class="dropdown-item">Download</a>
                            <a href="#" class="dropdown-item">Print</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">INV-3158</a>
                </td>
                <td>Hayden Fitzgerald</td>
                <td>$200</td>
                <td>
                    <span class="badge bg-success">Delivered</span>
                </td>
                <td>3/29/2021</td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Send</a>
                            <a href="#" class="dropdown-item">Download</a>
                            <a href="#" class="dropdown-item">Print</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">INV-9610</a>
                </td>
                <td>Cole Holcomb</td>
                <td>$700</td>
                <td>
                    <span class="badge bg-secondary">On pre-order (not paid)</span>
                </td>
                <td>1/13/2021</td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Send</a>
                            <a href="#" class="dropdown-item">Download</a>
                            <a href="#" class="dropdown-item">Print</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <nav class="mt-5" aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>

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

    <!-- Examples -->
    <script src="../../dist/js/examples/invoices.js"></script>

<!-- Main Javascript file -->
<script src="../../dist/js/app.min.js"></script>
</body>
</html>
