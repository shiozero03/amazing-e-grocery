@extends('template.templatehomepage')
@section('content')
<script type="text/javascript">
	document.getElementById('home').classList.add('active')
</script>
<div class="content position-absolute w-100" style="top: 20%; ">
	<div class="container">
		@if (session('error'))
			<div class="alert alert-danger">
				{{ session('error') }}
			</div>
		@endif
		@foreach($item as $it)
		<div class="float-start text-center" style="width:calc(100%/5)">
			<img src="{{ asset('mystyle/image/items.png') }}" class="w-75"><br>
			{{ $it->item_name }}<br>
			<a href="home/items/{{$it->item_id}}">Detail</a>
		</div>
		@endforeach
		<div class="clearfix"></div>
		<br>
		<div class="text-center" >
			{{$item->links('vendor.pagination.custom')}}
		</div>
	</div>


</div>
@endsection