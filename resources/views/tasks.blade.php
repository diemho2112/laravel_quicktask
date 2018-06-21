@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="heading">
            <h3>{{ trans('message.newtask') }}</h3>
        </div>
        <div class="contain">
            {!! Form::open(['url' => 'task', 'id' => 'form_add']) !!}
            <div class="form-group">
                {!! Form::label('newtask', trans('message.task')) !!}
                {!! Form::text('newtask', null, ['class' => 'form-control']) !!}
                @include('common.error')
            </div>
            {!! Form::submit(trans('message.addtask'), ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        <div class="heading">
            <h3>{{ trans('message.currenttask') }}</h3>
        </div>
        <div class="contain">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>{{ trans('message.task') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->name }}</td>
                        <td>
                            {!! Form::open(['url' => 'task/'.$task->id, 'method' => 'delete', 'id' => 'form_del']) !!}
                                {!! Form::submit(trans('message.delete'), ['class' => 'btn_delete']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
