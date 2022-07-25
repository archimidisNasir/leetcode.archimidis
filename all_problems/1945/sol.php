
// Runtime: 21 ms
// Memory Usage: 19.5 MB



class Solution {
    /**
     * @param String $s
     * @param Integer $k
     * @return Integer
     */
    function getLucky($s, $k) {
        $arr_letters = array('a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5, 'f'=>6, 'g'=>7, 'h'=>8, 'i'=>9, 'j'=>10, 'k'=>11, 'l'=>12, 'm'=>13, 'n'=>14, 'o'=>15, 'p'=>16, 'q'=>17, 'r'=>18, 's'=>19, 't'=>20,'u'=>21, 'v'=>22, 'w'=>23, 'x'=>24, 'y'=>25, 'z'=>26);
        
        while(isset($s[$i]))
        {
            $this_num = $this_num.$arr_letters[$s[$i]];
            $i++;
        }
        while($k!=0)
        {
            $arr_nums = str_split($this_num);
            for($i=0; $i<count($arr_nums); $i++)
            {
                $this_total += intval($arr_nums[$i]);
            }
            $this_num = $this_total."";
            $this_total =0;
            $k--;
        }
        return $this_num;
    }
}