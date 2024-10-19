<!-- resources/views/student/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
    <h1>Student List</h1>

    <!-- Search Form -->
    <form action="{{ route('student.index') }}" method="GET">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name">
        <button type="submit">Search</button>
    </form>

    <!-- Display Results -->
    <ul>
        @if($records->isEmpty())
            <li>No students found.</li>
        @else
            @foreach($records as $student)
                <li>{{ $student->name }}</li>
            @endforeach
        @endif
    </ul>
</body>
</html>