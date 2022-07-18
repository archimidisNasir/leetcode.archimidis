
// Runtime: 39 ms
// Memory Usage: 27.3 MB



class Solution {
    /**
     * @param String $s
     * @return String[]
     */
    function findRepeatedDnaSequences($s) {
        $out_arr = array();
        $repeat_arr = array();
        for($i=0; $i<strlen($s)-9; $i++)
        {
            $this_seq = substr($s, $i, 10);
            $repeat_arr[$this_seq]++;
            if($repeat_arr[$this_seq] ==2)
            {
                array_push($out_arr, $this_seq);
            }
        }
        return $out_arr;
    }
}