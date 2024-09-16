<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="bg-gray-900 text-white p-5">
        <h1 class="text-3xl font-bold"><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
    </header>

    <main class="p-10">
        <h2 class="text-2xl font-semibold mb-4">My Portfolio</h2>
        <!-- Portfolio content will go here -->
    </main>

    <footer class="bg-gray-800 text-white text-center p-4">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
