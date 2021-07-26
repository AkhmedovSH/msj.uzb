@extends('admin.layout')
@section('content')

<child-categories :id={{ $id }} :category={{ $category }}></child-categories>

@endsection