<?php
session_start();
require ('connection.php');
require ('layouts/header.php')?>
    <br>
    <br>
    <br>
    <br>
    <br>
<div class="container">
    <form action="/process/upload.php" method="post" enctype="multipart/form-data">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01"
                   aria-describedby="inputGroupFileAddon01" name="img[]" multiple accept=".jpg,.png,.jpeg">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>

    </div>
        <br>
            <input type="submit" class="btn btn-success" value="Добавить">

    </form>
</div>
    <br>
    <br>
    <br>
    <br>
    <br> <br>
    <br>
    <br>
    <br>
    <br>
<?php
include ('layouts/footer.php');