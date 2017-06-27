@component('mail::message')


Hello <b style="color:red">{{ $user->name }},</b>

Thanks for registering with us. We hope you will enjoy our services to your satisfaction.

Click on the button below to add more details to your profile.
@component('mail::button', ['url' => 'farmline.dev/user/info'])
Complete Profile
@endcomponent


<span style="color:blue;">Quote</span>: <i style="background-color: white;">First find your Worth, then add Tax</i>
@component('mail::button', ['url' => 'farmline.dev/quotes'])
More Quotes
@endcomponent

@component('mail::panel')
The best place to get poems and quotes.
@endcomponent

<h1><center style="color:red;">DO NOT REPLY</center></h1>
Team,<br>
{{ config('app.name') }}
@endcomponent
