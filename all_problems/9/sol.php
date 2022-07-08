
// Runtime: 42 ms
// Memory Usage: 19.3 MB



class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        
        if($x<0)
        {
            return false;
        }
        
        $x=$x."";
        
        $len =strlen($x);

		$x=$x."";
		
        $new_string = "";
        for($i=$len-1; $i>=0; $i--)
        {
            $new_string .=$x[$i];
        }
        
        if(intval($new_string)==$x)
        {
			return true;
        }
        else
        {
            return false;
        }
    }
}
