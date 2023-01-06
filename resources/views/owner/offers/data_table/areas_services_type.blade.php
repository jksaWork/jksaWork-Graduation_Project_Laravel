@if ($type == 'service')
<div>
{{$offer->Service->name ??' '}}
</div>
@elseif ($type == 'agent')
<div>
    {{$offer->Agent->name ?? '-'}}
</div>
@elseif ($type == 'type')
<div>
    {{$offer->Type->name ?? '-'}}
</div>
@elseif ($type == 'client')
<div>
    {{$offer->Client->name ?? '-'}}
</div>
@elseif ($type == 'owner')
<div>
    {{$offer->Owner->name ?? '-'}}
</div>
@elseif ($type == 'area')
<div>
    {{$offer->Area->name}}
</div>
@endif
