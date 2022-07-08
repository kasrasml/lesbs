@extends('public.home.index')

@section('content')
    <section class="section">
        <div class="background-overlay" style="background-color: rgba(240,240,240,1);"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-right element-top-30 element-bottom-30 normal regular">
                        سبد خرید
                    </h1> </div>
            </div>
        </div>
    </section>
    <section class="section section-commerce">
        <div class="container">
            <div class="row element-top-50 element-bottom-50">
                <div class="col-md-12">

                    <div class="table-responsive">
                        <table cellspacing="0" class="shop_table cart table element-bottom-20">
                            <thead>
                            <tr>
                                <th class="product-remove">&nbsp;</th>
                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">محصول</th>
                                <th class="product-price">قیمت</th>
                                <th class="product-quantity">تعداد</th>
                                <th class="product-subtotal">قیمت کل</th>
                            </tr>
                            </thead>
                            <tbody>


                                    <tr class="cart_item">
                                        <td class="product-remove">
                                            <a href="" class="remove" title="Remove this item"> <i class="icon-cross"></i> </a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="shop-simple-product.html"> <img src="{{asset('public')}}/assets/images/shop/hoodie1-1-90x114.jpg" alt="hoodie1-1" height="114" src="" width="90"> </a>
                                        </td>
                                        <td class="product-name"> <a href="shop-simple-product.html"> هودی</a> </td>

{{--                                            <td class="product-price">--}}
{{--                                                <del class="amount">10000 ریال</del>--}}
{{--                                                <span class="amount">10000 ریال</span>--}}
{{--                                            </td>--}}

                                            <td class="product-price"><span class="amount">50000 ریال</span></td>

                                        <td class="product-quantity">
                                            <div class="quantity">
                                                <a href=""><input type="button" value="-" class="minus"></a>
                                                <input class="input-text qty text" min="1" name="quantity" step="1" title="demoInput" type="number" value="1">
                                                <a href=""><input type="button" value="+" class="plus"></a>
                                            </div>
                                        </td>

                                            <td class="product-subtotal"><span class="amount">500000</span> ریال </td>

                                    </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <form action="" method="get">
                            <div class="col-md-6 element-bottom-20">
                                <div class="input-group">
                                    <input class="input-text form-control" id="coupon_code" name="token" placeholder="کد تخفیف خود را وارد کنید"> <span class="input-group-btn">
                                            <input class="btn btn-primary" name="apply_coupon" type="submit" value="ثبت کد تخفیف"></span>
                                </div>
                            </div>
                        </form>
                        <div class="col-md-6 element-bottom-20">
                            <a href="{{route('checkout')}}"><button class="btn btn-success btn-block" name="proceed" type="submit" value="true"> ثبت و ارسال جهت پرداخت <i class="fa fa-shopping-cart"></i> </button></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="cart_totals">
                        <table cellspacing="0" class="table">
                            <thead>
                            <tr>
                                <th class="text-center" colspan="2">جمع بندی سبد خرید</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="cart-subtotal">
                                <th>جمع کل سبد خرید</th>
                                <td><span class="amount"> 555555</span> ریال </td>
                            </tr>
                            <tr class="shipping">
                                <th>هزینه ارسال</th>
                                <td>رایگان
                                    <input class="shipping_method" data-index="0" type="hidden" value="free_shipping">
                                </td>
                            </tr>
                            <tr class="cart-subtotal danger">
                                <th>کد تخفیف</th>
                                <td><span class="amount">

{{--                                                    کسر {{(int) $dis->price}} ريال--}}

{{--                                                    کسر {{(int) $dis->percent}} درصد--}}


                                            توکن تخفیفی برای شما ثبت نشده است

                                                    </span></td>
                            </tr>
                            <tr class="order-total success">
                                <th>مبلغ نهایی</th>
                                <td><strong><span class="amount">
                                                        8888888 ریال
                                                    </span></strong></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row element-top-20">
                <div class="col-md-12"></div>
            </div>
        </div>
    </section>
@endsection
