@component('mail::message')
    Name: {{ $mailData['name'] }}<br>
    Email: {{ $mailData['email'] }}<br>
    Phone: {{ $mailData['phone'] }}<br>
    Message: {{ $mailData['msg'] }}
@endcomponent
