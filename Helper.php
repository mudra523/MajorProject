<?php

class Helper
{
    public static function NumberToWord($num)
    {
        $first_word = array('eth', 'First', 'Second', 'Third', 'Fouth', 'Fifth', 'Sixth', 'Seventh', 'Eighth', 'Ninth', 'Tenth', 'Elevents', 'Twelfth', 'Thirteenth', 'Fourteenth', 'Fifteenth', 'Sixteenth', 'Seventeenth', 'Eighteenth', 'Nineteenth', 'Twentieth');
        $second_word = array('', '', 'Twenty', 'Thirty', 'Forty', 'Fifty');

        if ($num <= 20) {
            return $first_word[$num];
        }

        $first_num = substr($num, -1, 1);
        $second_num = substr($num, -2, 1);

        return str_replace('y-eth', 'ieth', $second_word[$second_num] . '-' . $first_word[$first_num]);
    }

    public static function generateLinkFromCategory($category)
    {
        for ($i = 1; $i <= 8; $i++) {
            $w = self::NumberToWord($i);
            echo "<a class='dropdown-item nav-link text-dark font-italic bg-light ajax-call' data-value='$w' data-category='$category'>Semester $i</a>";
        }
    }
}