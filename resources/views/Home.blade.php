<h1>Home Blade</h1>
<h1>Name : {{$name}}</h1>
<h1>
    Inbuilt function : {{rand()}}
</h1>
<h1>Array User : {{$user[1]}}</h1>

@if ($name=="mehul")
<h2>This is mehul</h2>
@elseif ($name=="Mehul")
<h2>This is Mehul</h2>
@else
<h2>Other User</h2>
@endif

<div>
    @foreach ($user as $u)
    <h3>User :{{$u}}</h3>
        
    @endforeach
</div>

<div>
    @for ($i=1;$i<=5;$i++)
    <h3>Looping :{{$i}}</h3>
        
    @endfor
</div>




@include('common.header')



{{-- <x-message/> --}}