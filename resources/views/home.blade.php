@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header @if(locale()->dir() == 'rtl') text-right @else text-right @endif">{{ config("app.name") }}</div>

                <div class="card-body @if(locale()->dir() == 'rtl') text-right @else text-right @endif">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __("Welcome") }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
