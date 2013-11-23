<?php


namespace Itkg\Monitoring\Test;

use Itkg\Monitoring\AbstractTest;


/**
 * Class Redis
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class Redis extends AbstractTest
{

    /**
     * Server host
     *
     * @var string
     */
    protected $host;

    /**
     * Server port
     *
     * @var string
     */
    protected $port;

    public function __construct($identifier, $host, $port)
    {
        $this->host = $host;
        $this->port = $port;

        parent::__construct($identifier);
    }

    /**
     * Execute a test
     *
     * @throws \Exception
     * @return void
     */
    public function execute()
    {
        $client = new \Redis();

        $client->connect(
            $this->host,
            $this->port
        );

        $client->ping();

        // Write test (for readonly pb)
        $key = 'monitor_key';
        $content = 'VALUE_MONITOR';
        $client->set($key, $content);

        $ret = $client->get($key);
        // Remove key after the test
        $client->delete($key);

        if(!$ret) {
            throw new \Exception('Read only system (check memory_used)', 1);
        }
    }
}