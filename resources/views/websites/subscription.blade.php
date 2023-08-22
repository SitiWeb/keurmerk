
<table class="table table-bordered mt-4">
    <tr>
        <th>ID</th>
        <th>Abbonement</th>
        <th>Periode Start</th>
        <th>Volgende periode</th>
        @if ($website->subscribed('Maand membership'))
            @if ($website->subscription('Maand membership')->ends_at)
                <th>Geannuleerd vanaf:</th>
            @endif
        @endif

    </tr>

    @if ($website->subscribed('Maand membership'))
    <tr>
        <td>{{$website->subscription('Maand membership')->id}}</td>
        <td>{{$website->subscription('Maand membership')->plan}}</td>
        <td>{{$website->subscription('Maand membership')->cycle_started_at}}</td>
        <td>{{$website->subscription('Maand membership')->cycle_ends_at}}</td>
        @if ($website->subscription('Maand membership')->ends_at)
                <td>{{$website->subscription('Maand membership')->ends_at}}</td>
            @endif
    </tr>
    @endif
</table>
@if ($website->subscribed('Maand membership'))
@if ($website->subscription('Maand membership')->onGracePeriod())
    <a href="{{route('cancel_sub',['website' => $website->id])}}">Hervat abonnement</a>
@elseif ($website->subscribed('Maand membership'))
    <a href="{{route('cancel_sub',['website' => $website->id])}}">Stop abonnement</a>
@endif
@else
    <a href="{{route('create_sub',['website' => $website->id])}}">Create Subscription</a>
@endif