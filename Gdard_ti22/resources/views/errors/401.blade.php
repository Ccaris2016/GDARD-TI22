@extends('errors::minimal')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', 'No tiene autorizado abrir la página seleccionada')
