@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Members') }}
                    <b-button href="#" v-b-modal.add_member-modal variant="outline-primary" size="sm"><i class="fas fa-plus"></i>&nbsp;{{ __("Add member") }}</b-button>
                    <b-modal id="add_member-modal" title="{{ __('Add member') }}" centered size="lg">
                         <b-container fluid>
                            <b-row class="mb-1">
                              <b-col cols="3">{{ __("Firstname") }}</b-col>
                              <b-col>
                                <b-form-input id="firstname" placeholder="Enter your firstname" type="text"></b-form-input>
                              </b-col>
                            </b-row>
                            <b-row class="mb-1">
                              <b-col cols="3">{{ __("Lastname") }}</b-col>
                              <b-col>
                                <b-form-input id="lastname" placeholder="Enter your lastname" type="text"></b-form-input>
                              </b-col>
                            </b-row>
                            <b-row class="mb-1">
                              <b-col cols="3">{{ __("Birth Date") }}</b-col>
                              <b-col>
                                <b-form-input id="birth_date" placeholder="Enter your birth date" type="date"></b-form-input>
                              </b-col>
                            </b-row>
                            <b-row class="mb-1">
                                <b-col cols="3">{{ __("Gender") }}</b-col>
                                <b-col>
                                    <b-form-group>
                                      <b-form-radio model="selected" name="gender" value="male">{{ __("Male") }}</b-form-radio>
                                      <b-form-radio model="selected" name="gender" value="female">{{ __("Female") }}</b-form-radio>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                        </b-container>
                    </b-modal>

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
                                        <td>{{ $member->firstname }}</td>
                                        <td>{{ $member->lastname }}</td>
                                        <td>{{ $member->birth_date }}</td>
                                        <td>
                                            <b-modal id="f-modal-{{ $member->id }}" title="Family of {{ $member->firstname . " " . $member->lastname }}" centered size="lg">
                                                <p class="my-4">{{ $member->family }}</p>
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
