<html>
<head>
	<title>galeri</title>
</head>

<body>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Judul</td>
			<td>path</td>	
			<td>User id </td>

		</tr>

		@foreach($galeri as $item)
	<tr>
		<td>{!! $item->id !!}</td>
		<td>{!! $item->judul !!}</td>
		<td>{!! $item->path !!}</td>
		<td>{!! $item->user_id !!}</td>

	</tr>

	@endforeach

</table>
</body>
</html>