@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Emails</div>

                <div class="card-body">
                    @foreach($emails as $email)
                        {{$email->email}}<br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
