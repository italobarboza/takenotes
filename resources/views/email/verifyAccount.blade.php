@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
{{ config('app.name') }}
@endcomponent
@endslot
{{-- Body --}}
# Welcome!
Thank you for registering at {{ config('app.name') }}!
Please, click at the following button to verify your account:
@component('mail::button', ['url' => route('accountVerifyEmail', ['email' => $user->email, 'verifyToken' => $user->verifyToken]), 'color' => 'blue'])
Verify Account
@endcomponent
{{-- Subcopy --}}
@component('mail::subcopy')
If you’re having trouble clicking the "Verify Account" button, copy and paste the URL below
into your web browser: [{{ route('accountVerifyEmail', ['email' => $user->email, 'verifyToken' => $user->verifyToken]) }}]({{ route('accountVerifyEmail', ['email' => $user->email, 'verifyToken' => $user->verifyToken]) }})
@endcomponent
{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
@endcomponent
@endslot
@endcomponent