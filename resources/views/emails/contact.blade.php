@component('mail::message')

    <p>Dear {{$contact->name}}, We received your message on the subject of {{$contact->subject}} and we will
        get back to you soon.</p>
    <br>
    email: {{$contact->email}}
    <br>
    message: {{$contact->message}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
