<link rel="stylesheet" href="{$templateWebPath}css/feedback.list.css" type="text/css">

<div id="fdb-all">
    {foreach $feedbackArray as $item}
        <div class="fdb-base">
            <br/>
            <div class="fdb-child">
                <br/>
                <form class="fdb-main">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" >Name</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="{$item.name}" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Email</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="{$item.email}" disabled>
                    </div>
                    <textarea class="form-control message" rows="5" readonly>{$item.message}</textarea>
                    <br/>
                </form>
            </div>
        </div>
    {/foreach}
</div>
<br/>
<br/>