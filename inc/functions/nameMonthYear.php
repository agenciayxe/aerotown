<?php
function nameMonthYear($monthNumber = false, $typeReturn = 'name') {
    --$monthNumber;
    $nameDay = false;
    $listName = array(
        'name' => array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'),
        'abrev' => array('jan', 'fev', 'mar', 'abr', 'mai', 'jun', 'jul', 'ago', 'set', 'out', 'nov', 'dez'),
    );
    if ($monthNumber !== false) {
        $monthNumber = (int) $monthNumber;
        $weekNames = $listName[$typeReturn];
        $nameDay = ($weekNames[$monthNumber]) ? $weekNames[$monthNumber]: false;
        return $nameDay;
    }
    else { return false; }
}