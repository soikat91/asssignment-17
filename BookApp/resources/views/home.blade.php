<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template</title>
</head>
<body>
    
    @extends('layouts.app')

    @section('content')
    
    @include('componants.hero')
    @include('componants.howtodo')
    @include('componants.pricing')
    @include('componants.team')
    @include('componants.newsletter')

    @endsection

</body>
</html>