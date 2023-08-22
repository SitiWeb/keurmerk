
<table class="table table-bordered mt-4">
    <tbody>
        <tr>
            <th>ID</th>
            <td>{{ $website->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $website->name }}</td>
        </tr>
        <tr>
            <th>URL</th>
            <td><a href="{{ $website->url }}" target="_blank">{{ $website->url }}</a></td>
        </tr>
        <tr>
            <th>WordPress ID</th>
            <td>{{ $website->wordpress_id }}</td>
        </tr>
        <tr>
            <th>User ID</th>
            <td>{{ $website->user_id }}</td>
        </tr>
        <tr>
            <th>Mollie Customer ID</th>
            <td>{{ $website->mollie_customer_id }}</td>
        </tr>
        <tr>
            <th>Mollie Mandate ID</th>
            <td>{{ $website->mollie_mandate_id ?: 'Not available' }}</td>
        </tr>
        <tr>
            <th>Tax Percentage</th>
            <td>{{ $website->tax_percentage }}</td>
        </tr>
        <tr>
            <th>Trial Ends At</th>
            <td>{{ $website->trial_ends_at ?: 'Not available' }}</td>
        </tr>
        <tr>
            <th>Extra Billing Information</th>
            <td>{{ $website->extra_billing_information ?: 'Not available' }}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{ $website->created_at }}</td>
        </tr>
        <tr>
            <th>Updated At</th>
            <td>{{ $website->updated_at }}</td>
        </tr>


    </tbody>
</table>
@if(Auth::user()->api_key)
    <p>API Key: {{ Auth::user()->api_key }}</p>
    <form action="{{ route('regenerate-api-key') }}" method="POST">
        @csrf
        <button type="submit">Regenerate API Key</button>
    </form>
@else
    <p>No API Key generated yet.</p>
    <form action="{{ route('regenerate-api-key') }}" method="POST">
        @csrf
        <button type="submit">Generate API Key</button>
    </form>
@endif