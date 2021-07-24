<style>
    @media only screen and (max-width: 575.98px){
        .icon-bar {
            display:none;
        }
        
    }
    
</style>

<!-- The social media icon bar -->
<div class="icon-bar">
  <a href="#" class="live-traffic myfont"><p id="traffics" class="trafficnum">0</p><p>লাইভ ট্রাফিক</p></a>
  <a href="#" class="cart"><span class="itm">0</span><i class="fa fa-shopping-cart"></i></a>
  <a href="#" class="login"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
</div>


<script>
var myVar = setInterval(myTimer, 9000);

function myTimer() {
  var d = Math.floor(Math.random() * (40-15)+1) + 15;
  document.getElementById("traffics").innerHTML = d;
}
</script>
