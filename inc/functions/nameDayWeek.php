<?php
function nameDayWeek($dayNumber = false, $typeReturn = 'name') {
    $nameDay = false;
    $listName = array(
        'name' => array('Domingo', 'Segunda-Feira', 'Terça-Feira', 'Quarta-Feira', 'Quinta-Feira', 'Sexta-Feira', 'Sábado', 'Domingo'),
        'abrev' => array('dom', 'seg', 'ter', 'qua', 'qui', 'sex', 'sab', 'dom'),
    );
    if ($dayNumber !== false) {
        $dayNumber = (int) $dayNumber;
        $weekNames = $listName[$typeReturn];
        $nameDay = ($weekNames[$dayNumber]) ? $weekNames[$dayNumber]: false;
        return $nameDay;
    }
    else { return false; }
}