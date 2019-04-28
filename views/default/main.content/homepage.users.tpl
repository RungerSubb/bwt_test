<div class="user-back">
    <br/>
    <div class="img-parent">
        <img src="{$templateWebPath}css/img/user.png">
    </div>
    <br/>
    <form method="POST" action="/user/logout/" class="old-user" id="user-info-form">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">First name</span>
            </div>
            <input type="text" class="form-control" id="info-name" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="{$name}" disabled>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Last name</span>
            </div>
            <input type="text" class="form-control" id="info-lastName" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="{$lastName}" disabled>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
            </div>
            <input type="text" class="form-control" id="info-email" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="{$email}" disabled>
        </div>
        <br/>
        <button type="submit" class="btn btn-primary" id="logoutBtn">Log out</button>
    </form>
    <br/>
</div>