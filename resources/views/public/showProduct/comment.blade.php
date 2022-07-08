<div class="row single-product-extras">
    <div class="col-md-12">
        <div class="tabbable top">
            <ul class="nav nav-tabs" data-tabs="tabs">
                <li class="active"> <a data-toggle="tab" href="#tab-description">توضیحات</a> </li>
                <li> <a data-toggle="tab" href="#tab-reviews">نظر ها (0)</a> </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab-description">
                    <h3>هودی</h3>
                    <p>هودی با کیفیت</p>
                </div>
                <div class="tab-pane" id="tab-reviews">
                    @if(\Illuminate\Support\Facades\Auth::user())
                        <div class="row" id="reviews">
                            <form action="" class="comment-form" id="commentform" method="post" name="commentform">
                                <div class="form-group">
                                    <label for="comment">نظر شما</label>
                                    <textarea class="form-control" id="comment" name="description" rows="4">{{old('description')}}</textarea>
                                </div>
                                <p class="form-submit">
                                    <input class="btn btn-primary" id="submit" name="submit" type="submit" value="ارسال">
                                    <input name='comment_post_ID' type='hidden' value='60'>
                                    <input name='comment_parent' type='hidden' value='0'> </p>
                            </form>
                            <div class="clear"></div>
                        </div>
                        <hr>
                        <br/>
                    @endif

                        <div class="row" id="reviews">
                            <div class="col-md-12" id="comments">
                                <h3 style="padding-right: 100px;">حسین پورقدیری</h3>
                                <div class="col-md-11" style="border: 3px ; border-style: ridge; height: auto">
                                    لباس خوبیست
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <br/>
                        <br/>
                        <br/>

                </div>

            </div>
        </div>
    </div>
</div>
