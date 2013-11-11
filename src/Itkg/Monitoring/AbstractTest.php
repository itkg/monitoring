<?php

namespace Itkg\Monitoring;

/**
 * Class AbstractTest
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
abstract class AbstractTest
{
    /**
     * Test identifier
     *
     * @var string
     */
    protected $identifier;

    /**
     * Possible exception
     *
     * @var \Exception
     */
    protected $exception;

    /**
     * Constructor
     *
     * @param string $identifier Test identifier
     */
    public function __construct($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * Getter exception
     *
     * @return \Exception
     */
    public function getException()
    {
        return $this->exception;
    }

    /**
     * Setter exception
     *
     * @param \Exception $exception Possible exception
     */
    public function setException(\Exception $exception)
    {
        $this->exception = $exception;
    }

    /**
     * Getter identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Setter identifier
     *
     * @param string $identifier Test identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * Execute a test
     *
     * @throws \Exception
     * @return void
     */
    public abstract function execute();
}