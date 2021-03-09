@component('mail::message')
Thank you for filling out the contact form! <br>
<strong>Name:</strong> {{$data['name']}}<br>
<strong>Number:</strong> {{$data['number']}}<br>
<strong>Email:</strong> {{$data['email']}}<br>
<strong>Message:</strong>
{{$data['message']}}
@endcomponent
