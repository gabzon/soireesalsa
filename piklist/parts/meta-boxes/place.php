<?php
/*
Title: Place information
Post Type: place
*/

## Contact custom fields -------------------------------------------------------

piklist('field', array(
    'type'      => 'text',
    'field'     => 'place_email',
    'label'     => __('Email','sage'),
    'columns'   => 6
));

piklist('field', array(
    'type'      => 'text',
    'field'     => 'place_phone',
    'label'     => __('Phone','sage'),
    'columns'   => 6
));

piklist('field', array(
    'type'      => 'text',
    'field'     => 'place_website',
    'label'     => __('Website','sage'),
    'columns'   => 12
));

$place_address = array(
    'type'      => 'text',
    'field'     => 'place_address',
    'label'     => __('Address','sage'),
    'columns'   => 12
);

$place_npa = array(
    'type'      => 'text',
    'field'     => 'place_npa',
    'label'     => __('CP','sage'),
    'columns'   => 2
);
$place_city = array(
    'type'      => 'text',
    'field'     => 'place_city',
    'label'     => __('City','sage'),
    'columns'   => 4
);

$place_map_link = array(
    'type'      => 'text',
    'field'     => 'place_map_link',
    'label'     => __('Map link','sage'),
    'columns'   => 6
);

$place_map = array(
    'type'      => 'textarea',
    'field'     => 'place_map',
    'help'      => __('Maps should be a width:600 and height:300','sage'),
    'label'     => __('Map','sage'),
    'columns'   => 12,
    'attributes'    => array('rows' => 5)
);

## Contact group fields
piklist('field', array(
    'type'      => 'group',
    'label'     => __('Place contact','sage'),
    'fields'    => array(
        $place_address,
        $place_npa,
        $place_city,
        $place_map_link,
        $place_map
    )
));

## Salsa week days -------------------------------------------------------------

$salsa_days = array(
    'type'    => 'select',
    'field'   => 'place_salsa_days',
    'label'   => 'Day',
    'list'    => true,
    'columns' => 4,
    'choices' => array(
        ''                     => '',
        __('Monday','sage')    => __('Monday','sage'),
        __('Tuesday','sage')   => __('Tuesday','sage'),
        __('Wednesday','sage') => __('Wednesday','sage'),
        __('Thursday','sage')  => __('Thursday','sage'),
        __('Friday','sage')    => __('Friday','sage'),
        __('Saturday','sage')  => __('Saturday','sage'),
        __('Sunday','sage')    => __('Sunday','sage')
    )
);

$place_price = array(
    'type'      => 'text',
    'field'     => 'place_price',
    'label'     => __('Price','sage'),
    'columns'   => 4
);

$place_salsa_schedule = array(
    'type'      => 'text',
    'field'     => 'place_salsa_schedule',
    'label'     => 'Schedule',
    'columns'   => 4
);

$place_styles = array(
    'type'      => 'text',
    'field'     => 'place_styles',
    'help'      => __('Write all the dancing styles separated by a comma (,)'),
    'label'     => __('Styles','sage'),
    'columns'   => 12
);

$place_schedule_comment = array(
    'type'    => 'text',
    'field'   => 'place_schedule_comment',
    'label'   => 'Comment',
    'columns' => 12
);

piklist('field', array(
    'type' => 'group',
    'label' => 'Salsa Week Schedule',
    'add_more' => true,
    'fields' => array(
        $place_styles,
        $salsa_days,
        $place_price,
        $place_salsa_schedule,
        $place_schedule_comment
    )
));

## social media fields ---------------------------------------------------------

$social_media = array(
    'type'    => 'select',
    'field'   => 'place_social_media',
    'label'   => 'Social media',
    'columns' => 3,
    'choices' => array(
        ''              => '',
        'facebook'      => 'Facebook',
        'twitter'       => 'Twitter',
        'google plus'   => 'Google Plus',
        'youtube'       => 'Youtube',
        'instagram'     => 'Instagram',
        'snapchat'      => 'Snapchat',
        'pinterest'     => 'Pinterest',
        'vimeo'         => 'Vimeo',
        'skype'         => 'Skype',
        'whatsapp'      => 'Whatsapp',
        'linkedin'      => 'Linkedin'
    )
);

$media_link = array(
    'type' => 'text',
    'field' => 'place_media_link',
    'label' => 'Social media link',
    'columns' => 9
);

piklist('field', array(
    'type' => 'group',
    'label' => 'Social media',
    'add_more' => true,
    'fields' => array($social_media,$media_link)
));
