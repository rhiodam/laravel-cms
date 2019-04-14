<?php
/**
 * Created by PhpStorm.
 * User: Sickware
 * Date: 4/13/2019
 * Time: 1:41 PM
 */

?>


@extends('layouts.app')

@section('content')

    <h2>Post :{{ $id }}
        username :
        {{$username}}
        password :
        {{$password}}
    </h2>
@stop



@section('footer')

@endsection