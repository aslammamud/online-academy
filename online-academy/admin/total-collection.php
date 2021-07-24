

<?php include('header.php') ?>
<div class="content">
   <div class="container-fluid">
   
       <div class="row">
                   <div class="col-md-2 stat_box bg_green">
					<h2>00</h2>
					<p>Today Collection</P>
					    </div>
				 <div class="col-md-2 stat_box bg_green">
					<h2>00</h2>
					<p>Monthly Collection</P>
					    </div>
						<div class="col-md-2 stat_box bg_green">
					<h2>00</h2>
					<p>Total Collection</P>
					    </div>
						<div class="col-md-2 stat_box bg_pending">
					<h2>00</h2>
					<p>Monthly Expense</P>
					    </div>
						<div class="col-md-2 stat_box bg_green">
					<h2>00</h2>
					<p>Net Collection (Apr)</P>
					    </div>
						<div class="col-md-2 stat_box bg_pending">
					<h2>00</h2>
					<p>Due Payment</P>
					    </div>
						<div class="col-md-2 stat_box bg_pending">
					<h2>00</h2>
					<p>Total Expense</P>
					    </div>
						<div class="col-md-2 stat_box bg_green">
					<h2>00</h2>
					<p>NET TOTAL ACCOUNTS</P>
					    </div>
						<div class="col-md-2 stat_box bg_green">
					<h2>00</h2>
					<p>Certificate collection</P>
					    </div>
						
	</div>
   
      <div class="row">
         <div class="col-9" style="margin:0 auto;">
            <div class="card">
               <div class="card-body">
                  <div class="pt-30 pl-60 pr-60">
                     <div class="row">
                        <div class="col-md-12 p-3 text-white bg-info ">
                           <form class="form-inline" method="post" name="searchfrm">
                              <div class="form-group"><input type="text" placeholder="REG NO" name="REG_no" class="form-control"> </div>
                              <div class="form-group">  <input type="text" placeholder="Mobile Number" name="Mobile" class="form-control"> 
                                 <input type="text" placeholder="Student Name" name="Student_Name" class="form-control"> 
                                 <input type="text" placeholder="Batch Number" name="Batch_Number" class="form-control">
                              </div>
                              <input type="submit" name="subserch" class="btn btn-secondary  btn-transparent btn-theme-colored btn-lg btn-flat" value="Search">
                              <input type="submit" name="subtodayserch" class="btn btn-success btn-transparent btn-theme-colored btn-lg btn-flat" value="Today">
                           </form>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 p-3 text-white bg-dark  ">
                           <form class="form-inline" method="post" name="searchfrm">
                              <div class="form-group">
                                 <select name="serch_day" class="form-control">
                                    <option value=""> Select Day</option>
                                    <option value="01">1</option>
                                    <option value="02">2</option>
                                    <option value="03">3</option>
                                    <option value="04">4</option>
                                    <option value="05">5</option>
                                    <option value="06">6</option>
                                    <option value="07">7</option>
                                    <option value="08">8</option>
                                    <option value="09">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                 </select>
                                 <select name="serch_month" class="form-control">
                                    <option value=""> Select Month</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                 </select>
                                 <select name="serch_year" class="form-control">
                                    <option value="2020"> 2020</option>
                                    <option value="2021"> 2021</option>
                                 </select>
                              </div>
                              &nbsp;<input type="submit" name="Searchdate" class="btn btn-info btn-transparent btn-theme-colored btn-lg btn-flat" value="Search">
                           </form>
                        </div>
                     </div>
                     <div data-example-id="hoverable-table" class="bs-example">
                        <br>
                        <table class="table table-hover table-striped">
                           <thead class="thead-dark">
                              <tr>
                                 <th>ID</th>
                                 <th>Name</th>
                                 <th>Date</th>
                                 <th>Course Name</th>
                                 <th>Mobile Number</th>
                                 <th>Paid Amount</th>
                                 <th>Status</th>
                                 <th>Ref.</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">2401</th>
                                 <th scope="row">Mohammad Alamim<br>REG:14499</th>
                                 <td>2021-04-05</td>
                                 <td>Data entry</td>
                                 <td>01723879885</td>
                                 <td><span style="color:green;">500</span>
                                    <a href="https://www.online.pixelitinst.com/dashboard/edit-payment-log.php?plid=2401" class="badge p-1 badge-info">Edit</a>
                                    <a href="https://www.online.pixelitinst.com/dashboard/delete-payment-log.php?plid=2401" class="badge p-1 badge-danger">Delete</a>
                                 </td>
                                 <td><span class="badge p-1 badge-info">FullPaid</span></td>
                                 <td>Raihanahammed</td>
                                 <td>
                                    <button type="button" class="btn btn-dark btn-transparent btn-theme-colored btn-sm" data-toggle="modal" data-target=".bs-example-modal-lg-14499">View Details</button>
                                    <a href="https://www.online.pixelitinst.com/dashboard/invoice.php?st=5099" class="btn btn-dark btn-transparent btn-theme-colored btn-sm">Invoice</a>
                                    <a href="https://www.online.pixelitinst.com/dashboard/download-form.php?st=5099" class="btn btn-dark btn-transparent btn-theme-colored btn-sm">Download Form</a>
                                    <a href="https://www.online.pixelitinst.com/dashboard/edit-invoice.php?st=5099" class="btn btn-success  btn-sm">Payment</a>
                                    <div class="modal fade bs-example-modal-lg-14499" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                       <div class="modal-dialog modal-lg">
                                          <div data-example-id="contextual-table" style="background: #FFF;
                                             margin: 0 auto;
                                             border-top: 5px solid #51504d;
                                             border-radius: 4px;" class="bs-example col-md-8 col-md-push-2">
                                             <h3 style="text-align:center;">Digital IT Online Students</h3>
                                             <br>
                                             <table class="table ">
                                                <tbody>
                                                   <tr class="active">
                                                      <th scope="row">Full Name:		
                                                      </th>
                                                      <td>Mohammad Alamim</td>
                                                      <th scope="row">Phone:</th>
                                                      <td>01723879885</td>
                                                   </tr>
                                                   <tr>
                                                      <th scope="row">Registration: 
                                                      </th>
                                                      <td>14499</td>
                                                      <th scope="row">Payment :</th>
                                                      <td><span class="label"><span class="badge p-1 badge-success btn-sm">Paid</span></span></td>
                                                   </tr>
                                                   <tr class="success">
                                                      <th scope="row">Course Name: </th>
                                                      <td>Data entry</td>
                                                      <th scope="row">Date of Birth :</th>
                                                      <td></td>
                                                   </tr>
                                                   <tr class="active">
                                                      <th scope="row">Batch No:</th>
                                                      <td>128</td>
                                                      <th scope="row">Reference:</th>
                                                      <td>Raihanahammed</td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                             <table class="table table-bordered">
                                                <tbody>
                                                   <tr class="table-success ">
                                                      <td>Log</td>
                                                      <td>Amount</td>
                                                      <td>Date</td>
                                                   </tr>
                                                   <tr>
                                                      <td>Paid (500) Note (Paid By Nagat (9885) to 01714298469)</td>
                                                      <td>500</td>
                                                      <td>2021-04-05</td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                             <div class="row">
                                                <div class="col-sm-6">
                                                   <a href="download-form.php?st=5099" target="_blank" class="btn btn-block btn-success btn-theme-colored btn-sm mt-20 pt-10 pb-10">
                                                   DOWNLOAD FORM</a>
                                                </div>
                                                <div class="col-sm-6">
                                                   <a href="invoice.php?st=5099" target="_blank" class="btn btn-block btn-info btn-theme-colored btn-sm mt-20 pt-10 pb-10">
                                                   VIEW INVOICE</a>
                                                </div>
                                             </div>
                                             <br>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="text-center">
                        <h2 style="color:#28a745 ;">Total Collection - 108900.TK</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include('footer.php') ?>

