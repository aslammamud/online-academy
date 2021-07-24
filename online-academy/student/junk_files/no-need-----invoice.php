<?php
  include ('student-panel-header.php');
?>

<section class="purchase-history-list-area my-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <div style="margin-left:auto;margin-right:auto;">
                    <link href="http://demo.academy-lms.com/default/assets/frontend/elegant/css/print.css" rel="stylesheet">
                    <div style="background: #eceff4;padding: 1.5rem;">
                        <table class="w-100">
                            <tbody><tr>
                                <td>
                                    <h1 class="text-info">abcAcademy</h1>
                                    <!-- <img src="http://demo.academy-lms.com/default/uploads/system/logo-dark.png" height="40" style="display:inline-block;"> -->
                                </td>
                                <td style="font-size: 22px;" class="text-right strong">INVOICE</td>
                            </tr>
                        </tbody></table>
                        <table class="w-100">
                            <tbody><tr>
                                <td style="font-size: 1.2rem;" class="strong">Academy</td>
                                <td class="text-right"></td>
                            </tr>
                            <tr>
                                <td class="gry-color small">academy@example.com</td>
                                <td class="text-right"></td>
                            </tr>
                            <tr>
                                <td class="gry-color small">Sydeny, Australia</td>
                                <td class="text-right small"><span class="gry-color small">Payment method:</span> <span class="strong">Paypal</span></td>
                            </tr>
                            <tr>
                                <td class="gry-color small">Phone: +143-52-9933631</td>
                                <td class="text-right small"><span class="gry-color small">Purchase date:</span> <span class=" strong">Wed, 10-Mar-2021</span></td>
                            </tr>
                        </tbody></table>

                    </div>

                    <div style="border-bottom:1px solid #eceff4;margin: 0 1.5rem;"></div>
                    <div style="padding: 1.5rem;">
                        <table>
                            <tbody><tr><td class="strong small gry-color">Bill to:</td></tr>
                            <tr><td class="strong">Signe Thompson</td></tr>
                            <tr><td class="gry-color small">Email: student@example.com</td></tr>
                        </tbody></table>
                    </div>
                    <div style="">
                        <table class="padding text-left small border-bottom w-100">
                            <thead>
                                <tr class="gry-color" style="background: #eceff4;">
                                    <th width="50%">Course name</th>
                                    <th width="15%" style="padding-left : 10px;">Category</th>
                                    <th width="15%">Instructor</th>
                                    <th width="20%" class="text-right">Total</th>
                                </tr>
                            </thead>
                            <tbody class="strong">
                                <tr class="">
                                    <td>User Experience Design Essentials - Adobe XD UI UX Design</td>
                                    <td class="gry-color" style="padding-left : 10px;">User Experience Design</td>
                                    <td class="gry-color">John Doe</td>
                                    <td class="text-right">$12</td>
                                </tr>
                                <tr class="">
                                    <td></td>
                                    <td class="gry-color"></td>
                                    <td class="gry-color"> <strong>Sub total:</strong> </td>
                                    <td class="text-right"><strong>$12</strong></td>
                                </tr>
                                <tr class="">
                                    <td></td>
                                    <td class="gry-color"></td>
                                    <td class="gry-color strong"><strong>Grand total</strong>:</td>
                                    <td class="text-right"><strong>$12</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-print-none mb-2">
            <a href="javascript:window.print()" class="btn btn-receipt float-right mt-2">Print</a>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>

