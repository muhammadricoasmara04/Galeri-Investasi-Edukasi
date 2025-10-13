@extends('layouts.main')
@section('container')
    <x-beranda id="beranda"></x-beranda>
    <x-about  id="about"></x-about>
    <x-education id="education"></x-education>
    <x-tools id="tools"></x-tools>
    <x-galery id="galery" :galery="$galery"></x-galery>
    <x-contact id="contact"></x-contact>
@endsection
