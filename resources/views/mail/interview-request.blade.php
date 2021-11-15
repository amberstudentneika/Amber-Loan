@component('mail::message')
# Introduction

{{$emailContent['name']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{--{{Auth::user()}}--}}
@endcomponent
