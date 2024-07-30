<?php include "header.php"; ?>

<section class="invoice" id="iv_section">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">

                    <div class="invoice_header">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="#">
                                    <img src="img/logo_2.jpg" alt="Logo">
                                </a>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><strong>AdminDash Inc</strong></li>
                                    <li>47 Riverside, Suite 105-C</li>
                                    <li>California 78754</li>
                                    <li>VAT No. EU51140040</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="invoice_from">
                        <div class="row">
                            <div class="col-md-12">
                                <ul>
                                    <li><strong>Invoice</strong> #78754</li>
                                    <li><strong>Invoice Date:</strong> Monday, February 24th, 2023</li>
                                    <li><strong>Due Date:</strong> Thursday, March 2nd, 2023</li>
                                    <li><strong>Status:</strong> <a class="btn btn-sm">unpaid</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="invoice_to">
                        <div class="row">
                            <div class="col-md-12">
                                <ul>
                                    <li><strong>Invoice To</strong></li>
                                    <li>Richard Branson</li>
                                    <li>California 78754</li>
                                    <li>USA</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="invocie_table">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Description</th>
                                    <th scope="col" style="width:5%">Qty</th>
                                    <th scope="col" style="width:20%">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>4GB Cloud 2.0 Server (12/04/2022 - 01/03/2023)</td>
                                    <td>1</td>
                                    <td>$2,250</td>
                                </tr>
                                <tr>
                                    <td>Mobile App Design</td>
                                    <td>2</td>
                                    <td>$5,140</td>
                                </tr>
                                <tr>
                                    <td>Dashboard Design</td>
                                    <td>2</td>
                                    <td>$4,250</td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2"><strong>Sub Total:</strong></td>
                                    <td><strong>$11,640</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong>20% VAT:</strong></td>
                                    <td><strong>$2,305</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong>Credit:</strong></td>
                                    <td><strong>$00</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong>Total:</strong></td>
                                    <td><strong>$13,945</strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="invoice_footer">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Generated on Monday, November 24th, 2023</p>
                                <a href="#!">
                                    <span class="material-symbols-outlined">
                                        print
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>