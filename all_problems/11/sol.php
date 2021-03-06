
// Runtime: 231 ms
// Memory Usage: 32 MB



class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $out =0;
        $ii =0;
        $jj = count($height)-1;
        
        while($ii < $jj) 
        {
            $this_vol = ($jj-$ii) * min($height[$ii], $height[$jj]);
            $out = max($out, $this_vol);
                       
            if($height[$ii] < $height[$jj]) 
            {
                $ii++;
            } 
            else 
            {
                $jj--;
            }           
        }
        
        return $out;
    }
}
