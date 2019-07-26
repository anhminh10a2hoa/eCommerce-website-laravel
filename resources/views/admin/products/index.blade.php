@extends('admin.layouts.main')
@section('title', 'Store')
@section('content')

	<!--main-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Danh sách sản phẩm</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách sản phẩm</h1>
			</div>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">

					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<div class="alert bg-success" role="alert">
									<svg class="glyph stroked checkmark">
										<use xlink:href="#stroked-checkmark"></use>
									</svg>Đã thêm thành công<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
								</div>
								<a href="addproduct.html" class="btn btn-primary">Thêm sản phẩm</a>
								<table class="table table-bordered" style="margin-top:20px;">

									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Thông tin sản phẩm</th>
											<th>Giá sản phẩm</th>
											<th>Tình trạng</th>
											<th>Danh mục</th>
											<th width='18%'>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
									
										{{-- <tr>
											<td>1</td>
											<td>
												<div class="row">
													<div class="col-md-3"><img src="img/ao-khoac.jpg" alt="Áo đẹp" width="100px" class="thumbnail"></div>
													<div class="col-md-9">
														<p><strong>Mã sản phẩm : SP01</strong></p>
														<p>Tên sản phẩm :Áo Khoác Bomber Nỉ Xanh Lá Cây AK179</p>
														
														
													</div>
												</div>
											</td>
											<td>500.000 VND</td>
											<td>
												<a class="btn btn-success" href="#" role="button">Còn hàng</a>
											</td>
											<td>Áo Khoác Nam</td>
											<td>
												<a href="#" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr> --}}

										@forelse ($products as $product)
											<tr>
												<td>{{ $product->id }}</td>
												<td>
													<div class="row">
														<div class="col-md-3"><img src="img/ao-khoac.jpg" alt="Áo đẹp" width="100px" class="thumbnail"></div>
														<div class="col-md-9">
															<p><strong>Mã sản phẩm : SP01</strong></p>
															<p>Tên sản phẩm :{{ $product->name }}</p>
											
											
														</div>
													</div>
												</td>
												<td>{{ number_format($product->price) }} VND</td>
												<td>
													<a class="btn btn-danger" href="#" role="button">hết hàng</a>
												</td>
												@php
													$name = '';
													$listCategory = $product->categories()->get();
													foreach ($listCategory as $category) {
														$name .= $category->name.', ';
														// print_r($category->name);
													}
													// $name = substr($name, -1, 2);
												@endphp
												<td>{{ $name ?? '' }}</td>
												<td>
													<a href="#" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
													<a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
												</td>
											</tr>
										@empty
											Không có sản phẩm nào
										@endforelse
										


									</tbody>
								</table>
								<div class="text-right">
									{{ $products->links() }}
								</div>
							</div>
							<div class="clearfix"></div>
						</div>

					</div>
				</div>
				<!--/.row-->


			</div>
@endsection