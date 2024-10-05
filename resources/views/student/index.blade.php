<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
    <h1>List of Students</h1>
    <ul>
        @foreach($records as $row)
            <li>{{ $row->name }} - {{ $row->course }} (Year {{ $row->year }})</li>
        @endforeach
    </ul>
</body>
</html>
