<?php
function breadcrumbs($title, $link)
{
    ?>
    <!-- Breadcrumbs -->
    <div class="tw-relative tw-pt-32 tw-pb-16 tw-bg-gradient-to-b tw-from-zinc-900 tw-via-black tw-to-black tw-border-b tw-border-white/10 tw-text-center">
        <div class="tw-max-w-7xl tw-mx-auto tw-px-4 sm:tw-px-6 lg:tw-px-8">
            <h1 class="tw-text-3xl md:tw-text-5xl tw-font-bold tw-text-white tw-tracking-tight tw-mb-4"><?php echo $title; ?></h1>
            <nav class="tw-flex tw-items-center tw-justify-center tw-gap-2 tw-text-xs tw-font-semibold tw-tracking-widest tw-uppercase tw-text-gray-400">
                <a href="/index.php" class="hover:tw-text-pink-400 tw-transition-colors">Home</a>
                <span class="tw-text-gray-600">/</span>
                <span class="tw-text-pink-500"><?php echo $link; ?></span>
            </nav>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <?php
}
?>