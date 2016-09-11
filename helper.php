<?php
/*
    jm_persons
    2016 © Hadi Safari
*/
class ModJmPersons{ 
    public static function getPerson($name, $role, $ava, $res, $ref){
    	$ret = "";
    	if($ref)
    		$ret .= "<a href=" . $ref . " target=\"_blank\" >";
    	$ret .= "<img src=" . $ava . " />";
    	if($ref)
    		$ret .= "</a>";
        $ret .= "<h4>" . $name . "</h4>";
        if(!$role)
            $role= "&nbsp";
        $ret .= "<h5>" . $role . "</h5>";
    	$ret .= "<ul>" . $res . "</ul>";
        return $ret;
    }
}
?>