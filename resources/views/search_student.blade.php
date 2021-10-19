<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
<div class="container mt-5">
        <h2 class="text-center mb-3">Laravel HTML to PDF Example</h2>

        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="{{ URL::to('#') }}">Export to PDF</a>
        </div>

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">DOB</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts  as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->email }}</td>
                    <td>{{ $post->dob }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
</body>
</html>