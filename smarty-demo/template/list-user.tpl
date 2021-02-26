{extends "template/index.tpl"}
{block name="title"}List User Page{/block}
{block name="content"}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Danh sách người dùng</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Tên</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Ngày</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            {foreach $users as $user}
                                <tr>
                                    <td>{$user.no}</td>
                                    <td>{$user.name}</td>
                                    <td>{$user.phone}</td>
                                    <td>{$user.address}</td>
                                    <td>{$smarty.now|date_format:"%b %e, %Y"}</td>
                                    <td>
                                        <a href="detail-user.php?id={$user.no}" class="btn btn-info">Xem</a>
                                        <a class="btn btn-primary">Cập nhật</a>
                                        <a class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                            {/foreach}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}