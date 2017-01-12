<?php

namespace Gentor\Gamp;


use TheIconic\Tracking\GoogleAnalytics\Analytics;

/**
 * Class GampService
 *
 * @package Gentor\Gamp
 */
class GampService
{
    /**
     * @var Analytics
     */
    public $analytics;

    /**
     * GampService constructor.
     *
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->analytics = new Analytics($config['is_ssl']);
        $this->analytics->setProtocolVersion($config['protocol_version'])
            ->setTrackingId($config['tracking_id']);

        if ($config['anonymize_ip']) {
            $this->analytics->setAnonymizeIp('1');
        }

        if ($config['async_requests']) {
            $this->analytics->setAsyncRequest(true);
        }
    }

    /**
     * @param       $method
     * @param array $args
     *
     * @return mixed
     */
    public function __call($method, array $args)
    {
        return call_user_func_array([$this->analytics, $method], $args);
    }

}