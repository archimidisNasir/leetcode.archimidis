
//Runtime: 1705 ms changed
//Memory Usage: 19.9 MB

// new change again 
// hello Seym, running from my office pc 


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        for($i=0; $i<count($nums); $i++)
        {
            for($j=$i+1; $j<count($nums); $j++)
            {
                if($target-$nums[$i]==$nums[$j])
                {
                    return array($i, $j);
                }
            }
        }
        
        
        /*
        $arr_nums = array();
        $arr_index = array();
        for($i=0; $i<count($nums); $i++)
        {
            $arr_nums[$nums[$i]] +=1;
            $arr_index[$nums[$i]] = $i;
        }


        for($i=0; $i<count($nums); $i++)
        {
            if($target)
            $target-$arr_nums[$nums[$i]];
        }
        */

    }
}

