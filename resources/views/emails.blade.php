@component('mail::message')
# Introduction

Thank you for Registration!...

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
