@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style = "text-align:center">Добро пожаловать, {{Auth::user()->name}} !
               <form method="post" action="{{ route('upload_file') }}" enctype="multipart/form-data">
					<input name="_token" type="hidden" value="{{ csrf_token() }}">
					<input type="file" multiple name="file[]">
					<button type="submit">Загрузить</button>
				</form>
				
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
