
// Runtime: 35 ms
// Memory Usage: 21.7 MB



class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function singleNumber($nums) {
        $arr_num = array();
        sort($nums);
        if(count($nums)==2)
        {
            return $nums;
        }
        for($i=0; $i<count($nums); $i++)
        {
            if($nums[$i]==$nums[$i+1])
            {
                $i++;
            }
            else
            {
                array_push($arr_num, $nums[$i]);
            }
        }
        return $arr_num;
    }
}

