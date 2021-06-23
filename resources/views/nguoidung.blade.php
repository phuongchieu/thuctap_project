@extends('index')
@section('nguoidung')
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
					 <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Chức năng
                      </a>
                      <div class="dropdown-menu">
                              <a class="dropdown-item" href="/taotaikhoan">Tạo tài khoản</a>
                              <a class="dropdown-item" href="/doimatkhau">Đổi mật khẩu</a>
                              <a class="dropdown-item" href="/phanquyen">Phân quyền</a>
                      </div>
				</td>
			</tr>
		</table>
		</div>
	</div>
@endsection