@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- error message -->
@include('shared.errors')

<!-- create album:alert prompt -->
<button type="button" class="btn btn-primary" style="margin-bottom:10px">Create album</button>

<!-- show album -->
<div class="row">
    @include('shared.album')
    @include('shared.album')
    @include('shared.album')
    @include('shared.album')
    @include('shared.album')
    @include('shared.album')
</div>
<!--the code is show album-->

@endsection