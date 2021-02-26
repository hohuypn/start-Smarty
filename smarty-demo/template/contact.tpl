{extends "template/index.tpl"}
{block name="title"}Contact Page{/block}
{block name="content"}
    <div class="container">
        <div class="row">
            <div class="contact-page">
                <h3>Thông tin liên hệ</h3>
                <div class="contact-content">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-md-4">Tên</div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">Địa chỉ email</div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Nhập email" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">Nội dung</div>
                            <div class="col-md-8">
                                <textarea type="text" class="form-control" name="content" placeholder="Nhập nội dung"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{/block}