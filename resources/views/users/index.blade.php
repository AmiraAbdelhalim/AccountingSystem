

@extends('adminlte.dashboard')
@section('title','Users')
@section('section_title','Users')
@section('content')
<div class="container my-3">
    
    <br>
 
    <table class="table table-bordered data-table">
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

</body>
@endsection
@section('script')
<script type="text/javascript">
    $(function () {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('users.index') }}",
            columns: [
                {
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                
            ]
        });
        
</script>
@endsection
