@extends('client.layouts.main')
@section('title', 'Liên hệ')
@section('content')
		<!-- main -->
		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<h3>Thôn tin liên hệ</h3>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location"></i></span> Số nhà B8A ngõ 18 đường Võ Văn Dũng -
									Hoàng Cầu - Đống Đa - Hà
									Nội</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://0988 550 553">0988 550 553</a>
								</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a
										href="mailto:info@yoursite.com">info@yoursite.com</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="/">http://vietpro.edu.vn</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1">
						<div class="contact-wrap">
							<h3>Liên hệ</h3>
							<form action="#">
								<div class="row form-group">
									<div class="col-md-12 padding-bottom">
										<label for="fname">Họ & Tên</label>
										<input type="text" id="fname" class="form-control" placeholder="Họ và tên">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label for="email">Email</label>
										<input type="text" id="email" class="form-control"
											placeholder="Email của bạn">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label for="subject">Chủ đề</label>
										<input type="text" id="subject" class="form-control" placeholder="Nhập chủ đề">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label for="message">Lời nhắn</label>
										<textarea name="message" id="message" cols="30" rows="10" class="form-control"
											placeholder="Nói gì đó cho chúng tôi"></textarea>
									</div>
								</div>
								<div class="form-group text-center">
									<input type="submit" value="Gửi liên hệ" class="btn btn-primary">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="map" class="colorlib-map"></div>
		<!-- end main -->
		<!-- subscribe -->
		<div id="colorlib-subscribe">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-6 text-center">
							<h2><i class="icon-paperplane"></i>Đăng ký nhận bản tin</h2>
						</div>
						<div class="col-md-6">
							<form class="form-inline qbstp-header-subscribe">
								<div class="row">
									<div class="col-md-12 col-md-offset-0">
										<div class="form-group">
											<input type="text" class="form-control" id="email"
												placeholder="Nhập email của bạn">
											<button type="submit" class="btn btn-primary">Đăng ký</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end  subscribe -->
		<!-- footer -->
		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>Giới thiệu</h4>
						<p>VIETPRO STORE cửa hàng kinh doanh quần áo luôn mang tới sự hài lòng cho khách hàng về chất
							lượng sản phẩm, quần
							áo đều mang thương hiệu made in Việt Nam đẹp cả về kiểu cách lẫn chất lượng, nên sẽ giúp cho
							bạn trở nên xinh
							đẹp hơn..</p>
						<p>
							<ul class="colorlib-social-icons">
							
								<li><a href="https://www.facebook.com/vietpro.edu/"><i class="icon-facebook"></i></a></li>
								
								<li><a href="https://www.youtube.com/channel/UCLjRjXUSy3g9iKRWTyw75Nw"><i class="icon-youtube"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Chăm sóc khách hàng</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Liên hệ </a></li>
								<li><a href="#">Giao hàng/ Đổi hàng</a></li>
								<li><a href="#">Mã giảm giá</a></li>
								<li><a href="#">Sản phẩm yêu thích</a></li>
								<li><a href="#">Đặc biệt</a></li>
							
							
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Thông tin</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Về chúng tôi</a></li>
								<li><a href="#">Thông tin vận chuyển</a></li>
								<li><a href="#">Chính sách bảo mật</a></li>
								<li><a href="#">Hỗ trợ</a></li>

							</ul>
						</p>
					</div>



					<div class="col-md-4">
						<h4>Thông tin liên hệ</h4>
						<ul class="colorlib-footer-links">
							<li>Số nhà B8A ngõ 18 đường Võ Văn Dũng - Hoàng Cầu - Đống Đa - Hà Nội</li>
							<li><a href="tel://1234567920">0988 550 553</a></li>
							<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li><a href="/">http://vietpro.edu.vn</a></li>
						</ul>
					</div>
				</div>
			</div>

@endsection

@push('js')
		<script>
			$(document).ready(function () {
				var quantitiy = 0;
				$('.quantity-right-plus').click(function (e) {
					// Stop acting like a button
					e.preventDefault();
					// Get the field name
					var quantity = parseInt($('#quantity').val());
					// If is not undefined
					$('#quantity').val(quantity + 1);
					// Increment
				});
				$('.quantity-left-minus').click(function (e) {
					// Stop acting like a button
					e.preventDefault();
					// Get the field name
					var quantity = parseInt($('#quantity').val());
					if (quantity > 0) {
						$('#quantity').val(quantity - 1);
					}
				});
			});
		</script>
@endpush