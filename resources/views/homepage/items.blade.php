@extends('template.templatehomepage')
@section('content')
<script type="text/javascript">
	document.getElementById('home').classList.add('active')
</script>
<div class="content w-100 position-absolute" style="top: 25%; ">
	<div class="container">
		@if (session('success'))
			<div class="alert alert-success">
				{{ session('success') }}
			</div>
		@endif
		<div class="float-start text-center col-md-3">
			<h4><u>{{ $item->item_name }}</u></h4>
			<img src="{{ asset('mystyle/image/items.png') }}" class="w-75"><br>
			{{ $item->item_name }}<br>
		</div>
		<div class="float-start col-md-7">
			<h5>Rp <?= number_format($item->price,0,'.',',') ?>,-</h5>
			<br>
			<h5 style="font-weight: 400;">
				<?= " ".$item->item_desc. " " ?></p>
			</h5>
			<br>
			<div class="text-end">
				<form action="{{ route('order') }}" method="post">
					@csrf
					<input type="hidden" name="account_id" value="{{ $account->account_id }}">
					<input type="hidden" name="item_id" value="{{ $item->item_id }}">
					<button href="" class="btn btn-warning w-25">Buy</button>
				</form>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>


</div>
@endsection