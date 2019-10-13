@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Members') }}
                </div>
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
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        {{ __("First Name") }}
                                    </th>
                                    <th>
                                        {{ __("Last Name") }}
                                    </th>
                                    <th>
                                        {{ __("Birth Date") }}
                                    </th>
                                    <th>
                                        {{ __("Options") }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($members as $member)
                                    <tr>
                                        <th scope="row">
                                            {{ $member->id }}
                                        </th>
                                        <td>{{ $member->firstname }}</td>
                                        <td>{{ $member->lastname }}</td>
                                        <td>{{ $member->birth_date }}</td>
                                        <td>
                                            <b-modal id="f-modal-{{ $member->id }}" title="Family of {{ $member->firstname . " " . $member->lastname }}">
                                                <p class="my-4">Hello from modal!</p>
                                            </b-modal>
                                            <div aria-label="Options buttons" class="btn-group" role="group">
                                                <button class="btn btn-info" type="button" v-b-tooltip title="{{ __('See Family') }}" v-b-modal.f-modal-{{ $member->id }}><i class="far fa-eye"></i></button>
                                                <button class="btn btn-success" type="button" v-b-tooltip title="{{ __('Edit') }}"><i class="far fa-edit"></i></button>
                                                <button class="btn btn-danger" type="button" v-b-tooltip title="{{ __('Delete') }}"><i class="fas fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
