<?php

function carbonDate($date): string {
    return \Carbon\Carbon::parse($date)->format('d.m.Y');
}

function carbonDateWithTime($date): string {
    return \Carbon\Carbon::parse($date)->format('d.m.Y H:i:s');
}

function carbonToTimestamp($date): int {
    return \Carbon\Carbon::parse($date)->timestamp;
}

function futureOrPast($date): bool {
    return carbonToTimestamp($date) >= time();
}
