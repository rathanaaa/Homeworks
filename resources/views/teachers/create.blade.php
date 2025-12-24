@extends('layouts.app')
@section('title', 'Create Teacher')
@section('content')

<form class="row g-3 needs-validation" method="POST" action="{{ route('teachers.store') }}">
  @csrf

  <div class="col-md-6">
    <label for="nameText" class="form-label">ឈ្មោះពេញ</label>
    <input type="text" class="form-control" name="name" id="nameText" placeholder="សូមបញ្ចូលឈ្មោះពេញ" required>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">រក្សាទុក</button>
    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">ថយក្រោយ</a>
  </div>
</form>

@endsection
