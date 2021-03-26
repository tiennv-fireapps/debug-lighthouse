<?php

if (!function_exists('formatDate')) {
    function formatDate($date, string $format = 'Y/m/d')
    {
        if ($date instanceof \Carbon\Carbon) {
            return $date->format($format);
        }

        return $date;
    }
}

if (!function_exists('pushSocket')) {
    function pushSocket($channel, $event, $payload)
    {
        $pusher = new Pusher\Pusher(
            config('services.pusher.key'),
            config('services.pusher.secret'),
            config('services.pusher.app_id'),
            config('services.pusher.options')
        );
        $pusher->trigger($channel, $event, $payload);
    }
}
