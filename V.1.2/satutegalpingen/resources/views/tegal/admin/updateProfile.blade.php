@auth
<form action="/t3g4l/ministrator/update-profile-send/{{{Auth::user()->id}}}" method="post">
	@method('put')
	@csrf
	<label for="username">Username</label>
	<input type="text" name="username" value="{{Auth::user()->username}}">

	<label for="name">Name</label>
	<input type="text" name="name" value="{{Auth::user()->name}}">

	<label for="email">Email</label>
	<input type="email" name="email" value="{{Auth::user()->email}}">

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endauth