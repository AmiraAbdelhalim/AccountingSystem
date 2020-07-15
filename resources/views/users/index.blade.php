@extends('adminlte.dashboard')
@section('title','Users')
@section('section_title','Users')
@section('content')
<div class="container my-3">
   
    <br>
 
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
                <tr>
                
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  </tr>
              @endforeach
        </tbody>
        
    </table>
</div>
@endsection