<?php if(isset($_GET['msg']) && !empty($_GET['msg'])): ?>
   
    <div class="alert alert-<?php echo $_GET['type'] ?>" role="alert">
        <strong> <?php echo $_GET['msg'] ?> </strong>
    </div>
<?php endif ?>