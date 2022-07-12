
// Runtime: 16 ms
// Memory Usage: 19.6 MB



class Solution {

    /**
     * @param String $path
     * @return String
     */
    function simplifyPath($path) {
        $out = $path;
        $final_out = "/";
        while(strpos($out, "//") !== false || strpos($out, "/./") !== false){
            $out = str_replace("//", "/", $out);
            $out = str_replace("/./", "/", $out);
        }
        
        $arr_pieces = array();
        $pieces = explode("/",$out);
        for($i=0; $i<count($pieces); $i++)
        {
            if($pieces[$i]!="" && $pieces[$i]!="." && $pieces[$i]!="..")
            {
                array_push($arr_pieces,$pieces[$i]);
            }
            
            if(isset($pieces[$i-1]) && $pieces[$i]=="..")
            {
                array_pop($arr_pieces);
            }
        }
        
        for($i=0; $i<count($arr_pieces)-1; $i++)
        {
            $final_out .= $arr_pieces[$i]."/";
        }
        if($arr_pieces[count($arr_pieces)-1] !="")
        {
            $final_out .= $arr_pieces[count($arr_pieces)-1];
        }
        return $final_out;
    }
}