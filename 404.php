<?php
/**
 * فایل 404.php
 * نمایش صفحه خطا در صورت نبودن صفحه
 */
get_header(); ?>
<section class="text-center py-20">
	<h1 class="text-5xl font-bold text-red-600 mb-4">۴۰۴</h1>
	<p class="text-lg mb-6">صفحه مورد نظر یافت نشد.</p>
	<a href="<?php echo home_url(); ?>" class="bg-blue-600 text-white px-4 py-2 rounded">بازگشت به صفحه اصلی</a>
</section>
<?php get_footer(); ?>