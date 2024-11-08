<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" xmlns:fb="http://ogp.me/ns/fb#">
<head>
  <title>{{ $title ?? Helpers::meta((!isset($exception)) ? Route::current()->uri() : '', 'title') }} {{ $additional_title ?? '' }}</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{ $favicon }}">

  <meta name="description" content="{{ Helpers::meta((!isset($exception)) ? Route::current()->uri() : '', 'description') }}">
  <meta name="keywords" content="{{ Helpers::meta((!isset($exception)) ? Route::current()->uri() : '', 'keywords') }}">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
  

  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">  -->
  <!-- {!! Html::style('css/bootstrap.min.css') !!} -->
  {!! Html::style('css/bootstrap.css') !!}
  {!! Html::style('css/font-awesome.min.css') !!}
  {!! Html::style('css/main.css?v='.$version) !!}
  {!! Html::style('css/common.css?v='.$version) !!}
  {!! Html::style('css/common1.css?v='.$version) !!}
  {!! Html::style('css/styles.css?v='.$version) !!}
  {!! Html::style('css/home.css?v='.$version) !!}
  
  {!! Html::style('css/popup.css?v='.$version) !!}

  {!! Html::style('css/jquery.bxslider.css') !!}
  {!! Html::style('css/jquery.sliderTabs.min.css') !!}
  @if (Route::current()->uri() != 'driver_payment')
  {!! Html::style('css/jquery-ui.min.css') !!} 
  @endif

  <link rel="stylesheet" type="text/css" href=" https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">
</head>
<body ng-app="App" class="{{ (!isset($exception)) ? (Route::current()->uri() == '/' ? 'homepage' : '') : '' }} commonpage">

