@extends('layouts.app')

@section('content')
<form method="post" action="{{url('store')}}">
	@csrf
	<div>
		<label for="name">Name</label>
		<input id="name" type="text" name="name"/>
	</div>

	<div>
		<label for="email">Email</label>
		<input id="email" type="email" name="email"/>
	</div>

	<div>
		<label for="message">Message</label>
		<textarea id="message" name="message"></textarea>
	</div>

	<button>Submit</button>
</form>

@if ($errors->any())
    <div style="color: red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
