<script>
function closealert()
{ 
   document.getElementById('alertmessage').style.display = 'none';
}
</script>


<footer class="footer">
   <div class="footer-top">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12 col-sm-3 col-lg-3 col-md-6">
               <div class="footer-widget footer-about">
                  <div class="footer-logo"><img src="images/ecourse-logo.png" alt="logo"></div>
                  <div class="footer-about-content">
                     <p class="abc_normal_text">এবিসি একাডেমি বাংলাদেশের একমাত্র অনলাইন লাইভ লার্নিং এবং ভিডিও কোর্স সেলিং ফ্লাটফর্ম।  আমাদের উদ্দেশ্য   বাংলাদেশের মানুষের প্রয়োজনীয় দক্ষতা অর্জনের সহায়তা করা।  নিজে শিখবো অপরকে শিখাবো এই স্লোগান এর মাধ্যমে আমাদের যাত্রা শুরু হয় ।  ডিজিটাল প্রযুক্তি ব্যবহার করে বাংলাদেশকে ডিজিটাল বাংলাদেশ গড়ার লক্ষে নিয়োজিত একটি প্রতিষ্ঠান । </p>
                     <div class="social-icon">
                        <ul>
                           <li><a href="#" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                           <li><a href="#" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                           <li><a href="#" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                           <li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           <li><a href="#" target="_blank"><i class="fa fa-dribbble" aria-hidden="true"></i> </a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
			<div class="col-6 col-sm-3 col-lg-2 col-md-6">
               <div class="footer-widget footer-menu">
                  <h2 class="footer-title myfont">একাডেমি</h2>
                  <ul>
                     <li class="abc_normal_text"><a href="our-team.php">আমাদের টীম</a></li>
					 <li class="abc_normal_text"><a href="#">ফ্রি কোর্স </a></li>                     
					 <li class="abc_normal_text"><a href="student-feedback.php">আমাদের স্টুডেন্ট ফিডব্যাক</a></li>
                     <li class="abc_normal_text"><a href="#">সার্টিফিকেট ভেরিফিকেশন</a></li>
                     <li class="abc_normal_text"><a href="#">স্কলারশিপ এর জন্য আবেদন</a></li>
                    <?php
                     if($page == "home"){
                         echo '<li class="abc_normal_text"><a href="instructor/login.php">ইন্সট্রাক্টর হলে লগিন করুন</a></li>';                         
                         echo '<li class="abc_normal_text"><a href="instructor/signup.php">ইন্সট্রাক্টর হিসেবে যোগ দিন</a></li>';
                     }else if($page == "instructor"){
                         echo '<li class="abc_normal_text"><a href="login.php">ইন্সট্রাক্টর হলে লগিন করুন</a></li>';
                         echo '<li class="abc_normal_text"><a href="signup.php">ইন্সট্রাক্টর হিসেবে যোগ দিন</a></li>';
                     }else{
                         echo '<li class="abc_normal_text"><a href="login.php">ইন্সট্রাক্টর হলে লগিন করুন</a></li>';
                     }
                     ?>
                     
                     
					 <li class="abc_normal_text"><a href="premium-group.php">প্রিমিয়াম ব্লগ</a></li>
                     <li class="abc_normal_text"><a href="video-feedback.php">প্রিমিয়াম ভিডিও</a></li>
                     <li class="abc_normal_text"><a href="partnership.php">পার্টনারশিপ </a></li>
                     
                  </ul>
               </div>
            </div>
            <div class="col-6 col-sm-3 col-lg-2 col-md-6">
               <div class="footer-widget footer-menu">
                  <h2 class="footer-title myfont">গাইডলাইন</h2>
                  <ul>
                     <li class="abc_normal_text"><a href="how-buy-course.php">কিভাবে কোর্স কিনবেন ?</a></li>
                     <li class="abc_normal_text"><a href="payment.php">কিভাবে পেমেন্ট করবেন ?</a></li>
                     <li class="abc_normal_text"><a href="how-instructor.php">কিভাবে ইন্সট্রাক্টর হবেন ?</a></li>
                     <li class="abc_normal_text"><a href="read-blog.php">কিভাবে ব্লগ পড়বেন ?</a></li>
                     <li class="abc_normal_text"><a href="how-give-exam.php">কিভাবে পরীক্ষা দিবেন ?</a></li>
                     <li class="abc_normal_text"><a href="#">অনলাইন লাইভ কোর্স</a></li>
                     <li class="abc_normal_text"><a href="#">লাইভ কোড এডিটর</a></li>
                      <li class="abc_normal_text"><a href="question.php">প্রশ্ন এবং উত্তর </a></li>
                  </ul>
               </div>
            </div>
			<div class="col-6 col-sm-3 col-lg-2 col-md-6">
               <div class="footer-widget footer-menu">
                  <h2 class="footer-title myfont">প্রয়োজনীয় লিংক</h2>
                  <ul>
                     <li class="abc_normal_text"><a href="#">এফিলিয়েটেড ইনস্টিটিউট</a></li>
                     <li class="abc_normal_text"><a href="about-us.php">আমাদের সম্পর্কে</a></li>
                       <li class="abc_normal_text"><a href="career.php">ক্যারিয়ার</a></li>
                     <li class="abc_normal_text"><a href="#">যোগাযোগ ফর্ম</a></li>
                     <li class="abc_normal_text"><a href="#">গোপনীয়তা নীতি</a></li>
                     <li class="abc_normal_text"><a href="#">ব্যবহারের শর্তাবলী</a></li>
                     <li class="abc_normal_text"><a href="#">হেল্প এবং সাপোর্ট</a></li>
                     <li class="abc_normal_text"><a href="https://www.facebook.com/groups/121432209931183">ফেইসবুক গ্রুপ </a></li>
                   
                  </ul>
               </div>
            </div>
            <div class="col-6 col-sm-3 col-lg-3 col-md-6">
               <div class="footer-widget footer-contact">
                  <h2 class="footer-title myfont">যোগাযোগ করুন</h2>
                  <div class="footer-contact-info">
                     <div class="footer-address">
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <p class="abc_normal_text"> ধানমন্ডি ২৭ , <br> ঢাকা ১২০৯ , বাংলাদেশ </p>
                     </div>
                     
                        <div class="footer-address">
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <p class="abc_normal_text"> মিরপুর ওয়েস্ট কাফরুল , ঢাকা , <br> ঢাকা ১২০6 , বাংলাদেশ </p>
                     </div>
                     
                     <p><i class="fa fa-mobile" aria-hidden="true"></i>০১৬৮১ ৫৩৯৩২৪ / ০১৭৫১ ৭৯২৬৬৮</p>
                     <p class="mb-0"><i class="fa fa-envelope" aria-hidden="true"></i>info@abcacademy.net</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="footer-bottom">
      <div class="container-fluid">
         <div class="copyright">
            <div class="row">
               <div class="col-12 text-center">
                  <div class="copyright-text">
                     <p class="mb-0">© 2021 ABC Academy, All Rights Resereved </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

	<script type="text/javascript">
    	$(document).ready(function(){
    	    
	    // Send cart course details in the server

        $(".addItemBtn").click(function(e) {
          e.preventDefault();
          var $form = $(this).closest(".form-submit");
          var ins_mc_id = $form.find(".ins_mc_id").val();
        
          $.ajax({
        	url: 'cart-action.php',
        	method: 'post',
        	data: {
        	  ins_mc_id: ins_mc_id,
        	},
        	success: function(response) {
        	  $("#message").html(response);
        	  //window.scrollTo(0, 0);
        	  load_cart_item_number();
        	  //load_return_cart_items();
        	}
          });
        });
        
        // Load total no.of items added in the cart and display in the navbar
        
        load_cart_item_number();
        //load_return_cart_items();
        
        function load_cart_item_number() {
          $.ajax({
        	url: 'cart-action.php',
        	method: 'get',
        	data: {
        	  cartItem: "cart_item"
        	},
        	success: function(response) {
        	  $(".cart-total").html(response);
        	}
          });
        }
        
        /*function load_return_cart_items() {
          $.ajax({
        	url: 'cart-action.php',
        	method: 'get',
        	data: {
        	  returnitems: "returnitems"
        	},
        	success: function(response) {
        	  $("#cart-items-return").html(response);
        	}
          });
        }*/
        
            
      $('.item_delete_button').click(function (e){
          e.preventDefault(e);
        var deletename =  $(this).closest("tr").find('.item_delete_name').val();
        var deleteid = $(this).closest("tr").find('.item_delete_id').val();
        var column = $(this).closest("tr").find('.item_column').val();
        var table = $(this).closest("tr").find('.item_table').val();
        
        console.log(deletename);
        console.log(deleteid);
        console.log(column);
        console.log(table);
          
          swal({
		  title: "Are you sure?",
		  text: deletename + " will be removed permanently!",
		  icon: "warning",
		  buttons: true,
		  dangerMode: true,
		})
		.then((willDelete) => {
		  if (willDelete) {
		      
		       $.ajax({
            	type: 'POST',
            	url: 'item-remover.php',
            	data: {
            	  "del_item_set": 1,
            	  "id": deleteid,
            	  "column": column,
            	  "table": table
            	},
            	success: function(response) {
            	  swal(deletename + " has been removed!", {
        			  icon: "success",
        			  
        			}).then((result) => {
        			    location.reload();
        			});
            	}
              });

		  } 
		});
	});

    	});
	</script>
	
	
	
<!-- 

<script>
jQuery(document).ready(function(){
    


});
</script>
-->

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-R6PLTVFVPD');
</script>
</footer>
</body>
</html>