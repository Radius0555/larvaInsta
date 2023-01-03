@extends('layouts.app')

@section('content')
<div class="container">
<form action="/profile/{{ $user->id }}/update" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Edit Profile</h1>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-from-label">Title</label>
                
                    <input id="title"
                       type="text"
                       class="form-control{{ $errors->has('title') ? 'is-valid' : '' }}"
                       name="title"
                       value="{{ old('title') ?? $user->profile->title }}"
                       autocomplete="title" autofocus>

                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif             
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-from-label">Description</label>
                
                    <input id="description"
                       type="text"
                       class="form-control{{ $errors->has('description') ? 'is-valid' : '' }}"
                       name="description"
                       value="{{ old('description') ?? $user->profile->description }}"
                       autocomplete="description" autofocus>

                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif             
                </div>

                <div class="form-group row">
                    <label for="url" class="col-md-4 col-from-label">url</label>
                
                    <input id="url"
                       type="text"
                       class="form-control{{ $errors->has('url') ? 'is-valid' : '' }}"
                       name="url"
                       value="{{ old('url') ?? '/profile/'.$user->id }}"
                       autocomplete="url" autofocus>

                    @if ($errors->has('url'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('url') }}</strong>
                        </span>
                    @endif             
                </div>
                

                <div class="row pt-4">
                    <button class="btn btn-primary">Save Profile</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection