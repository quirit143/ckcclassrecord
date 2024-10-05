
@php

echo "hello";
$a=5;
@endphp

<!-- //TODO : if Statement -->

@if($a>0)
<h1>Greater than 0</h1>
@else
<h1>Lesser than 0</h1>
@endif

<!-- TODO retrieve data from db -->

    @if($age>18)
    <h1>Your name is {{$name}} and you are an ADULT with age {{$age}}</h1>
    @else
    <h1>Your name is {{$name}} and you are an MINOR with age {{$age}}</h1>
    @endif

    @while($age >= 0)
    <input type="radio" name="$age">
    <input type="radio" name="$age">
    <input type="radio" name="$age">
    <input type="radio" name="$age">
    <input type="radio" name="$age">
    <br>
    @php
        $age--;
    @endphp
    @endwhile
