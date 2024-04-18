@extends('layouts.app', [
    'title' => 'Bagian 1',
])

@section('konten')
@include('pages.bag-1.form-input')
@include('pages.bag-1.hasil-input')
@endsection

@push('js-konten')
@endpush
