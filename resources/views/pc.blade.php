@extends('layouts.admin')

@section('content')
<div class="panel-heading">
    <h3 class="panel-title">Personal Computer</h3>
    <p class="panel-subtitle">Daftar PC</p>
</div>

<div class="panel-body">
  <a href="{{route('pc.create')}}"><button type="button" class="btn btn-primary">Add</button></a>
</div>

<div class="panel-body">
	<div class="panel-body">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Asset Tag</th>
					<th>User</th>
					<th>Pocessor</th>
					<th>RAM</th>
					<th>Mother Board</th>
					<th>VGA External</th>
					<th>HDMI Port</th>
					<th>PS2 Port</th>
				</tr>
			</thead>
			<tbody>
				@foreach($personal_computers as $pc)
				<tr>
					<td>{{$pc->id}}</td>
					<td>{{$pc->asset_tag}}</td>
					<td>{{$pc->user_id}}</td>
					<td>{{$pc->processor}}</td>
					<td>{{$pc->ram}}</td>
					<td>{{$pc->mother_board}}</td>
					@if($pc->vga == 1)
						<td>Yes</td>
					@else
						<td>No</td>
					@endif
					@if($pc->hdmi == 1)
						<td>Yes</td>
					@else
						<td>No</td>
					@endif
					@if($pc->ps2port == 1)
						<td>Yes</td>
					@else
						<td>No</td>
					@endif

				</tr>
				@endforeach
			</tbody>
		</table>
		{{$personal_computers->render()}}
	</div>
</div>

@endsection
