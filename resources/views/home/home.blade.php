@extends('layouts.main')
@section('container')
    <x-beranda></x-beranda>
    <x-about></x-about>
    <x-education></x-education>
    <x-tools></x-tools>
    <x-galery :galery="$galery"></x-galery>
    <x-contact></x-contact>
@endsection
