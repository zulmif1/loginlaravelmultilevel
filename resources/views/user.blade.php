<!DOCTYPE html>
<html lang="in">
<head>
	<title>user</title>
</head>
<body>
	<a href="{{ route('logout') }}"
	onclick="event.preventDefault();
	document.getElementById('logout-form').submit();">
	Logout
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	{{ csrf_field() }}
</form>
</body>
</html>