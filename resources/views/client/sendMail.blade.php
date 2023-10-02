<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="shortcut icon" href="{{ asset('assets_client/images/icon.png') }}" type="image/x-icon">
    <title>Voxo | Invoice template </title>
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_client/css/vendors/font-awesome.css') }}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_client/css/vendors/bootstrap.css') }}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_client/css/style1.css') }}">


</head>

<body class="bg-light">
    <section class="theme-invoice-1">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-8 mx-auto my-3">
                    <div class="invoice-wrapper">
                        <div class="invoice-header">
                            <div class="header-image">
                                <img src="{{ asset('assets_client/images/logo.svg') }}" class="img-fluid"
                                    alt="logo">
                            </div>
                            <div class="header-content">
                                <h3>Invoice</h3>
                            </div>
                        </div>
                        <div class="invoice-body">
                            <div class="top-sec">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="details-box">
                                            <div class="address-box">
                                                <ul>
                                                    <li>2345 Tail Ends Road,</li>
                                                    <li>ORADELL, New Jersey</li>
                                                    <li>NJ, 38740</li>
                                                </ul>
                                            </div>

                                            <div class="address-box">
                                                <ul>
                                                    <li class="theme-color">Issue Date : <span class="text-content">20
                                                            March, 2022</span></li>
                                                    <li class="theme-color">Invoice No : <span
                                                            class="text-content">904679</span></li>
                                                    <li class="theme-color">Email : <span
                                                            class="text-content">user@gmail.com</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-table">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Invoice Date:</th>
                                                <th>Invoice No:</th>
                                                <th>Account No:</th>
                                                <th>Due Amount:</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>27- Nove-2022</td>
                                                <td>AP 3746908</td>
                                                <td>3898409291</td>
                                                <td>$2797.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="invoice-table-2">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th class="text-start">Item detail</th>
                                                <th>Qty</th>
                                                <th>Price</th>
                                                <th>Amout</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-content">1</td>
                                                <td>
                                                    <ul class="text-start item-detail">
                                                        <li>Meatigo Premium Goat Curry</li>
                                                        <li class="text-content">Lorem ipsum dolor sit, amet,
                                                            consectetur adipisicing elit.
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>17</td>
                                                <td>$7.00</td>
                                                <td>$116.02</td>
                                            </tr>

                                            <tr>
                                                <td class="text-content">2</td>
                                                <td>
                                                    <ul class="text-start item-detail">
                                                        <li>Dates Medjoul Premium...</li>
                                                        <li class="text-content">Lorem ipsum dolor sit, amet,
                                                            consectetur adipisicing elit.
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>25</td>
                                                <td>$60.00</td>
                                                <td>$156.02</td>
                                            </tr>

                                            <tr>
                                                <td class="text-content">3</td>
                                                <td>
                                                    <ul class="text-start item-detail">
                                                        <li>Good Life Walnut Kernels...</li>
                                                        <li class="text-content">Lorem ipsum dolor sit, amet,
                                                            consectetur adipisicing elit.
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>18</td>
                                                <td>$10.00</td>
                                                <td>$144.02</td>
                                            </tr>

                                            <tr>
                                                <td class="text-content">4</td>
                                                <td>
                                                    <ul class="text-start item-detail">
                                                        <li>Apple Red Premium Imported</li>
                                                        <li class="text-content">Lorem ipsum dolor sit, amet,
                                                            consectetur adipisicing elit.
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>60</td>
                                                <td>$67.00</td>
                                                <td>$345.02</td>
                                            </tr>

                                            <tr>
                                                <td class="text-content">5</td>
                                                <td>
                                                    <ul class="text-start item-detail">
                                                        <li>Apple Red Premium Imported</li>
                                                        <li class="text-content">Lorem ipsum dolor sit, amet,
                                                            consectetur adipisicing elit.
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>17</td>
                                                <td>$45.00</td>
                                                <td>$365.02</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="price-box">
                                <ul>
                                    <li>GRAND TOTAL</li>
                                    <li class="theme-color">$325.00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="invoice-footer">
                            <div class="signature-box">
                                <img src="{{ asset('assets_client/images/sign.png') }}" class="img-fluid"
                                    alt="">
                                <h5>Authorised Sign</h5>
                            </div>

                            <div class="button-group">
                                <ul>
                                    <li>
                                        <button class="btn theme-bg-color text-white rounded"
                                            onclick="window.print();">Export As PDF</button>
                                    </li>
                                    <li>
                                        <button class="btn text-white print-button rounded ms-2"
                                            onclick="window.print();">Print</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
