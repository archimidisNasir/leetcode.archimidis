
// Runtime: 1771 ms
// Memory Usage: 19.4 MB



class Solution {

    /**
     * @param String $s
     * @return String
     */
    function removeDuplicates($s) {
        $new_s = $s;
        while($stop!=1)
        {
            if($new_s[$i]==$new_s[$i+1] && $i+1<strlen($new_s))
            {
                $new_s = str_replace($new_s[$i].$new_s[$i+1], "", $new_s);
                $i--;
                continue;
            }
            else
            {
                $i++;
            }
            
            if($i==strlen($new_s) || strlen($new_s)==0)
            {
                $stop =1;
            }
        }
        
        return $new_s;
    }
}