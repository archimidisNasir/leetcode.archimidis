
// Runtime: 9 ms
// Memory Usage: 19.5 MB



class Solution {

    /**
     * @param Integer[][] $board
     * @return NULL
     */
    function gameOfLife(&$board) {
        $m = count($board);
        $n = count($board[0]);
        $out_board = array();
        
        for($i=0; $i<$m; $i++)
        {
            $this_row = array();
            for($j=0; $j<$n; $j++)
            {
                $this_neighs = $this-> liveNeighs($board, $i, $j);
                if($this_neighs<2)
                {
                    $this_cell = 0;
                }
                else if(($this_neighs==2 || $this_neighs==3) && $board[$i][$j]==1)
                {
                    $this_cell = 1;
                }
                else if($this_neighs>3 && $board[$i][$j]==1)
                {
                    $this_cell = 0;
                }
                else if($this_neighs==3 && $board[$i][$j]==0)
                {
                    $this_cell = 1;
                }
                array_push($this_row,$this_cell);
                $this_cell =0;
            }
            array_push($out_board,$this_row);
        }
        $board = $out_board;
    }
    
    function liveNeighs($board, $i, $j) {
        $live_neighs =  $board[$i-1][$j-1]+ $board[$i-1][$j]+ $board[$i-1][$j+1]+ 
                        $board[$i][$j-1]+ $board[$i][$j+1]+ 
                        $board[$i+1][$j-1]+ $board[$i+1][$j]+ $board[$i+1][$j+1];
        return $live_neighs;
    }
}