@extends('layouts.app')

@section('title', 'Editer Utilisateur ' . $user->name)

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <h3><span class="badge badge-info">Editer</span> <span class="badge badge-secondary"> {{ $user->name }}</span></h3>
                    </div>

                    <div class="col-md-4 page-action text-right">
                        <a href="{{ route('users.index') }}" class="btn btn-default btn-sm"> <i class="material-icons">backspace</i> Retour</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                {!! Form::model($user, ['method' => 'PUT', 'route' => ['users.update',  $user->id ] ]) !!}
                                @include('User._form')
                                <!-- Submit Form Button -->
                                    {!! Form::submit('Sauvegarder', ['class' => 'btn btn-primary']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection
