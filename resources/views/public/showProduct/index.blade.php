@extends('public.layout.index')
@section('content')
    <section class="section section-commerce">
        <div class="container element-top-50 element-bottom-50">
            <ol class="breadcrumb">
                <li><a class="home" href="{{ route('home') }}">خانه</a></li>

            </ol>

            <div class="product">
                @include('public.showProduct.product')
                <!-- .summary -->
                @include('public.showProduct.comment')
                @include('public.showProduct.latestProduct')
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        function increment() {
            document.getElementById('demoInput').stepUp();
        }

        function decrement() {
            document.getElementById('demoInput').stepDown();
        }
    </script>
@endsection
