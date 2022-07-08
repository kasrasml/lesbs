@extends('public.layout.index')

@section('content')
    {{--        HEAD IMAGE--}}
    @include('public.home.headImage')
    {{--        HEAD IMAGE--}}
    {{--        LATEST PRODUCTS--}}
    @include('public.home.latestProduct')
    {{--        LATEST PRODUCTS--}}
    {{--        WOMENS PRODUCT--}}
    @include('public.home.womenProduct')
    {{--        WOMENS PRODUCT--}}
    {{--        MENS PRODUCT--}}
    @include('public.home.menProduct')
    {{--        MENS PRODUCT--}}
@endsection
