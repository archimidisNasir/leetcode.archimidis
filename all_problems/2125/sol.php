
// Runtime: 47 ms
// Memory Usage: 23.2 MB



class Solution {

    /**
     * @param String[] $bank
     * @return Integer
     */
    function numberOfBeams($bank) {
        $last_row =0;
        $total =0;
        for($i=0; $i<count($bank); $i++)
        {
            $this_row = substr_count($bank[$i],"1");
            if($last_row!=0 && $this_row!=0)
            {
                $total = $total+ ($last_row*$this_row);
                $last_row = $this_row;
            }
            else if($this_row!=0)
            {
                $last_row = $this_row;
            }
        }
        return $total;
    }
}