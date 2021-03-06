
// Runtime: 59 ms
// Memory Usage: 19.3 MB 



class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        
        $all_chars = "qwertyuioplkjhgfdsazxcvbnm0123456789";
        
        $len =strlen($s);
        $s =strtolower($s);
        for($i=0; $i<$len; $i++)
        {
            if(strpos($all_chars, $s[$i]) !==false)
            {
                $filtered_str .=$s[$i];
            }
        }
        

        $new_string = "";
        for($i=$len-1; $i>=0; $i--)
        {
            $new_string .=$filtered_str[$i];
        }
        
        if($new_string==$filtered_str)
        {
			return true;
        }
        else
        {
            return false;
        }
    }
}
