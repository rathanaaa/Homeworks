
@extends('layouts.app')
@section('title', 'Edit Teacher')
@section('content')
    <form class="row g-3 needs-validation" method="POST" action="{{ route('teachers.edit', $teacher->cid) }}">
      @csrf
      @method('patch')

      <div class="col-md-6">
        <label for="nameText" class="form-label">ឈ្មោះពេញ</label>
        <input type="text" class="form-control" name="name" value="{{ $teacher->name }}" id="nameText" placeholder="សូមបញ្ចូលឈ្មោះពេញ" required>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">រក្សាទុក</button>
        <a href="{{ route('teachers.index') }}" class="btn btn-secondary">ថយក្រោយ</a>
      </div>
    </form>
  
@endsection