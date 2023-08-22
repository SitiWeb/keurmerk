@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Websites') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>URL</th>
                                <th>Subscription status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($websites as $website)
                                <tr>
                                    <td>{{ $website->name }}</td>
                                    <td>{{ $website->url }}</td>
                                    <td>
                                        @php
                                        $plan = 'Maand';

                                        $name = ucfirst($plan) . ' membership';
                                        if ($website->subscribed( $name )) {
                                            echo 'Subscribed';
                                        }
                                        else{
                                            echo '-';
                                        }
                                        @endphp
                                    </td>
                                    <td>
                                        <a href="{{ route('websites.show', $website->id) }}">Show</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
