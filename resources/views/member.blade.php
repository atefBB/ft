@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Members') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                            <tr>
                              <th>#</th>
                              <th>{{ __("First Name") }}</th>
                              <th>{{ __("Last Name") }}</th>
                              <th>{{ __("Birth Date") }}</th>
                              <th>{{ __("Options") }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>10-10-2010</td>
                              <td></td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
