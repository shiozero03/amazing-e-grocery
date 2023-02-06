@extends('template.templatehomepage')
@section('content')
<script type="text/javascript">
	document.getElementById('cart').classList.add('active')
</script>
<div class="content w-100 position-absolute" style="top: 25%; ">
	<div class="container">
		@if (session('success'))
			<div class="alert alert-success">
				{{ __('home.itemdelete') }}
			</div>
		@endif
		<h2><u>{{ __('home.cart') }}</u></h2><br>
		<table class="w-100">
			@if($order->count() > 0)
			<tbody>
				@foreach($order as $ord)
				<tr>
					<td class="text-center"><img src="{{ asset('mystyle/image/items.png') }}"></td>
					<td>{{ $ord->item_name }}</td>
					<td>Rp <?= number_format($ord->price,0,'.',',') ?>,-</td>
					<td><a href="/homepage/cart/delete/{{ $ord->order_id }}">Delete</a></td>
				</tr>
				@endforeach
				<tr>
					<td colspan="4">
						<hr>
					</td>
				</tr>
				<tr>
					<td colspan="2" class="text-center">
						<h3>TOTAL</h3>
					</td>
					<td>
						<h5>Rp <?= number_format($total,0,'.',',') ?>,-</h5>
					</td>
					<td>
						<a href="cart/checkout/{{ $account->account_id }}" class="btn btn-warning" style="font-weight:600">Check Out</a>
					</td>
				</tr>
			</tbody>
			@else
			<tbody>
				<tr class="border-top border-bottom">
					<td class="text-center py-2"><em>No Data</em></td>
				</tr>
			</tbody>
			@endif
		</table>
	</div>
</div>
@endsection