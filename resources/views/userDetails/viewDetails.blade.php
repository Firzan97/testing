@extends('base')
@section('main')
  @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<p>DATA SAVED<p>
<P>Proceed?<p>
@endsection