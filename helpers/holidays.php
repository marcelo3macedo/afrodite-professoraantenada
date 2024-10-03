<?php
function get_next_holidays($holidays, $quantity = CONST_AVAILABLE_HOLIDAYS) {
    $next_events = get_upcoming_in_this_year($holidays);

    usort($holidays, function($a, $b) {
        return strtotime($a->date) - strtotime($b->date);
    });

    $numberOfEvents = count($next_events);
    if ($numberOfEvents < $quantity) {
        $remainingDates = array_slice($holidays, 0, $quantity - $numberOfEvents);
        $next_events = array_merge($next_events, $remainingDates);
    }

    return array_slice($next_events, 0, $quantity);
}

function get_upcoming_in_this_year($events) {
    $currentYear = date('Y');

    $upcomingEvents = array_filter($events, function($event) use ($currentYear) {
        $eventDate = $currentYear . '-' . $event->date;
        $eventTimestamp = strtotime($eventDate);    
        $currentTimestamp = time();
    
        return $eventTimestamp >= $currentTimestamp;
    });

    return array_values($upcomingEvents);
}
?>