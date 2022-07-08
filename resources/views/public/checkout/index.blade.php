@extends('public.layout.index')

@section('content')
    <section class="section">
        <div class="background-overlay" style="background-color: rgba(240,240,240,1);"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-right element-top-30 element-bottom-30 normal regular">
                        پرداخت
                    </h1> </div>
            </div>
        </div>
    </section>
    <div class="woocommerce">
        <section class="section section-commerce">
            <div class="container element-top-50 element-bottom-50">

                <form action="" class="checkout" id="checkout" method="post" name="checkout">

                    <div class="row">
                        <div class="col-md-6 pull-right">
                            <h3>آدرس پیش فرض</h3>

                                <div class="checkbox">

                                        <label><input value="1" class="input-checkbox" name="previousAddress" type="radio">گیلان - رشت<p></p></label>

                                </div>
                                <div class="clear"></div>
{{--                                <p>آدرس پیش فرضی وجود ندارد</p>--}}
                        </div>
                        <div class="col-md-6">
                            <div class="checkbox" id="ship-to-different-address">
                                <label>
                                    <input class="input-checkbox" name="newAddress" type="checkbox" value="1">
                                    <h3>ارسال به آدرس جدید</h3> </label>
                            </div>

                            <p>
                                <label>کد ناحیه </label>
                                <input class="country_to_state form-control" list="zoneID" name="zoneID">
                                <datalist id="zoneID">
                                        <option value="1"> گیلان - رشت - گلسار </option>
                                </datalist>
                            </p>
                            <p>
                                <label> جزئیات آدرس  </label>
                                <input class="input-text form-control" name="detail" placeholder="" type="text"> </p>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <h3 class="element-top-20">اطلاعات فردی</h3>
                    <div>
                        <table class="shop_table table table-bordered">
                            <thead>
                            <tr>
                                <th>اطلاعات فردی</th>
                                <th>اطلاعات تماس</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td rowspan="2">نام وجود ندارد </td>
                                <td><span>شماره تماس وجود ندارد </span></td>
                            </tr>
                            <tr>

                                <td><span>پست الکترونیک وجود ندارد </span></td>
                            </tr>


                            </tbody>
                        </table>

                    </div>
                    <h3 class="element-top-20">فاکتور شما</h3>
                    <div>
                        <table class="shop_table table table-bordered">
                            <thead>
                            <tr>
                                <th>محصول</th>
                                <th>جمع قیمت</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr class="info">
                                <th>جمع محصولات</th>
                                <td>

                                          500000ريال

{{--                                        فاکتوری وجود ندارد--}}

                                </td>
                            </tr>
                            <tr class="info">
                                <th>هزینه ارسال</th>
                                <td>رایگان</td>
                            </tr>
                            <tr class="danger">
                                <th>کد تخفیف</th>
                                <td>

                                                کسر  10000 ريال
{{--                                                کسر  درصد--}}

{{--                                        توکن تخفیفی برای شما ثبت نشده است--}}
                                    </td>
                            </tr>
                            <tr class="success">
                                <th>مبلغ کل فاکتور</th>
                                <td><strong><span>800000 ریال</span></strong></td>
                            </tr>
                            </tfoot>
                            <tbody>

                                    <tr>
                                        <td> هودی <strong>&times; 1</strong></td>
                                        <td><span>



                                                    500000

                                                    </span>ریال</td>
                                    </tr>

{{--                                <td>محصول وجود ندارد <strong>&times; 0</strong></td>--}}
{{--                                <td><span>0 ریال</span></td>--}}

                            </tbody>
                        </table>
                        <div id="payment">

                            <div class="form-row place-order">

                                <div class="checkbox">
                                    <label>
                                        <input class="input-checkbox" id="terms" name="terms" type="checkbox"> من کلیه  <a href="{{ route('TR') }}" target="_blank">قوانین و مقررات</a> را می پذیرم</label>
                                </div>
                                <input class="btn btn-success btn-lg pull-right alt" data-value="Place order" type="submit" value="پرداخت">
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
