
// Runtime: 51 ms
// Memory Usage: 21.4 MB



class Solution {

    /**
     * @param String[] $tokens
     * @return Integer
     */
    function evalRPN($tokens) {
        $operators = "+-*/";
        $out =0;
        if(count($tokens)==1)
        {
            return $tokens[0];
        }
        
        $new_stack = array();
        for($i=0; $i<count($tokens); $i++)
        {
            $pos = strpos($operators, $tokens[$i]);
            if($pos !== false)
            {
                $this_2 = array_pop($new_stack);
                $this_1 = array_pop($new_stack);
                
                if($tokens[$i] =="+")
                {
                    $last_val = intval($this_1) + intval($this_2);
                }
                else if($tokens[$i] =="-")
                {
                    $last_val = intval($this_1) - intval($this_2);
                }
                else if($tokens[$i] =="*")
                {
                    $last_val = intval($this_1) * intval($this_2);
                }
                else if($tokens[$i] =="/")
                {
                    $last_val = intval(intval($this_1) / intval($this_2));
                }
                array_push($new_stack, $last_val);
            }
            else
            {
                array_push($new_stack, $tokens[$i]);
            }
        }
        return $new_stack[0];
    }
}