</section>
	
<!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2017 Admin Panel. All rights reserved | FirstEnquiry </p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/jquery.scrollTo.js"></script>


<script>
$(document).ready(function() {
   //toggling buttons notfic bar taskbars
var refresh1=setInterval(function(){

$("#sortlistedcontent").load("content1.php");$("#mailcontent").load("mail.php");$("#content").load("time.php");$("#content3").load("date.php");
},1000);
   if($.trim($("#taskno1").text())=="0"){
   	$(".taskheader1,.pending1").css("visibility","hidden");
   	$(".extended1").css({"background":"#2D6769","color":"#fff","margin":"0 -10px"})
   }else{
   	   	$(".taskheader1,.pending1").css("visibility","visible");

   }
   if($.trim($("#taskno2").text())=="0"){
   	$(".taskheader2,.pending2").css("visibility","hidden");
   	$(".extended2").css({"background":"#2D6769","color":"#fff","margin":"0 -10px"})
   }else{
   	   	$(".taskheader2,.pending2").css("visibility","visible");
   }
   
  
});

	
	</script>
	<!--dig clock script-->
	<script>
	$(document).ready(function(){
	
});

		
	</script>

</body>
</html>
