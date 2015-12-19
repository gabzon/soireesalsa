<?php
/*
Title: School information
Post Type: school
*/

## Contact custom fields -------------------------------------------------------

piklist('field', array(
    'type'      => 'text',
    'field'     => 'school_email',
    'label'     => __('Email','sage'),
    'columns'   => 6
));

piklist('field', array(
    'type'      => 'text',
    'field'     => 'school_phone',
    'label'     => __('Phone','sage'),
    'columns'   => 6
));

piklist('field', array(
    'type'      => 'text',
    'field'     => 'school_website',
    'label'     => __('Website','sage'),
    'columns'   => 12
));

## social media fields ---------------------------------------------------------

$social_media = array(
    'type'    => 'select',
    'field'   => 'school_social_media',
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
    'field' => 'school_media_link',
    'label' => 'Social media link',
    'columns' => 9
);

piklist('field', array(
    'type' => 'group',
    'label' => 'Social media',
    'add_more' => true,
    'fields' => array($social_media,$media_link)
));

## School Address --------------------------------------------------------------

$class_location_name = array(
    'type'          => 'text',
    'field'         => 'class_location_name',
    'label'         => __('Location name','sage'),
    'columns'       => 4,
);

$class_address = array(
    'type'          => 'text',
    'field'         => 'class_address',
    'label'         => __('Address','sage'),
    'columns'       => 8,
);

$class_npa = array(
    'type'          => 'text',
    'field'         => 'class_npa',
    'label'         => __('P.O.','sage'),
    'columns'       => 1,
);

$class_city = array(
    'type'          => 'text',
    'field'         => 'class_city',
    'label'         => __('City','sage'),
    'columns'       => 3,
);

$class_neighborhood = array(
    'type'          => 'text',
    'field'         => 'class_neighborhood',
    'label'         => __('Neighborhood','sage'),
    'columns'       => 3,
);

$class_map_link = array(
    'type'          => 'text',
    'field'         => 'class_map_link',
    'label'         => __('Map link','sage'),
    'columns'       => 5,
);

$class_map = array(
    'type'      => 'textarea',
    'field'     => 'class_map',
    'help'      => __('Maps should be a width:800px and height:300','sage'),
    'label'     => __('Map','sage'),
    'columns'   => 12,
    'attributes'    => array('rows' => 5)
);

piklist('field', array(
    'type'          => 'group',
    'label'         => __('Address','sage'),
    'add_more'      => true,
    'fields'        => array(
        $class_location_name,
        $class_address,
        $class_npa,
        $class_city,
        $class_neighborhood,
        $class_map_link,
        $class_map,
    )
));

## Pricing ---------------------------------------------------------------------

$school_price = array(
    'type'          => 'text',
    'field'         => 'school_price',
    'label'         => __('Price','sage'),
    'columns'       => 3,
);

$school_price_type = array(
    'type'          => 'select',
    'field'         => 'school_price_type',
    'label'         => __('Type','sage'),
    'columns'       => 3,
    'choices'       => array(
        'adult'         => __('Adult','sage'),
        'AVS'           => __('AVS/Retired','sage'),
        'students'      => __('Students','sage'),
        'unemployed'    => __('Unemployed','sage'),
        'couple'        => __('In Couple','sage'),
    )
);

$school_payment_type = array(
    'type'          => 'select',
    'field'         => 'school_payment_type',
    'label'         => __('Payment type','sage'),
    'columns'       => 3,
    'choices'       => array(
        'session'       => __('Per session','sage'),
        'monthly'       => __('Monthly','sage'),
    )
);

$school_price_sessions = array(
    'type'          => 'text',
    'field'         => 'school_price_sessions',
    'label'         => __('Sessions','sage'),
    'columns'       => 3,
);

$school_price_comments = array(
    'type'          => 'textarea',
    'field'         => 'school_price_comments',
    'label'         => __('Comments','sage'),
    'columns'       => 12,
);

piklist('field', array(
    'type'          => 'group',
    'label'         => __('Prices','sage'),
    'add_more'      => true,
    'fields'        => array(
        $school_price,
        $school_price_type,
        $school_payment_type,
        $school_price_sessions,
        $school_price_comments
    )
));

## Class schedule --------------------------------------------------------------

$class_name = array(
    'type'      => 'text',
    'field'     => 'class_name',
    'label'     => __('Style','sage'),
    'columns'   => 6
);

$class_level = array(
    'type'    => 'select',
    'field'   => 'class_level',
    'label'   => __('Level','sage'),
    'columns' => 3,
    'choices' => array(
        ''              => '',
        'Beginner'      => 'Beginner',
        'Intermediate'  => 'Intermediate',
        'Advanced'      => 'Advanced',
        'Professional'  => 'Professional'
    )
);

$class_level_number = array(
    'type'      => 'text',
    'field'     => 'class_level_number',
    'label'     => __('Level number','sage'),
    'columns'   => 3
);

$class_day = array(
    'type'    => 'select',
    'field'   => 'class_day',
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
        __('Sunday','sage')    => __('Sunday','sage'),
    )
);

$class_starting_time = array(
    'type'      => 'text',
    'field'     => 'class_starting_time',
    'label'     => __('Start time','sage'),
    'columns'   => 2
);

$class_ending_time = array(
    'type'      => 'text',
    'field'     => 'class_ending_time',
    'label'     => __('End time','sage'),
    'columns'   => 2
);

$class_starting_period = array(
    'type'      => 'datepicker',
    'field'     => 'class_starting_period',
    'label'     => __('Start date','sage'),
    'columns'   => 2,
    'options'   => array('dateFormat' => 'd/m/yy','firstDay' => '1')
);

$class_ending_period = array(
    'type'      => 'datepicker',
    'field'     => 'class_ending_period',
    'label'     => __('End date','sage'),
    'columns'   => 2,
    'options'   => array('dateFormat' => 'd/m/yy','firstDay' => '1')
);

$class_comments = array(
    'type'          => 'textarea',
    'field'         => 'class_comments',
    'label'         => __('Comments','sage'),
    'columns'       => 12,
    'attributes'    => array('rows' => 3)
);

$class_place = array(
    'type'          => 'text',
    'field'         => 'class_place',
    'label'         => __('Place','sage'),
    'columns'       => 4,
);

$class_place_link = array(
    'type'          => 'text',
    'field'         => 'class_place_link',
    'label'         => __('Google Maps URL','sage'),
    'columns'       => 8,
);

piklist('field', array(
    'type'          => 'group',
    'label'         => __('Salsa lessons','sage'),
    'add_more'      => true,
    'fields'        => array(
        $class_name,
        $class_level,
        $class_level_number,
        $class_day,
        $class_starting_time,
        $class_ending_time,
        $class_starting_period,
        $class_ending_period,
        $class_comments,
        $class_place,
        $class_place_link
    )
));
