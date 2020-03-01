@extends('layouts.app')

@section('content')
   <div class="container">
       <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <i class="glyphicon glyphicon-edit"></i> 编辑个人资料
                    </h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('users.update',$user->id) }}" method="post" accept-charset="UTF-8">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">

                        @include('shared._error')

                        <div class="form-group">
                            <lable for="name-field">用户名</lable>
                            <input type="text" class="form-control" name="name" id="name-field" value="{{ old('name',$user->name) }}">
                        </div>
                        <div class="form-group">
                            <lable for="email-field">邮 箱</lable>
                            <input class="form-control" type="text" name="email" id="email-field" value="{{ old('email',$user->email) }}">
                        </div>
                        <div class="form-group">
                            <label for="introduction-field">个人简介</label>
                            <textarea class="form-control" name="introduction" id="introduction-field" rows="3">{{ old('introduction',$user->introduction) }}</textarea>
                        </div>
                        <div class="well well-sm">
                            <button type="submit" class="btn btn-primary">保存</button>
                        </div>
                    </form>
                </div>
            </div>
       </div>
   </div>
@stop