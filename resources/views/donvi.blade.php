@extends('index')
@section('donvi')
	<div class=""> 
		<div class="donvi"><span class="donvi">Danh sách đơn vị</span>
		<span class="donvibt">
			<button type="button" class="btn btn-primary">Thêm</button>
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
		<table class="table table-bordered table-info f_donvi">
			<tr>
				<th>STT</th>
				<th>Tên đơn vị</th>
				<th>Tác vụ</th>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<button type="button" class="btn btn-warning">Sửa</button>		
					<button type="button" class="btn btn-danger">Xóa</button>
				</td>
			</tr>
		</table>
		</div>
	</div>
@endsection