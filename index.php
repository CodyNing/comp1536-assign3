<?php include("include/header.php");?>
<div class="row">
    <form action="authenticate.php" method="post" class="form-horizontal">
        <div class="col-sm-3 col-sm-offset-9">
            <input type="hidden" id="email" name="email" value=""/>
            <input type="hidden" id="password" name="password" value=""/>
            <input type="hidden" id="logout" name="logout" value=""/>
            <button type="submit" class="bth bth-default">Logout</button>
        </div>
    </form>
    <div class="col-sm-10 col-sm-offset-2"><h1>Math game</h1></div>
</div>