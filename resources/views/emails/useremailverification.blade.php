@component('mail::message')
# Account Activation

Hello {{$user->name}},
Please click the button below to activate your Account.

@component('mail::button', ['url' => $user->verifyurl])
	Verify Email Address
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
