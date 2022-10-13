@extends('errors::minimal')

@section('title', __('Method Not Allowed'))
@section('code', '405')
@section('message', 'Método solicitado no admitido')