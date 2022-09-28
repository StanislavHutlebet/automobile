<?php

$args = Kir\Helpers::prepareArgsForGuttenbergBlock(
    [],
    (isset($args) ? $args : []),
    (isset($block) ? $block : [])
);

Kir\App::getInstance()->loadClass('CSS')->addCSS(
    'slider-text-auto-block',
    get_template_directory_uri() . '/partials/blocks/ider-text-auto/style.css',
    false
);

$image = get_field('image');
$title = get_field('title');
$text  = get_field('text');

?>
<section class="hero-block section">
    <?php if (!empty($image)) : ?>
        <div class="hero-block__background">
            <img
                    src="<?php echo $image['url']; ?>"
                    alt="<?php echo esc_url($image['title']); ?>"/>
        </div>
    <?php endif; ?>
    <div class="hero-block_content">

        <?php if (!empty($title)) : ?>
            <h1 class="hero-block__title">
                <?php echo $title; ?>
            </h1>
        <?php endif; ?>
        <?php if (!empty($text)) : ?>
            <div class="hero-block__description">
                <?php echo $text; ?>
            </div>
        <?php endif; ?>
    </div>
</section>