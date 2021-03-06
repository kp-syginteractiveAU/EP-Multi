@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('admin.partials.filters')
            @if ( count($entries) === 0 )
              <div class="alert alert-success" role="alert">
                No entries!
              </div>            
            @else
            	@include('admin.partials.todo')
                {{ $entries->appends( request()->only(['q', 'approved', 'competition']) )->links() }}
            @endif
        </div>
    </div>
</div>
@endsection