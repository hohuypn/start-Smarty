{extends "template/index.tpl"}
{block name="title"}Checkout Page{/block}
{block name="content"}
    <div class="container-fluid">
        <div class="row">
            <div class="checkout-page">
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <h3>Thông tin người mua hàng</h3>
                        <div class="form-group">
                            <div class="col-md-3">Tên</div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3">Số điện thoại</div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Nhập số điện thoại" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3">Email</div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Nhập địa chỉ email" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3">Địa chỉ</div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="address" id="address" placeholder="Nhập địa chỉ" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Thông tin sản phẩm</h3>
                        <div class="checkout-product">
                            <div class="form-group">
                                <div class="col-md-3">Tên sản phẩm</div>
                                <div class="col-md-9">Giày thể thao nam</div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">Giá</div>
                                <div class="col-md-9">150,000 đồng</div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">Số lượng</div>
                                <div class="col-md-9">2</div>
                            </div>
                        </div>
                        <div class="checkout-total">
                            <div class="form-group">
                                <div class="col-md-3">Tổng giá</div>
                                <div class="col-md-9">300,000 đồng</div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-submit-form">
                        <a type="submit" class="btn btn-success btn-checkout">Thanh toán</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
{/block}