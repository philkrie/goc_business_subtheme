<?php dpm($fields); ?>
<div class ="image">
    <?php print $fields["field_pic"]->content; ?>
    <div class="contenthover">
    <h3><?php print $fields["title"]->content; ?></h3>
    <p><?php print $fields["body"]->content; ?></p>
        <?php print $fields['field_path']->content; ?>
    </div>
</div>

<!--[field_pic]

