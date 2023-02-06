@extends('template.templatehomepage')
@section('content')
<style type="text/css">
	
</style>
<div class="content w-100 position-absolute" style="top: 25%; ">
	<div class="container">
		@foreach($item as $it)
		<div class="float-start text-center col-md-3">
			<h4><u>{{ $it->item_name }}</u></h4>
			<img src="{{ asset('mystyle/image/items.png') }}" class="w-75"><br>
			{{ $it->item_name }}<br>
		</div>
		<div class="float-start col-md-7">
			<h5>Rp <?= number_format($it->price,0,'.',',') ?>,-</h5>
			<br>
			<h5 style="font-weight: 400;">
				<?= " ".$it->item_desc. " " ?></p>
			</h5>
			<br>
			<div class="text-end">
				<a href="" class="btn btn-warning w-25">Buy</a>
			</div>
		</div>
		<div class="clearfix"></div>
		@endforeach
	</div>


</div>
@endsection