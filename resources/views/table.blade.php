@extends("template")
@section("content")
<div class="text-right">
	<a href="{{ url('form') }}" class="btn btn-primary">Tambah Data </a>
</div>
<table class="table table-bordered">
	<caption>Belajar Templating Laravel</caption>
	<thead>
		<tr>
			<th>header</th>
			<th>header</th>
			<th>header</th>
			<th>header</th>
			<th>header</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
	</tbody>
</table>
@endsection