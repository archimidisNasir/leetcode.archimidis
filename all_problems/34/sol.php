
// Runtime: 39 ms
// Memory Usage: 23.5 MB




class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchRange($nums, $target) {
        $out = array();
        $len = count($nums);
        if($len==0)
        {
            $out[0]= -1;
            $out[1]= -1;
            return $out;
        }
        
        for($i=0; $i<$len; $i++)
        {
            if($nums[$i]==$target)
            {
                $out[0]= $i;
                break;
            }
            if($nums[$i]>$target || ($i==$len-1 && $nums[$i]<$target))
            {
                $out[0]= -1;
                break;
            }
        }
        
        for($i=$len-1; $i>=0; $i--)
        {
            if($nums[$i]==$target)
            {
                $out[1]= $i;
                break;
            }
            if($nums[$i]<$target || ($i==0 && $nums[$i]>$target))
            {
                $out[1]= -1;
                break;
            }
        }
        
        return $out;
    }
}







