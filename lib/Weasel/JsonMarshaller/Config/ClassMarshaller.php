<?php
/**
 * @author Jonathan Oddy <jonathan@woaf.net>
 * @copyright 2012 Jonathan Oddy
 * @license ISC
 */
namespace Weasel\JsonMarshaller\Config;

/**
 * Holder for the configuration for marshalling of a class
 */
class ClassMarshaller
{

    /**
     * @var \Weasel\JsonMarshaller\Config\Serialization\ClassSerialization
     */
    public $serialization;

    /**
     * @var \Weasel\JsonMarshaller\Config\Deserialization\ClassDeserialization
     */
    public $deserialization;

}
