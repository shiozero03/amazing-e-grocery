@extends('template.templatehomepage')
@section('content')
<style type="text/css">
	
</style>
<div class="content position-absolute w-100" style="top: 20%; ">
	<div class="container">
		@foreach($item as $it)
		<div class="float-start text-center" style="width:calc(100%/5)">
			<img src="{{ asset('mystyle/image/items.png') }}" class="w-75"><br>
			{{ $it->item_name }}<br>
			<a href="home/items/{{$it->item_id}}">Detail</a>
		</div>
		@endforeach
		<div class="clearfix"></div>
		{{$item->links()}}
	</div>


</div>
@endsection