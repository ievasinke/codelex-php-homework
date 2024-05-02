<?php
/*
 * Foo Corporation needs a program to calculate how much to pay their hourly employees.
 * The US Department of Labor requires that employees get paid time and
 * a half for any hours over 40 that they work in a single week.
 * For example, if an employee works 45 hours, they get 5 hours of overtime,
 * at 1.5 times their base pay.
 * The State of Massachusetts requires that hourly employees be paid at least $8.00 an hour.
 * Foo Corp requires that an employee not work more than 60 hours in a week.
 */

function dollarsToCents(float $amount): int
{
    return (int)($amount * 100);
}

function centsToDollars(int $amount): float
{
    return $amount / 100.0;
}

function calculateWeeklyPay(float $hourlyRate, int $hoursWorked): void
{
    $MINIMUM_WAGE_CENTS = 800;
    $MAX_WEEKLY_HOURS = 60;
    $STANDARD_WEEKLY_HOURS = 40;
    $OVERTIME_MULTIPLIER = 1.5;

    $hourlyRateCents = dollarsToCents($hourlyRate);

    if ($hourlyRateCents < $MINIMUM_WAGE_CENTS) {
        echo "Error: Hourly rate is below the minimum wage of $8.00.\n";
        return;
    }
    if ($hoursWorked > $MAX_WEEKLY_HOURS) {
        echo "Error: You worked $hoursWorked hours, which is over the 60-hour limit.\n";
        return;
    }
    if ($hoursWorked > $STANDARD_WEEKLY_HOURS) {
        $overtimeHours = $hoursWorked - $STANDARD_WEEKLY_HOURS;
        $regularPay = $STANDARD_WEEKLY_HOURS * $hourlyRateCents;
        $overtimePay = $overtimeHours * $OVERTIME_MULTIPLIER * $hourlyRateCents;
        $totalPay = $regularPay + $overtimePay;
    } else {
        $totalPay = $hoursWorked * $hourlyRateCents;
    }

    $weeklySalaryDollars = centsToDollars($totalPay);

    echo "Your salary for is: $weeklySalaryDollars\n";

}

calculateWeeklyPay(7.5, 35);
calculateWeeklyPay(8.2, 47);
calculateWeeklyPay(10.00, 73);
