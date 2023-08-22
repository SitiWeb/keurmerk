@if (!$website->subscribed('Maand membership'))
    Website is not subscribed, or hasn't been.

@else

<table class="table table-bordered mt-4">
    <tr>
        <th>Order</th>
        <th>currency</th>
        <th>subtotal</th>
        <th>Status</th>
        <th>mollie_payment_id</th>
        <th>processed_at</th>
    </tr>
    @foreach($website->orders()->get() as $order)
        <tr>
            <td>{{$order->number}}</td>
            <td>{{$order->currency}}</td>
            <td>{{$order->subtotal / 100}}</td>
            <td>{{$order->mollie_payment_status}}</td>
            <td>{{$order->mollie_payment_id}}</td>
            <td>{{$order->processed_at}}</td>
        </tr>
    @endforeach
</table>
@endif