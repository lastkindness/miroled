<?php
$lottie = get_sub_field('lottie');
?>

<!-- Fullwidth lottie front - Taranukha -->
<section class="fade-content lottie-fullwidth">

    <?php if ($lottie): ?>
            <div src="<?php echo $lottie['url']; ?>" class="lottie-container"></div>
    <?php endif; ?>

</section>

