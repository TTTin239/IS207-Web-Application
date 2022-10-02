</div>
<footer class="footer">
<div class="container bottom_border">
<div class="row">
<div class=" col-sm-4 col-md col-sm-4  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Địa chỉ</h5>
<!--headin5_amrc-->
<!-- <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p> -->
<p><i class="fa fa-building">Công ty Cổ phần Watch Store</i></p>
<p><i class="fa fa-location-arrow"></i> Store 1: Khu phố 6, phường Linh Trung, Thủ Đức, TP.Hồ Chí Minh </p>
<p><i class="fa fa-location-arrow"></i> Store 2:  90 Lê Văn Sỹ, P11, Phú Nhuận, TP.Hồ Chí Minh </p>



</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">VỀ WATCH STORE</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="about.php">Giới thiệu Watch Store</a></li>
<li><a href="contact.php">Điều khoản sử dụng</a></li>
<li><a href="contact.php">Chính sách bảo mật</a></li>
<li><a href="contact.php">Chính sách giải quyết khiếu nại</a></li>
<li><a href="contact.php">Chính sách bảo mật thanh toán</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">TÀI KHOẢN CỦA TÔI</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
    <li><a href="login.php">Đăng kí</a></li>
    <li><a href="cart.php">Xem giỏ hàng</a></li>
    <li><a href="wishlist.php">Sản phẩm yêu thích</a></li>
    <li><a href="profile.php">Chi tiết tài khoản</a></li>
    <li><a href="contact.php">Liên hệ</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Hỗ trợ</h5>
<!--headin5_amrc ends here-->

<ul class="footer_ul2_amrc">
<p><i class="fa fa-phone"></i> Tổng đài hỗ trợ 0912345678  </p>
<p><i class="fa fa fa-envelope"></i> info@watchstore.com  </p></ul>
<!--footer_ul2_amrc ends here-->
</div>
</div>
</div>


<!-- <div class="container">
<ul class="foote_bottom_ul_amrc">
<li><a href="http://webenlance.com">Home</a></li>
<li><a href="http://webenlance.com">About</a></li>
<li><a href="http://webenlance.com">Services</a></li>
<li><a href="http://webenlance.com">Pricing</a></li>
<li><a href="http://webenlance.com">Blog</a></li>
<li><a href="http://webenlance.com">Contact</a></li>
</ul> -->
<!--foote_bottom_ul_amrc ends here-->
<p class="text-center">Copyright @2022 | Designed With by <a href="#">Watch Store</a></p>

<ul class="social_footer_ul">
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
</ul>
<!--social_footer_ul ends here-->
</div>

</footer>


<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->


<script type="text/javascript">
			$(document).ready(function() {
				/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/

				$().UItoTop({
					easingType: 'easeOutQuart'
				});

			});
		</script>
		<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
		<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
			$(function() {
				SyntaxHighlighter.all();
			});
			$(window).load(function() {
				$('#banner_flexslider').flexslider({
					animation: "fade",
					animationSpeed: 3000,
					// itemWidth: 800,
					start: function(slider) {
						$('body').removeClass('loading');
					}
				});
			});
		</script>
</body>

</html>