@component('mail::message')
    # Hi

    The schedule you have selected from our system was approved by the Admin.

@component('mail::button', ['url' => 'http://dtp-exam.infinityfreeapp.com/schedules'])
    View Schedule List
@endcomponent

Thanks, <br>
{{ config('app.name') }}
@endcomponent
