<div class="row ">
		<h3 class="sep_title">LIVE ONLINE COURSE STATS</h3>
                    <div class="col-md-2 stat_box bg_green">
					<h2><?php echo $stadm_today = student_count_author($_SESSION['abca_sa_user_id'],'today_admission') ;
													//$stadm_today_persent = round($stadm_today*100/$stmax);
													?></h2>
					<p>Today Admission</P>
					    </div>
						
						 <div class="col-md-2 stat_box bg_purple">
					<h2><?php echo $stadm_today_form = student_count_author($_SESSION['abca_sa_user_id'],'today_form') ;
													//$stadm_today_form_persent = round($stadm_today_form*100/$stmax);
													?></h2>
					<p>Today Form</P>
					    </div>
						
						 <div class="col-md-2 stat_box bg_pending">
					<h2><?php echo $stadm_today_form = student_count_author($_SESSION['abca_sa_user_id'],'admission_this_month') ;
													//$stadm_today_form_persent = round($stadm_today_form*100/$stmax);
													?></h2>
					<p>Monthly Admission</P>
					    </div>
						
						 <div class="col-md-2 stat_box bg_lime">
					<h2><?php echo  $stadm_tot_adm = student_count_author($_SESSION['abca_sa_user_id'],'all') ;
													//$stadm_tot_adm_persent = round($stadm_tot_adm*100/$stmax);
													?></h2>
					<p>Total Admission</P>
					    </div>
						 <div class="col-md-2 stat_box bg_grey">
					<h2>00</h2>
					<p>This Month Admission</P>
					    </div>
                 </div>
