<?php
/**
 * Search form template
 *
 * @package ANSA_Solutions
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="s" class="screen-reader-text"><?php esc_html_e('Search for:', 'ansa-solutions'); ?></label>
    <div class="input-group">
        <input type="search" id="s" class="search-field" placeholder="<?php esc_attr_e('Search...', 'ansa-solutions'); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s" />
        <button type="submit" class="search-submit btn btn-primary">
            <?php esc_html_e('Search', 'ansa-solutions'); ?>
        </button>
    </div>
</form>
