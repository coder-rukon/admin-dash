<?php include "header.php"; ?>

<section class="invoice_table">

    <div class="row">

        <div class="col-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="widget_title">Invoice Table</h5>
                    <div class="basic_table">
                        <table class="table">
                            <thead>
                                <tr class="table-active">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Invoice No.</th>
                                    <th scope="col">Invoice Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Brat Lee</td>
                                    <td>78754</td>
                                    <td>24/02/2023</td>
                                    <td><a class="btn btn-sm unpaid">unpaid</a></td>
                                    <td>
                                        <a href="/admin_dash/invoice_details.php" class="btn btn-outline-warning">View</a>
                                        <a href="#!" class="btn btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>John Waz</td>
                                    <td>88903</td>
                                    <td>23/02/2023</td>
                                    <td><a class="btn btn-sm paid">paid</a></td>
                                    <td>
                                        <a href="/admin_dash/invoice_details.php" class="btn btn-outline-warning">View</a>
                                        <a href="#!" class="btn btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Jeneffer Leo</td>
                                    <td>59830</td>
                                    <td>22/02/2023</td>
                                    <td><a class="btn btn-sm paid">paid</a></td>
                                    <td>
                                        <a href="/admin_dash/invoice_details.php" class="btn btn-outline-warning">View</a>
                                        <a href="#!" class="btn btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Richard Branson</td>
                                    <td>10287</td>
                                    <td>21/02/2023</td>
                                    <td><a class="btn btn-sm unpaid">unpaid</a></td>
                                    <td>
                                        <a href="/admin_dash/invoice_details.php" class="btn btn-outline-warning">View</a>
                                        <a href="#!" class="btn btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Devid Walton</td>
                                    <td>62073</td>
                                    <td>20/02/2023</td>
                                    <td><a class="btn btn-sm paid">paid</a></td>
                                    <td>
                                        <a href="/admin_dash/invoice_details.php" class="btn btn-outline-warning">View</a>
                                        <a href="#!" class="btn btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>James Falid</td>
                                    <td>98342</td>
                                    <td>19/02/2023</td>
                                    <td><a class="btn btn-sm paid">paid</a></td>
                                    <td>
                                        <a href="/admin_dash/invoice_details.php" class="btn btn-outline-warning">View</a>
                                        <a href="#!" class="btn btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
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
                </div>
            </div>
        </div>

    </div>
</section>

<?php include "footer.php"; ?>