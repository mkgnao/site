<!-- BEGIN MD/SHOW -->

@extends('layouts.app')

@section('content')
        {{ dd($mdContent->name) }}

    {{--
    {!! Form::model($mdContent, array('route' => array('md.update', $mdContent->name)) !!}

            <div class="form-group">
                {!! Form::label('content', 'Content:') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('submit', ['class' => 'form-control']) !!}
            </div>

    {!! Form::close() !!}
    --}}

    @endsection
            <!-- END MD/SHOW -->