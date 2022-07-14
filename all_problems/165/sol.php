
// Runtime: 6 ms
// Memory Usage: 19.4 MB



class Solution {

    /**
     * @param String $version1
     * @param String $version2
     * @return Integer
     */
    function compareVersion($version1, $version2) {
        $piece_v1 = explode(".", $version1);
        $piece_v2 = explode(".", $version2);
        $i =0;
        $out =0;
        while(isset($piece_v1[$i]) || isset($piece_v2[$i]))
        {
            if(intval($piece_v1[$i])<intval($piece_v2[$i]))
            {
                $out =-1;
                break;
            }
            else if(intval($piece_v1[$i])>intval($piece_v2[$i]))
            {
                $out =1;
                break;
            }
            else if(intval($piece_v1[$i])>0 && !isset($piece_v2[$i]))
            {
                $out =1;
                break;
            }
            else if(intval($piece_v2[$i])>0 && !isset($piece_v1[$i]))
            {
                $out =-1;
                break;
            }
            $i++;
        }
        return $out;
    }
}