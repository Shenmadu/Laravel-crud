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
            
            <form method="POST" action="{{ route('Student.update', $students->id) }}">
                @csrf                
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $students->name }}" >

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail" value="{{ $students->email }}" >
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </body>

    </html>
@endsection
