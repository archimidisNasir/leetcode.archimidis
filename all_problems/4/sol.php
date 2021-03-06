
// Runtime: 58 milliseconds
// Memory Usage: 19.4 MB



class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $as=array_merge($nums1,$nums2);
        sort($as);
        $count = count($as);
        if($count%2==1)
        {
            return $as[floor($count/2)];
        }
        else
        {
            return round(($as[$count/2] + $as[($count/2)-1])/2 , 5);
        }
    }
}

