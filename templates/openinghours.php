<?php
$en = ['MO','TU','WE','TH','FR','SA','SU','CLOSED'];
$nl = ['MA','DI','WO','DO','VR','ZA','ZO','GESLOTEN'];
$allowed_html = [
        'li' => [],
    'span' => [],
];
?>

<ul class="salonkee__opening__hours">
    <?php
    foreach ($openinghours as $day):
        if(is_array($day['alias'])) {
            echo wp_kses('<li><span>' . str_ireplace($en, $nl, $day['alias']['first']) . ' - ' . str_ireplace($en, $nl, $day['alias']['last']) . '</span><span>' . str_ireplace($en, $nl, $day['state']) . '</span></li>', $allowed_html);
        } else {
            echo wp_kses('<li><span>' . str_ireplace($en, $nl, $day['alias']) . '</span><span>' . str_ireplace($en, $nl, $day['state']) . '</span></li>', $allowed_html);
        }
    endforeach;
    ?>
</ul>