@component('mail::message')
<i>Name:</i> <b style="color:red;">{{ $visitor->name }}</b><br>
<i>Email:</i> <b style="color:red;">{{ $visitor->email }}</b>

@if(Auth::check())
<small>Registered user</small>

@else
<small>Unregistered user</small>
@endif

<p>{{ $visitor->message }}</p>


Thanks,<br>
@endcomponent
