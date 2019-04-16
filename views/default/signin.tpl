<link rel="stylesheet" href="{$templateWebPath}css/register.css" type="text/css">
<div class="parent">
    <div class="child">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-input-tab" data-toggle="tab" href="#nav-input" role="tab" aria-controls="nav-input" aria-selected="true">Sign in</a>
                <a class="nav-item nav-link" id="nav-register-tab" data-toggle="tab" href="#nav-register" role="tab" aria-controls="nav-register" aria-selected="false">Register</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-input" role="tabpanel" aria-labelledby="nav-input-tab">
                <div class="img-parent">
                    <img src="{$templateWebPath}css/img/logo.png">
                </div>
                <div class="old-user" id="login-form">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="email"  placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary" onclick="loginUser()">Sign in</button>
                </div>
                <br/>
            </div>
            <div class="tab-pane fade" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">
                <br/>
                <div class="new-user" id="register-form">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="email" class="form-control" id="new-email" name="new-email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="password" class="form-control" id="pass1" name="pass1" placeholder="Password">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Confirm password">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input class="form-control" id="first-name" name="first-name"  placeholder="First name">
                        </div>
                        <div class="form-group col-md-6">
                            <input class="form-control" id="last-name" name="last-name" placeholder="Last name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input id="birth-date" placeholder="Birth date" name="birth-date" class="form-group col-md-10"/>
                        </div>
                        <div class="form-group col-md-6">
                            <select id="sex" placeholder="Sex" name="sex" class="form-control">
                                <option selected>Not specified</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div>
                    <button id="register_new_user" type="submit" class="btn btn-primary" onclick="registerNewUser()">Submit</button>
                </div>
                <br/>
            </div>
        </div>
    </div>
</div>

<script src="js/register.js"></script>


