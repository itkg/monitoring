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
     * Test category
     *
     * @var string
     */
    protected $category;

    /**
     * Possible exception
     *
     * @var \Exception
     */
    protected $exception;

    /**
     * This test is critic?
     *
     * @var boolean
     */
    protected $critic;

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
     * Getter category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Setter category
     *
     * @param $category Test category
     */
    public function setCategory($category)
    {
        $this->category = $category;
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
     * Getter critic (This test is critic?)
     *
     * @return bool
     */
    public function isCritic()
    {
        return $this->critic;
    }

    /**
     * Setter critic
     *
     * @param boolean $critic Test critic or not
     */
    public function setCritic($critic)
    {
        $this->critic = $critic;
    }

    /**
     * Execute a test
     *
     * @throws \Exception
     * @return void
     */
    public abstract function execute();
}