<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   ID  {{$records->id}}<br>
   Name {{$records->name}}<br>
   Course {{$records->course}}<br>
   Year {{$records->year}}<br>
    {{$records->created_at}}<br>
    {{$records->update_at}}<br>

    <a href="{{route('student.edit',$records->id)}}">Edit</a>
    
    <form action="{{route('student.delete',$records->id)}}" method="post">
        @csrf
        @method('delete')
        <button onclick="return confirm('Are you sure you want to delete?');">DELETE</button>
    </form>
</body>
</html>
