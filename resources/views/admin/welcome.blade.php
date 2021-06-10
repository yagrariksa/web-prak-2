@extends('admin.template.admin')

@section('title')
    welcome
@endsection

@section('page-title')
    Selamat Datang "{{ Session::get('admin.akun')->name }}"
@endsection

@section('page-subtitle')
    Halaman utama
@endsection

@section('head')
@endsection

@section('content')
@endsection
