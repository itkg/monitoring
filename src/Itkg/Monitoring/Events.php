<?php

namespace Itkg\Monitoring;

/**
 * Class Events
 *
 * @package Itkg\Monitoring
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
final class Events
{
    const PRE_EXECUTE = 'monitoring.pre_execute';
    const POST_EXECUTE = 'monitoring.post_execute';
    const TEST_EXECUTED = 'monitoring.test_executed';
}