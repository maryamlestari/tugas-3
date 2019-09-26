<html>
<head>
	<title>pengumuman</title>
</head>

<body>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Judul</td>
			<td>Isi</td>
			<td>User id </td>

		</tr>

		@foreach($pengumuman as $item)
	<tr>
		<td>{!! $item->id !!}</td>
		<td>{!! $item->judul !!}</td>
		<td>{!! $item->isi !!}</td>
		<td>{!! $item->user_id !!}</td>

	</tr>

	@endforeach

</table>
</body>
</html>