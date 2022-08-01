
// Runtime: 11 ms
// Memory Usage: 19.3 MB+++++++++++++++++++++++++++++++++



class Solution {

    /**
     * @param String $secret
     * @param String $guess
     * @return String
     */
    function getHint($secret, $guess) {
        $bulls =0;
        $cows =0;
        $arr_secret = array();
        $arr_guess = array();
        for($i=0; $i<strlen($secret); $i++)
        {
            if($secret[$i] == $guess[$i])
            {
                $secret[$i] = $guess[$i] = "x";
                $bulls++;
            }
        }
        
        for($i=0; $i<strlen($secret); $i++)
        {
            $arr_secret[$secret[$i]]++;
            $arr_guess[$guess[$i]]++;
        }
        foreach($arr_secret as $key=>$val)
        {
            if($key !='x')
            {
                $secret[$i] = $guess[$i] = "x";
                $cows += min($arr_secret[$key],$arr_guess[$key]);
            }
        }
        
        return $bulls."A".$cows."B";
    }
}