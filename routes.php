<?php

Route::get('.well-known/traffic-advice', function () {
    $is_activated = \WebVPF\TrafficAdvice\Models\Settings::get('is_activated');
    $fraction = \WebVPF\TrafficAdvice\Models\Settings::get('fraction');

    return Response::view('webvpf.trafficadvice::default', [
        'is_activated' => $is_activated,
        'fraction' => $fraction,
    ])->header('Content-Type', 'application/trafficadvice+json');
});
