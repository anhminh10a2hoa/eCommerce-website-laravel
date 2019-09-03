@extends('admin.layouts.main')
@section('title', 'List Product')
@section('content')
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
							<a href="{{ route('admin.products.create') }}" class="btn btn-primary">Thêm sản phẩm</a>
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

									@forelse ($products as $product)
									<tr>
										<td>{{ $product->id }}</td>
										<td>
											<div class="row">
												<div class="col-md-3"><img src=" {{ $product->avatar }}" alt="Áo đẹp"
														width="100px" class="thumbnail"></div>
												<div class="col-md-9">
													<p><strong>Mã sản phẩm : {{ $product->product_code }}</strong></p>
													<p>Tên sản phẩm :{{ $product->name }}</p>


												</div>
											</div>
										</td>
										<td>{{ number_format($product->price) }} VND</td>
										<td>
											<?php if($product->quantity == 0) { echo '<a class="btn btn-danger" href="#" role="button">hết hàng</a>'; }
												else { echo $product->quantity.' sản phẩn';}
											
											?>
										</td>
										
										<td>{{ $product->category->name }}</td>
										<td>
											<a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning"><i class="fa fa-pencil"
													aria-hidden="true"></i> Sửa</a>
											<a href="#" class="btn btn-danger"><i class="fa fa-trash"
													aria-hidden="true"></i> Xóa</a>
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