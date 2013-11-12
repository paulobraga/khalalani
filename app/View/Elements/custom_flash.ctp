<div class="alert <?php echo (isset($type) ? $type : ''); ?> no-margin-top">
    <span class="icon"></span>
    <strong><?php echo __((isset($type) ? mb_convert_case($type, MB_CASE_TITLE, "UTF-8") : '')).'!'; ?>&nbsp;&nbsp;</strong><?php echo (isset($message) ? $message : 'Something went wrong' ); ?>
</div>