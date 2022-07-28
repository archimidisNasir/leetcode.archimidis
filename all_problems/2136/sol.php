
// Runtime: 1012 ms
// Memory Usage: 35.7 MB



class Solution {

    /**
     * @param Integer[] $plantTime
     * @param Integer[] $growTime
     * @return Integer
     */
    function earliestFullBloom($plantTime, $growTime) {
        $total_plant_time = array_sum($plantTime);
        arsort($growTime);
         foreach($growTime as $key => $val)
         {
             $total_time = $total_time+ $plantTime[$key];
             $out = max($out, $total_time + $val);
         }
        return $out;
    }
}