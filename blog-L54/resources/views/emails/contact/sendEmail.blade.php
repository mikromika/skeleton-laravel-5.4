@component('mail::message')
# Introduction

The body of your message.

<p>
    {{ $emailName}}
</p>


<p>
    {{ $emailMessage}}
</p>



@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
