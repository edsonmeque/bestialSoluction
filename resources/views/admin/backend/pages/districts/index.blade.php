@extends('layouts.app')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/custom_dt_custom.css')}}">
@endsection


@section('content')
    <livewire:district.district-component />
@endsection

@section('scripts')
<script src="{{asset('sweetalert2@11.js')}}"></script>
<script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
@endsection
