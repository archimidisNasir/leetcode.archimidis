
// Runtime: 23 ms
// Memory Usage: 19.3 MB



class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function intToRoman($num) {
        $out ="";
        
        while($num>0)
        {
            if($num-1000>=0)
            {
                $out = $out."M";
                $num = $num-1000;
            }
            else if($num-900>=0)
            {
                $out = $out."CM";
                $num = $num-900;
            }
            else if($num-500>=0)
            {
                $out = $out."D";
                $num = $num-500;
            }
            else if($num-400>=0)
            {
                $out = $out."CD";
                $num = $num-400;
            }
            else if($num-100>=0)
            {
                $out = $out."C";
                $num = $num-100;
            }
            else if($num-90>=0)
            {
                $out = $out."XC";
                $num = $num-90;
            }
            else if($num-50>=0)
            {
                $out = $out."L";
                $num = $num-50;
            }
            else if($num-40>=0)
            {
                $out = $out."XL";
                $num = $num-40;
            }
            else if($num-10>=0)
            {
                $out = $out."X";
                $num = $num-10;
            }
            else if($num-9>=0)
            {
                $out = $out."IX";
                $num = $num-9;
            }
            else if($num-5>=0)
            {
                $out = $out."V";
                $num = $num-5;
            }
            else if($num-4>=0)
            {
                $out = $out."IV";
                $num = $num-4;
            }
            else if($num-1>=0)
            {
                $out = $out."I";
                $num = $num-1;
            }

        }
        return $out;
    }
}

