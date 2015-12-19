<?php

/*
Title: Theme Settings Section
Setting: look_and_feel2
*/
piklist('field', array(
    'type' => 'text'
    ,'field' => 'text'
    ,'label' => 'Text asdfasdf Box'
    ,'description' => 'Field asdfasdfasdfDescription'
    ,'help' => 'This is help text.'
    ,'value' => 'Default text'
    ,'attributes' => array(
        'class' => 'text'
    )
));

piklist('field', array(
    'type' => 'select'
    ,'field' => 'select'
    ,'label' => 'Select Box'
    ,'description' => 'Choose from the drop-down.'
    ,'help' => 'This is help text.'
    ,'attributes' => array(
        'class' => 'text'
    )
    ,'choices' => array(
        'option1' => 'Option 1'
        ,'option2' => 'Option 2'
        ,'option3' => 'Option 3'
    )
));


?>
