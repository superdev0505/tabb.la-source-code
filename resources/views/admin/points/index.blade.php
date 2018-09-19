@extends('admin.layouts.app')

@section('title', __('views.admin.users.index.title'))

@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<div class="m-content">
		<div class="m-portlet m-portlet--mobile">
			<div class="m-portlet__body">
				<div class="m-grid__item m-grid__item--fluid">
					<table class="m-datatable m-datatable--scroll" width="100%" style="display: table !important;">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Points</th>
								<th>Cash</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($points as $point)
							<tr>
								<td>
									@if($point->name) {{ $point->name }}
									@else User doesn't matched
									@endif
								</td>
								<td><span>{{ $point->email }}</span></td>
								<td>{{ $point->point }}</td>
								<td>${{ number_format($point->point / 150, 2, '.', '') }}</td>
								<td><a href="#" class="btn m-btn--pill m-btn--air btn-primary" @if(!$point->name) disabled @endif>Pay</a></td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection