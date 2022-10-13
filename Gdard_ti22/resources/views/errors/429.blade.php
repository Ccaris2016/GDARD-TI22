@extends('errors::minimal')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', 'Se han realizado muchas peticiones en simultáneo')
