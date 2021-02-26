{extends "template/index.tpl"}
{block name="title"}Register User Page{/block}
{block name="content"}
    <section>
        <div class="container">
            <div class="row">
                <div class="form-register">
                    <div class="title">Register Account</div>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label for="">Name</label>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label for="">Email</label>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label for="">Password</label>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label for="">Phone</label>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your phone number" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label for="">Address</label>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <input type="text" class="form-control" name="address" id="address" placeholder="Enter your address" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label for="">Gender</label>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <select class="form-control" name="gender" id="gender" value="">
                                    <option value="">Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label for="">Birthday</label>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <input type="date" class="form-control" name="birthday" id="birthday" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <span>You have a account?</span><a class="redirect-to-login" href="login.php"> Click here to login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
{/block}