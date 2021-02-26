{extends "template/index.tpl"}
{block name="title"}Shopping Cart Page{/block}
{block name="content"}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Giỏ hàng</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Ngày</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>{$name}</td>
                                <td>{number_format($price, 0, ',')} đồng</td>
                                <td class="cart-quantity">
                                    <button>-</button>
                                    <input type="text" class="form-control txt-cart-quantity" name="quantity" value="{$quantity}">
                                    <button>+</button>
                                </td>
                                <td>{$smarty.now|date_format:"%b %e, %Y"}</td>
                                <td>
                                    <a class="btn btn-info">Cập nhật</a>
                                    <a class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-action">
                        <div class="col-md-6">
                            <a class="btn btn-primary btn-redirect-back" href="display.php">Quay lại trang chủ</a>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-primary btn-redirect-to-checkout" href="checkout.php">Tiến hành thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}