@extends('layouts.app')
@section('title', 'Teacher List')
@section('content')
<div class="mt-3 mb-3">
  <a href="{{ route('teachers.create') }}" class="btn btn-primary">CREATE Teacher</a>
</div>
<table class="table table-hover">
  <thead class="table-primary">
    <th>CID</th>
    <th>Name</th>
    <th>Actions</th>
  </thead>
  <tbody>
    @foreach($teachers as $c)
    <tr>
      <td>{{ $c->cid }}</td>
      <td>{{ $c->name }}</td>
      <td>
        <a href="{{ route('teachers.view', $c->cid) }}" class="btn btn-info">View</a>
        <a href="{{ route('teachers.show', $c->cid) }}" class="btn btn-primary">Edit</a>
        <form method="POST" action="{{ route('teachers.destroy', $c->cid) }}" class="d-inline">
          @csrf
          @method('delete')
          <button class="btn btn-danger btn-delete" type="button">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $teachers->links('pagination::bootstrap-5') }}
@endsection
