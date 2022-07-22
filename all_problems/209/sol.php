
// Runtime: 115 ms
// Memory Usage: 31.8 MB



class Solution {

    /**
     * @param Integer $target
     * @param Integer[] $nums
     * @return Integer
     */
    function minSubArrayLen($target, $nums) {
        $len_nums = count($nums);
        $out = $len_nums+1;
        $index =0;
        for($i=0; $i<$len_nums; $i++)
        {
            $this_sum += $nums[$i];
            if($this_sum>=$target)
            {
                while($this_sum-$nums[$index]>=$target)
                {
                    $this_sum -= $nums[$index];
                    $index++;
                }
                $this_out = $i-$index+1;
            }
            if(isset($this_out) && $this_out<=$out)
            {
                $out = $this_out;
            }
        }
        if($out >$len_nums)
        {
            return 0;
        }
        return $out;
    }
}