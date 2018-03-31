<?php
/**
 * InventoryValuationReportForm
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Rackbeat
 *
 * If you're interested in demo access, contact us below and we will setup a temporary account for you. Alternatively you can sign up through our site and skip the billing step.
 *
 * OpenAPI spec version: 0.5.4
 * Contact: tech@rackbeat.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * InventoryValuationReportForm Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InventoryValuationReportForm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inventory_valuation_report_form';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'from_number' => 'string',
        'to_number' => 'string',
        'from_time' => 'string',
        'to_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'from_number' => null,
        'to_number' => null,
        'from_time' => null,
        'to_time' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'from_number' => 'from_number',
        'to_number' => 'to_number',
        'from_time' => 'from_time',
        'to_time' => 'to_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'from_number' => 'setFromNumber',
        'to_number' => 'setToNumber',
        'from_time' => 'setFromTime',
        'to_time' => 'setToTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'from_number' => 'getFromNumber',
        'to_number' => 'getToNumber',
        'from_time' => 'getFromTime',
        'to_time' => 'getToTime'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['from_number'] = isset($data['from_number']) ? $data['from_number'] : null;
        $this->container['to_number'] = isset($data['to_number']) ? $data['to_number'] : null;
        $this->container['from_time'] = isset($data['from_time']) ? $data['from_time'] : null;
        $this->container['to_time'] = isset($data['to_time']) ? $data['to_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets from_number
     *
     * @return string
     */
    public function getFromNumber()
    {
        return $this->container['from_number'];
    }

    /**
     * Sets from_number
     *
     * @param string $from_number from_number
     *
     * @return $this
     */
    public function setFromNumber($from_number)
    {
        $this->container['from_number'] = $from_number;

        return $this;
    }

    /**
     * Gets to_number
     *
     * @return string
     */
    public function getToNumber()
    {
        return $this->container['to_number'];
    }

    /**
     * Sets to_number
     *
     * @param string $to_number to_number
     *
     * @return $this
     */
    public function setToNumber($to_number)
    {
        $this->container['to_number'] = $to_number;

        return $this;
    }

    /**
     * Gets from_time
     *
     * @return string
     */
    public function getFromTime()
    {
        return $this->container['from_time'];
    }

    /**
     * Sets from_time
     *
     * @param string $from_time from_time
     *
     * @return $this
     */
    public function setFromTime($from_time)
    {
        $this->container['from_time'] = $from_time;

        return $this;
    }

    /**
     * Gets to_time
     *
     * @return string
     */
    public function getToTime()
    {
        return $this->container['to_time'];
    }

    /**
     * Sets to_time
     *
     * @param string $to_time to_time
     *
     * @return $this
     */
    public function setToTime($to_time)
    {
        $this->container['to_time'] = $to_time;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param  integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param  integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

