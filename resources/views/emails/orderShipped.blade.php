@component('mail::message')
# Contract Document Number : 1 <br>
**Customer Email :** customer@gmail.com <br>
**Warehouse Code :** W-9204 <br>
**Warehouse Provider Name :** arun <br>
**Warehouse City :** Chennai <br>
**Created By :** AreaProject <br>

OrderShipped Successfully

<x-mail::panel>
    From AreaProject
</x-mail::panel>

Thanks,<br>
{{ config('app.name') }}
@endcomponent