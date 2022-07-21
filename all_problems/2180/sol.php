
// Runtime: 7 ms
// Memory Usage: 19.3 MB



class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function countEven($num) {
        if($num<2)
        {
            return 0;
        }
        for($ii=1; $ii<=$num; $ii++)
        {
            $arr_nums = str_split($ii."");
            for($i=0; $i<count($arr_nums); $i++)
            {
                $this_total += intval($arr_nums[$i]);
            }
            if($this_total%2==0)
            {
                $out++;
            }
            
            $this_total =0;
        }
        return $out;
    }
}