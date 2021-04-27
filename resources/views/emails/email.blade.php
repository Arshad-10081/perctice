@component('mail::message')
# Introduction

Thank you For Registration we will touch with soon.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
