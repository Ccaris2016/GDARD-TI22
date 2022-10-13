@extends('errors::minimal')

@section('title', __('Conflict'))
@section('code', '409')
@section('message', 'La operación falló porque se intentó crear un recurso que ya existe')