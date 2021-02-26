{extends "template/index.tpl"}
{block name="title"}Login Page{/block}
{block name="content"}
    <section>
        <div class="container">
            <div class="row">
                <div class="form-register">
                    <div class="title">Login Account</div>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label for="">Email</label>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label for="">Password</label>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">

                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <span>If you don't have an account?</span><a href="register.php"> Click here</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
{/block}