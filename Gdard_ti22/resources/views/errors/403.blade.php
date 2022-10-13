@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', 'No tiene los permisos necesarios para entrar en el directorio')
