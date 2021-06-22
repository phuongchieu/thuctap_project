@extends('index')
@section('taotaikhoan')
	<div class=""> 
		<div class="donvi"><span class="donvi">Tao tai khoan</span>
		<span class="donvibt">
		<button type="button" class="btn btn-primary">Thêm</button>
		<button type="button" class="btn btn-secondary">Xuất Excel</button>
		<button type="button" class="btn btn-danger">Nhập dữ liệu</button>
		<button type="button" class="btn btn-info">Quản lý</button>
		<button type="button" class="btn btn-warning">Báo cáo</button>
		</span>
		</div>
		<div class="donvict">
		<!-- <form class="form-inline">
		<div class="form-group mx-sm-3">
			<input type="text" class="form-control" placeholder="Nhập tên -- mã Đơn vị" >
		</div>
		<select name="" class="form-control">
				<option value="">--chọn dân tộc--</option>
			</select>
			<span class="abc">
			<select name="" class="form-control">
				<option value="">--Chọn tôn giáo--</option>
			</select></span>
		</form> -->
		</div>
		<div class="donvitb">
		<table class="table table-bordered table-info">
			<tr>
				<th>STT</th>
				<th>Tên đơn vị</th>
			</tr>

		</table>
		</div>
	</div>
@endsection