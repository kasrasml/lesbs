@extends('public.layout.index')

@section('content')
    <article>
        <section class="section">
            <div class="background-overlay" style="background-color: rgba(240,240,240,1);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-right element-top-30 element-bottom-30 normal regular">
                            سوالات متدوال
                        </h1>
                    </div>
                </div>
            </div>
        </section>
        @include('public.FAQ.buy')
        @include('public.FAQ.gateway')
    </article>
@endsection
