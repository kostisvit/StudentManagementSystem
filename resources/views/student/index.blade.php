@extends('layouts.app')

@section('content')


<a href="{{ route('student.create') }}" class="btn btn-primary">Go to Page</a>
<ul>
  @foreach($students as $student)
      <li>{{ $student->firstName }} - {{ $student->lastName }} - {{$student->email}}</li>
  @endforeach
</ul>

@endsection

