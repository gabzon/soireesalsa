<?php

function get_the_color($color){
    switch ($color) {
        case 'red':     $website_color = '#DB2828'; break;
        case 'orange':  $website_color = '#F2711C'; break;
        case 'yellow':  $website_color = '#FBBD08'; break;
        case 'olive':   $website_color = '#B5CC18'; break;
        case 'green':   $website_color = '#21BA45'; break;
        case 'teal':    $website_color = '#00B5AD'; break;
        case 'blue':    $website_color = '#2185D0'; break;
        case 'violet':  $website_color = '#6435C9'; break;
        case 'purple':  $website_color = '#A333C8'; break;
        case 'pink':    $website_color = '#E03997'; break;
        case 'brown':   $website_color = '#A5673F'; break;
        case 'grey':    $website_color = '#767676'; break;
        case 'black':   $website_color = '#1B1C1D'; break;
    }
    return $website_color;
}

?>
