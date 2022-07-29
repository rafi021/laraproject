@component('mail::message')
# Introduction

This message comes from laravel 9 course and we are sending  this message as an example.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
