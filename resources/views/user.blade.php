
<h1>User Account (with Validation)</h1>
<!-- 
@if($errors->any())
<div>
	<ul>	
		@foreach($errors->all() as $err)
		<li>	
			{{$err}}
		</li>
		@endforeach
	</ul>
</div>
@endif -->
<form action="UsersController" method="post">
	{{@csrf_field()}}
	<input type="text" name="email" placeholder="email">
	<br>
	@error('email')
	<span style="color: red">{{$message}}</span>
	@enderror
	
	<br>
	<input type="password" name="password" placeholder="password">
	<br>
	@error('password')
	<span style="color: red">{{$message}}</span>
	@enderror
	<br>
	<input type="submit" name="submit">
	
</form>

