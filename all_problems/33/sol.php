
// Runtime: 17 ms
// Memory Usage: 19.4 MB




class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        $len = count($nums);
        if($nums[0]>$nums[$len-1])
        {
            for($i=0; $i<$len; $i++)
            {
                if($nums[$i]>$nums[$i+1])
                {
                    $rotate = $i;
                    break;
                }
            }
            
            
            if($target< $nums[0])
            {
                for($j=$rotate; $j<$len; $j++)
                {
                    if($nums[$j] == $target)
                    {
                        return $j;
                    }
                    else if ($j == $len-1)
                    {
                        return -1;
                    }
                }
            }
            
            else if($target<= $nums[$rotate] && $target>= $nums[0])
            {
                for($j=0; $j<=$rotate; $j++)
                {
                    if($nums[$j] == $target)
                    {
                        return $j;
                    }
                    else if ($j == $rotate)
                    {
                        return -1;
                    }
                }
            }
            else
            {
                return -1;
            }
            
        }
        else
        {
            if($target<$nums[0] || $target>$nums[$len-1])
            {
                return -1;
            }
            for($j=0; $j<$len; $j++)
            {
                if($nums[$j] == $target)
                {
                    return $j;
                }
            }
            return -1;
        }
        
        
        
    }
}