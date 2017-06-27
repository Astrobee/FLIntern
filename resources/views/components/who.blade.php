@if(Auth::guard('web')->check())
<p class="text-success">
	You are Logged in as a <b>USER</b>
</p>

@else
<p class="text-danger">
	You are Logged out as a <b>USER</b>
</p>

@endif


@if(Auth::guard('admin')->check())
<p class="text-success">
	You are Logged in as an <b>ADMIN</b>
</p>

@else
<p class="text-danger">
	You are Logged out as an <b>ADMIN</b>
</p>

@endif