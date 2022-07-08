@extends('public.layout.index')
@section('content')
    <section class="section">
        <div class="background-overlay grid-overlay-0 " style="background-color: rgba(240,240,240,1);"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-right element-top-30 element-bottom-30 text-normal normal regular" data-os-animation="none" data-os-animation-delay="0s">
                        نمایش محصولات
                    </h1> </div>
            </div>
        </div>
    </section>
    <section class="section section-commerce">
        <div class="container element-top-50 element-bottom-50">
            <div class="row">
                @include('public.showCategory.main')
                {{--side--}}
                <div class="col-md-3">
                    <div class="sidebar-widget">
                        <form role="search" method="get" id="searchform">
                            <div class="input-group">
                                <ol class="breadcrumb">
                                    <li><a class="home" href="{{ route('home') }}">خانه</a></li>

                                </ol>
                            </div>
                        </form>
                    </div>
                    @include('public.showCategory.menSideBar')
                    @include('public.showCategory.womenSideBar')
                    @include('public.showCategory.tagSideBar')
                </div>
            </div>
        </div>
    </section>
@endsection
