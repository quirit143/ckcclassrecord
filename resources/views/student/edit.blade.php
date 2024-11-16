<form action="{{route('student.update',$records->id)}}" method="POST">
    @csrf
    @method('put')
    
    Student Name: <input type="text" name="name" value="{{$records->name}}">
    @error('name')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br>
    
    Course: <input type="text" name="course" value="{{$records->course}}">
    @error('course')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br>
    
    Year: <input type="number" name="year" value="{{$records->year}}">
    @error('year')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br>
    
    <input type="submit" value="Edit Student">
</form>
