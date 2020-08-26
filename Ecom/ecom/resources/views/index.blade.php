@extends('admin.layouts.main')

@section('content')

@foreach($products as $product)
		{{$product->name}}
		<p>
			
			{!!$product->description!!}

		</p>
@endforeach



<form method="post" action="{{route('store')}}">@csrf
	<input type="text" name="name">

	
  <textarea id="summernote" name="description"></textarea>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection