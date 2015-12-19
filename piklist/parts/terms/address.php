<?php
/*
Title: My Term Metabox
Description: My cool new metabox
Taxonomy: address
Capability: manage_options
Locked: true
New: true
Collapse: true
*/

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
     'help'      => __('Maps should be a width:600 and height:300','sage'),
     'label'     => __('Map','sage'),
     'columns'   => 12,
     'attributes'    => array('rows' => 5)
 );

 piklist('field', array(
     'type'          => 'group',
     'label'         => __('Salsa lessons','sage'),
     'fields'        => array(
         $class_location_name,
         $class_address,
         $class_npa,
         $class_city,
         $class_neighborhood,
         $class_map_link,
         $class_map
     )
 ));

 ?>
