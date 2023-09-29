<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div  class="container">
<?php
if ($current_page > 3) {
    $first_page = 1;
    ?>
    <a class="alert-link" href="?per_page=<?= $item_per_page ?>&page=<?= $first_page ?>">Trang Đầu</a>
    <?php
}
if ($current_page > 1) {
    $prev_page = $current_page - 1;
    ?>
    <a class="alert-link" href="?per_page=<?= $item_per_page ?>&page=<?= $prev_page ?>">Trở Về Trang Trước</a>
   
<?php }
?>
<?php for ($num = 1; $num <= $totalPages; $num++) { ?>
    <?php if ($num != $current_page) { ?>
        <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
           
            <a class="alert-link" href="?per_page=<?= $item_per_page ?>&page=<?= $num ?>"><?= $num ?></a>
        <?php } ?>
    <?php } else { ?>
        <strong class="alert-link"><?= $num ?></strong>
    <?php } ?>
<?php } ?>
<?php
if ($current_page < $totalPages - 1) {
    $next_page = $current_page + 1;
    ?>
    <a class="alert-link" href="?per_page=<?= $item_per_page ?>&page=<?= $next_page ?>">Trang Tiếp </a>
<?php
}
if ($current_page < $totalPages - 3) {
    $end_page = $totalPages;
    ?>
    <a class="alert-link" href="?per_page=<?= $item_per_page ?>&page=<?= $end_page ?>">Trang Cuối</a>
    <?php
}
?>
</body>
</html>