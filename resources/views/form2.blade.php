@extends('layouts.form')

@section('title')
    Form Put
@endsection

@section('h1')
    Form Put
@endsection

@section('action')
    {{ route('hasilPut') }}
@endsection

@section('methid')
    {{ method_field('PUT') }}
@endsection