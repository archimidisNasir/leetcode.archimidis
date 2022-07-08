
// Runtime: 28 ms
// Memory Usage: 19.8 MB



class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $len = strlen($s);
        $arr_br = array();
        $arr_br["("] =")";
        $arr_br["{"] ="}";
        $arr_br["["] ="]";

        $arr_stack = [];
        for ($i=0; $i<$len; $i++) 
        {
            if ($arr_br[$s[$i]] !="") 
            {
                array_push($arr_stack, $s[$i]);
                continue;
            }

            if ($arr_br[$arr_stack[count($arr_stack)-1]] ==$s[$i]) 
            {
                array_pop($arr_stack);
            } 
            else 
            {
                return false;
            }
        }

        return count($arr_stack) == 0;
    }
}