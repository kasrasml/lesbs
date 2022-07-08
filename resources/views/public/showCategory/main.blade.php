<div class="col-md-9">
    <div class="row">
        <div class="col-md-6 text-left">
            <form role="search" method="get" id="searchform">
                <div class="input-group">
                    <input type="text" value name="s" class="form-control" placeholder="محصول مورد نظر خود را وارد کنید"> <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit" id="searchsubmit" value="">
                                    <i class="fa fa-search"></i>
                                    </button>
                                    <input type="hidden" name="post_type" value="product">
                                </span>
                </div>
            </form>
        </div>
        <div class="col-md-6 text-left">
            <p class="woocommerce-result-count pull_right"> تعداد کل محصول: 9 </p>
            <form class="woocommerce-ordering" method="get">
                <select name="orderby" class="orderby">
                    <option value="menu_order" selected='selected'>جدید ترین</option>
                    <option value="popularity">قدیمی ترین</option>
                    <option value="rating">ارزان ترین</option>
                    <option value="date">گران ترین</option>
                </select>
            </form>
        </div>
    </div>
    <div class="row">
        <ul class="products list-container">

            <li class="product col-md-4 sale pull-right">
                <span class="onsale">تخفیف</span>
                <a href="{{route('showProduct')}}">
                    <div class="product-image">
                        <div class="product-image-front"> <img width="700" height="893" src="{{asset('public')}}/assets/images/shop/hoodie1-1-90x114.jpg" alt="skirt4-1" /> </div>
                        <div class="product-image-back"> <img src="{{asset('public')}}/assets/images/shop/hoodie1-1-90x114.jpg" alt="" /> </div>
                        <div class="product-image-overlay">
                            <h4>جزئیات</h4> </div>
                    </div>
                </a>
                <div class="product-info">
                    <h3 class="product-title">
                        <a href="">هودی</a>
                    </h3> <span class="product-categories">


                                                    <a href="" rel="tag">پیشفرض</a>,


                                </span>
                    <h3 class="price">

                        <del>
                            <span class="amount">9000000 ریال</span>
                        </del>
                        <ins>
                                <span class="amount">
                                    700000 ریال</span>
                        </ins>

                    </h3>
                    <a href="" rel="nofollow" class="add-to-cart-button add_to_cart_button product_type_simple">
                        <i class="icon-bag"></i></a> </div>
            </li>
        </ul>
    </div>
</div>
