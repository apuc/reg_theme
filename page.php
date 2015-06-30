<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <?php wp_head(); ?>
    <title></title>
</head>
<body class="fuelux">

<div class="cont">


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>


    <?php endwhile; ?>
    <?php endif; ?>

</div>

<div class="myModalWrap">
    <div class="modalBody">
        <div id="close-modal" class="close-m">X</div>
        <h3>Выберите основной вид деятельности:</h3>
        <?php
        $par_id = get_all_parent_id();
        echo "<div id='okved'></div>";
        foreach($par_id as $id){
            get_tree($id);
        }
        ?>
        <p><a href="#" onclick="return false" id="close-modal">Готово</a></p>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>