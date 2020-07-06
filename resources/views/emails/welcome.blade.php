@component('mail::message')
    <p>
        Thank you for registering with us {{$user->name}}.
        Your email is {{$user->email}}
        Your Password is {{$user->password}}
    </p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
