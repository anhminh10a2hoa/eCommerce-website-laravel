@extends('client.layouts.main')
@section('title', 'Trang chủ')
@section('content')
		<!-- main -->
		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-md-push-3">


						<div class="row row-pb-lg">
							@forelse ($products as $product)
									<div class="col-md-4 text-center">
										<div class="product-entry">
											<div class="product-img" style="background-image: url(/assets/client/images/quan-kaki-do-man-qk162-8273.jpg);">
									
												<div class="cart">
													<p>
														<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span>
														<span><a href="/san-pham/{{ $product->id }}"><i class="icon-eye"></i></a></span>
									
									
													</p>
												</div>
											</div>
											<div class="desc">
												<h3><a href="/san-pham/{{ $product->id }}">{{ $product->name }}</a></h3>
												<p class="price"><span>{{ number_format($product->price) }} đ</span></p>
											</div>
										</div>
									</div>
							@empty
								Không có sản phẩm nào
							@endforelse
							
						</div>

						{{-- <div class="row row-pb-lg">
							<div class="col-md-4 text-center">
								<div class="product-entry">
									<div class="product-img" style="background-image: url(/assets/client/images/quan-kaki-do-man-qk162-8273.jpg);">

										<div class="cart">
											<p>
												<span class="addtocart"><a href="cart.html"><i
															class="icon-shopping-cart"></i></a></span>
												<span><a href="detail.html"><i class="icon-eye"></i></a></span>


											</p>
										</div>
									</div>
									<div class="desc">
										<h3><a href="detail.html">Quần kaki đỏ man</a></h3>
										<p class="price"><span>3.000.000 đ</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="product-entry">
									<div class="product-img" style="background-image: url(/assets/client/images/quan-kaki-nauqk178-10366.jpg);">

										<div class="cart">
											<p>
												<span class="addtocart"><a href="cart.html"><i
															class="icon-shopping-cart"></i></a></span>
												<span><a href="detail.html"><i class="icon-eye"></i></a></span>


											</p>
										</div>
									</div>
									<div class="desc">
										<h3><a href="detail.html">Quần kaki Nâu </a></h3>
										<p class="price"><span>3.000.000 đ</span>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="product-entry">
									<div class="product-img" style="background-image: url(/assets/client/images/quan-kaki-xam-chuot-dam-qk171-9770.jpg);">

										<div class="cart">
											<p>
												<span class="addtocart"><a href="cart.html"><i
															class="icon-shopping-cart"></i></a></span>
												<span><a href="detail.html"><i class="icon-eye"></i></a></span>


											</p>
										</div>
									</div>
									<div class="desc">
										<h3><a href="detail.html">Quần kaki xám</a></h3>
										<p class="price"><span>3.000.000 đ</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="product-entry">
									<div class="product-img" style="background-image: url(/assets/client/images/quan-kaki-xanh-den-qk171-9771.jpg);">
										<div class="cart">
											<p>
												<span class="addtocart"><a href="cart.html"><i
															class="icon-shopping-cart"></i></a></span>
												<span><a href="detail.html"><i class="icon-eye"></i></a></span>


											</p>
										</div>
									</div>
									<div class="desc">
										<h3><a href="detail.html">Quần kaki xanh đen</a></h3>
										<p class="price"><span>3.000.000 đ</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="product-entry">
									<div class="product-img" style="background-image: url(/assets/client/images/ao-so-mi-ca-ro-xam-xanh-asm1228-10199.jpg);">

										<div class="cart">
											<p>
												<span class="addtocart"><a href="cart.html"><i
															class="icon-shopping-cart"></i></a></span>
												<span><a href="detail.html"><i class="icon-eye"></i></a></span>


											</p>
										</div>
									</div>
									<div class="desc">
										<h3><a href="detail.html">Áo sơ mi ca rô xám xanh</a></h3>
										<p class="price"><span>3.000.000 đ</span> </p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="product-entry">
									<div class="product-img" style="background-image: url(/assets/client/images/ao-so-mi-hoa-tiet-den-asm1223-10191.jpg);">

										<div class="cart">
											<p>
												<span class="addtocart"><a href="cart.html"><i
															class="icon-shopping-cart"></i></a></span>
												<span><a href="detail.html"><i class="icon-eye"></i></a></span>


											</p>
										</div>
									</div>
									<div class="desc">
										<h3><a href="detail.html">Áo hoạ tiết đen</a></h3>
										<p class="price"><span>3.000.000 đ</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="product-entry">
									<div class="product-img" style="background-image: url(/assets/client/images/ao-so-mi-trang-kem-asm836-8193.jpg);">
										<div class="cart">
											<p>
												<span class="addtocart"><a href="cart.html"><i
															class="icon-shopping-cart"></i></a></span>
												<span><a href="detail.html"><i class="icon-eye"></i></a></span>


											</p>
										</div>
									</div>
									<div class="desc">
										<h3><a href="detail.html">Áo trắng kẻ vằn</a></h3>
										<p class="price"><span>3.000.000 đ</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="product-entry">
									<div class="product-img" style="background-image: url(/assets/client/images/6ds19c007.jpg);">

										<div class="cart">
											<p>
												<span class="addtocart"><a href="cart.html"><i
															class="icon-shopping-cart"></i></a></span>
												<span><a href="detail.html"><i class="icon-eye"></i></a></span>


											</p>
										</div>
									</div>
									<div class="desc">
										<h3><a href="detail.html">Áo nữ trắng bạch</a></h3>
										<p class="price"><span>3.000.000 đ</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="product-entry">
									<div class="product-img" style="background-image: url(/assets/client/images/ao-nu-so-mi-co-co-duc.jpg);">

										<div class="cart">
											<p>
												<span class="addtocart"><a href="cart.html"><i
															class="icon-shopping-cart"></i></a></span>
												<span><a href="detail.html"><i class="icon-eye"></i></a></span>


											</p>
										</div>
									</div>
									<div class="desc">
										<h3><a href="detail.html">Áo sơ mi có cổ kẻ ô xám</a></h3>
										<p class="price"><span>3.000.000 đ</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="product-entry">
									<div class="product-img" style="background-image: url(/assets/client/images/dam_nu_xoe_dep.jpg);">

										<div class="cart">
											<p>
												<span class="addtocart"><a href="cart.html"><i
															class="icon-shopping-cart"></i></a></span>
												<span><a href="detail.html"><i class="icon-eye"></i></a></span>


											</p>
										</div>
									</div>
									<div class="desc">
										<h3><a href="detail.html">Váy đầm xoè hoa nổi</a></h3>
										<p class="price"><span>3.000.000 đ</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="product-entry">
									<div class="product-img" style="background-image: url(/assets/client/images/Ao_nu_so_mi_cham_bi.jpg);">

										<div class="cart">
											<p>
												<span class="addtocart"><a href="cart.html"><i
															class="icon-shopping-cart"></i></a></span>
												<span><a href="detail.html"><i class="icon-eye"></i></a></span>


											</p>
										</div>
									</div>
									<div class="desc">
										<h3><a href="detail.html">Áo nữ chấm bi</a></h3>
										<p class="price"><span>3.000.000 đ</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="product-entry">
									<div class="product-img" style="background-image: url(/assets/client/images/ao-nu-phoi-vien.jpg);">

										<div class="cart">
											<p>
												<span class="addtocart"><a href="cart.html"><i
															class="icon-shopping-cart"></i></a></span>
												<span><a href="detail.html"><i class="icon-eye"></i></a></span>


											</p>
										</div>
									</div>
									<div class="desc">
										<h3><a href="detail.html">Áo nữ nổi viền</a></h3>
										<p class="price"><span>3.000.000 đ</span></p>
									</div>
								</div>
							</div>
						</div> --}}
						<div class="row">
							<div class="col-md-12">
								{{ $products->links() }}
								{{-- <ul class="pagination">
									<li class="disabled"><a href="#">&laquo;</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul> --}}
							</div>
						</div>
					</div>
					<div class="col-md-3 col-md-pull-9">
						<div class="sidebar">
							<div class="side">
								<h2>Danh mục</h2>
								<div class="fancy-collapse-panel">
									<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingOne">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#menu1"
														aria-expanded="true" aria-controls="collapseOne">Quần
														Áo Nam
													</a>
												</h4>
											</div>
											<div id="menu1" class="panel-collapse collapse" role="tabpanel"
												aria-labelledby="headingOne">
												<div class="panel-body">
													<ul>
														<li><a href="#">Áo Sơ mi nam</a></li>
														<li><a href="#">Áo thun nam</a></li>
														<li><a href="#">Áo Khoác nam</a></li>
														<li><a href="#">Áo vest Nam</a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingOne">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#menu2"
														aria-expanded="true" aria-controls="collapseOne">Quần
														Áo Nữ
													</a>
												</h4>
											</div>
											<div id="menu2" class="panel-collapse collapse" role="tabpanel"
												aria-labelledby="headingOne">
												<div class="panel-body">
													<ul>
														<li><a href="#">Áo Sơ mi Nữ</a></li>
														<li><a href="#">Áo thun Nữ</a></li>
														<li><a href="#">Áo Khoác Nữ</a></li>

													</ul>
												</div>
											</div>
										</div>


									</div>
								</div>
							</div>
							<div class="side">
								<h2>Khoảng giá</h2>
								<form method="post" class="colorlib-form-2">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="guests">Từ:</label>
												<div class="form-field">
													<i class="icon icon-arrow-down3"></i>
													<select name="start" id="people" class="form-control">
														<option value="#">100.000 VNĐ</option>
														<option value="#">200.000 VNĐ</option>
														<option value="#">300.000 VNĐ</option>
														<option value="#">500.000 VNĐ</option>
														<option value="#">1.000.000 VNĐ</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label for="guests">Đến:</label>
												<div class="form-field">
													<i class="icon icon-arrow-down3"></i>
													<select name="end" id="people" class="form-control">
														<option value="#">2.000.000 VNĐ</option>
														<option value="#">4.000.000 VNĐ</option>
														<option value="#">6.000.000 VNĐ</option>
														<option value="#">8.000.000 VNĐ</option>
														<option value="#">10.000.000 VNĐ</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<button type="submit" style="width: 100%;border: none;height: 40px;">Tìm
										kiếm</button>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end main -->
@endsection