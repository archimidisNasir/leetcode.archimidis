
// Runtime: 9 ms
// Memory Usage: 19.3 MB



class Solution {

    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits) {
        
        $out =array();
        $arr_let = [2 => ['a','b','c'], 3 => ['d','e','f'], 4 => ['g','h','i'], 
                    5 => ['j','k','l'], 6 => ['m','n','o'], 7 => ['p','q','r','s'], 
                    8 => ['t','u','v'], 9 => ['w','x','y','z']];

        $len = strlen($digits);
        if($len==0) 
        {
            return $out;
        }
            
        
		if($len == 1) 
        {
			return $arr_let[$digits[0]];
		}
        
		if($len == 2) {
			for($i = 0 ;$i < count($arr_let[$digits[0]]); $i++) 
            {
				for($j = 0; $j < count($arr_let[$digits[1]]); $j++) 
                {
					array_push($out, $arr_let[$digits[0]][$i] . $arr_let[$digits[1]][$j]);
				}
			}
			return $out;
		}
		
        for($i = 0 ;$i < count($arr_let[$digits[0]]); $i++) 
        {
            $result = $this->letterCombinations(substr($digits, 1));
            foreach($result as $r)
            {
                array_push($out, $arr_let[$digits[0]][$i] . $r);
            }
        }
        return $out;
        
        
        
    }
}