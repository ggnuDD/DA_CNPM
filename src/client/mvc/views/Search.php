<?php
$DOMAIN = 'http://localhost/POS/src/client';
?>

<?php if ($data) {
    foreach ($data as $key => $item) {
?>
        <div class="item-search-1 item-search-box mt-3 mb-2">
            <a href="<?php echo $DOMAIN ?>/DetailItem/getDetailItem/<?php echo $item['id'] ?>">
                <div class="image">
                    <img src="http://localhost/POS/src/images/<?php echo $item['image'] ?>" alt="">
                </div>
                <div class="name" style="color: white;">
                    <?php echo $item['name'] ?>
                </div>
            </a>
        </div>
<?php
    }
} ?>