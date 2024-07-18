@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>  


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>All Students</h1>       

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
               
              </tr>
            </thead>
            @foreach ($students as $student)
              <tr>
                <th scope="row">{{ $student->id }}</th>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>
                    <a href="{{ route('Student.edit', $student->id) }}" class="btn btn-primary">Edit</a> 
                    <form action="{{ route('Student.destroy', $student) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger mt-2">Delete</button>
                    </form>
                </td>
                
              </tr>
                
            @endforeach
          </table>
    </div>
    
</body>
</html>
@endsection