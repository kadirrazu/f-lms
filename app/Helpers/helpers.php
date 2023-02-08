<?php 

/******************************************
 * Custom Function for Converting a English
 * Number to it Equivalent Bangla Number
 ******************************************/

if (! function_exists('convertEnToBnNumber')) 
{
    function convertEnToBnNumber($input) 
    {
        
        $english_numsets = array("0","1","2","3","4","5","6","7","8","9");
        $bangla_numsets = array("০","১","২","৩","৪","৫","৬","৭","৮","৯");
        
        return str_replace($english_numsets, $bangla_numsets, $input);
    }
}


if (! function_exists('multi_array_search')) 
{
    function multi_array_search($search_for, $search_in) {
        foreach ($search_in as $element) {
            if ( ($element['id'] === $search_for) ){
                return true;
            }
        }
        return false;
    }
}
  