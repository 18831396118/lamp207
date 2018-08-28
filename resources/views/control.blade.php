<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	@if($isVip)
		<span style="color:red">VIP</span>
	@endif

	<h2>循环控制</h2>
	LAMP 207
	<ul>
	@foreach($class as $v)
		<li>{{$v}} <input type="radio" name="boy"></li>
	@endforeach
	</ul>
</body>
</html>