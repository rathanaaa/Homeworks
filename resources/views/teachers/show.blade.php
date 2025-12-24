
@extends('layouts.app')
@section('title', 'Create Teacher')
@section('content')
  <div class="col-md-6">
    <label for="nameText" class="form-label">ឈ្មោះពេញ</label>
    <input type="text" class="form-control" name="name" readonly value="{{ $teacher->name }}" id="nameText">
  </div>
@endsection