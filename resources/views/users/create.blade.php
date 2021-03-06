@extends('layouts.default')

@section('content')


<div class="row">
	<div class="col-lg-12">
		
		<div class="row">
		<div class="col-lg-12">
			<ul class="breadcrumb">
			    <li><a href="{!! url('/') !!}">หน้าหลัก</a></li>
			    <li><a href="{!! url('user') !!}">จัดการผู้ใช้</a></li>
			    <li class="active">เพิ่มผู้ใช้</li>
			</ul>
		</div>
		</div>
		<br />
		<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			{!! Form::open( array('route' => 'user.store', 'class' => 'form-horizontal') ) !!}
				@if($errors->has('fullname'))
				<div class="form-group has-error">
				@else
				<div class="form-group">
				@endif
					<label for="fullname" class="col-lg-2 control-label">ชื่อ-สกุล</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="fullname" placeholder="ชื่อ-สกุล"/>
					</div>
				</div>
				@if($errors->has('username'))
				<div class="form-group has-error">
				@else
				<div class="form-group">
				@endif
					<label for="username" class="col-lg-2 control-label">ชื่อผู้ใช้งาน</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="username" placeholder="ชื่อผู้ใช้งาน"/>
					</div>
				</div>
				@if($errors->has('password'))
				<div class="form-group has-error">
				@else
				<div class="form-group">
				@endif
					<label for="password" class="col-lg-2 control-label">รหัสผ่าน</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="password" placeholder="รหัสผ่าน"/>
					</div>
				</div>
				<div class="form-group">
					<label for="select" class="col-lg-2 control-label">แผนก:</label>
					<div class="col-lg-10">
						{!! Form::select('id_dep', $dep, null, ['class'=> 'form-control']) !!}
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2 control-label">สิทธิ์:</label>
					<div class="col-lg-10">
						<div class="radio radio-primary">
						    <label>
						      <input type="radio" name="level" value="3" checked="">
						      ผู้ใช้ทั่วไป
						    </label>
						  </div>
						<div class="radio radio-primary">
						    <label>
						      <input type="radio" name="level" value="2">
						      เจ้าหน้าที่พัสดุ
						    </label>
						  </div>
						<div class="radio radio-primary">
						    <label>
						      <input type="radio" name="level" value="1" >
						      ผู้ดูแลระบบ
						    </label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2 control-label">สถานะ:</label>
					<div class="col-lg-10">
						<div class="radio radio-primary">
						    <label>
						      <input type="radio" name="activated" value="1" checked="">
						      เปิด
						    </label>
						  </div>
						  <div class="radio radio-primary">
						    <label>
						      <input type="radio" name="activated" value="0">
						      ปิด
						    </label>
						  </div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-10 col-lg-offset-2">
						<a href="{!! route('user.index') !!}" class="btn btn-default">ยกเลิก</a>
						<button type="submit" class="btn btn-success">บันทึก</button>
					</div>
				</div>
			{!! Form::close() !!}<!-- form -->
		</div>
		</div>
					
	</div>
</div>


@endsection