<form action="{{ route('student.store')}}" method="POST">
    @csrf
    
    Student Name: <input type="text" name="name" value="{{ old('name') }}">
    @error('name')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br>
    
    Course: <input type="text" name="course" value="{{ old('course') }}">
    @error('course')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br>
    
    Year: <input type="number" name="year" value="{{ old('year') }}">
    @error('year')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br>
    
    <input type="submit" value="Add Student">
</form>
