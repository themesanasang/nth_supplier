@extends('layouts.default')

@section('content')


<div class="row">
	<div class="col-lg-12">
		
		<div class="row">
		<div class="col-lg-12">
			<ul class="breadcrumb">
			    <li><a href="{!! url('/') !!}">หน้าหลัก</a></li>
			    <li><a href="{!! url('type') !!}">จัดการประเภทพัสดุ</a></li>
			    <li class="active">เพิ่มประเภท</li>
			</ul>
		</div>
		</div>
		<br />
		<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			{!! Form::open( array('route' => 'type.store', 'class' => 'form-horizontal') ) !!}
				@if($errors->has('type_code'))
				<div class="form-group has-error">
				@else
				<div class="form-group">
				@endif
					<label for="type_code" class="col-lg-2 control-label">รหัส</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="type_code" placeholder="รหัส"/>
					</div>
				</div>
				@if($errors->has('type_name'))
				<div class="form-group has-error">
				@else
				<div class="form-group">
				@endif
					<label for="type_name" class="col-lg-2 control-label">ประเภท</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="type_name" placeholder="ประเภท"/>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-10 col-lg-offset-2">
						<a href="{!! route('type.index') !!}" class="btn btn-default">ยกเลิก</a>
						<button type="submit" class="btn btn-success">บันทึก</button>
					</div>
				</div>
			{!! Form::close() !!}<!-- form -->
		</div>
		</div>
					
	</div>
</div>


@endsection