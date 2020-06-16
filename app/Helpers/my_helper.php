<?php

if (!function_exists('delimitation')) {
    function delimitation($case, $amount, $money_limit)
    {
        $total_debt   = 0;
        $total_credit = 0;

        foreach ($case as $case_user) {
            $total_debt   += $case_user['debt'];
            $total_credit += $case_user['credit'];
        }

        $total_debt = $total_debt - $total_credit + $amount;

        if (sprintf("%.2f", $total_debt) > $money_limit) {
            return false;
        }
        return true;
    }
}
