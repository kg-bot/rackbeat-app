<?php
/**
 * CustomerGroupProduct
 *
 * PHP version 5
 *
 * @category Class
 * @package  RackbeatApp\Client
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

namespace RackbeatApp\Client\Model;

use ArrayAccess;
use RackbeatApp\Client\ObjectSerializer;

/**
 * CustomerGroupProduct Class Doc Comment
 *
 * @category Class
 * @package     RackbeatApp\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CustomerGroupProduct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerGroupProduct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'number' => 'string',
        'sales_price' => 'float',
        'regular_sales_price' => 'float',
        'is_custom_sales_price' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'number' => null,
        'sales_price' => null,
        'regular_sales_price' => null,
        'is_custom_sales_price' => null
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
        'name' => 'name',
        'number' => 'number',
        'sales_price' => 'sales_price',
        'regular_sales_price' => 'regular_sales_price',
        'is_custom_sales_price' => 'is_custom_sales_price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'number' => 'setNumber',
        'sales_price' => 'setSalesPrice',
        'regular_sales_price' => 'setRegularSalesPrice',
        'is_custom_sales_price' => 'setIsCustomSalesPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'number' => 'getNumber',
        'sales_price' => 'getSalesPrice',
        'regular_sales_price' => 'getRegularSalesPrice',
        'is_custom_sales_price' => 'getIsCustomSalesPrice'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['sales_price'] = isset($data['sales_price']) ? $data['sales_price'] : null;
        $this->container['regular_sales_price'] = isset($data['regular_sales_price']) ? $data['regular_sales_price'] : null;
        $this->container['is_custom_sales_price'] = isset($data['is_custom_sales_price']) ? $data['is_custom_sales_price'] : null;
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets sales_price
     *
     * @return float
     */
    public function getSalesPrice()
    {
        return $this->container['sales_price'];
    }

    /**
     * Sets sales_price
     *
     * @param float $sales_price sales_price
     *
     * @return $this
     */
    public function setSalesPrice($sales_price)
    {
        $this->container['sales_price'] = $sales_price;

        return $this;
    }

    /**
     * Gets regular_sales_price
     *
     * @return float
     */
    public function getRegularSalesPrice()
    {
        return $this->container['regular_sales_price'];
    }

    /**
     * Sets regular_sales_price
     *
     * @param float $regular_sales_price regular_sales_price
     *
     * @return $this
     */
    public function setRegularSalesPrice($regular_sales_price)
    {
        $this->container['regular_sales_price'] = $regular_sales_price;

        return $this;
    }

    /**
     * Gets is_custom_sales_price
     *
     * @return bool
     */
    public function getIsCustomSalesPrice()
    {
        return $this->container['is_custom_sales_price'];
    }

    /**
     * Sets is_custom_sales_price
     *
     * @param bool $is_custom_sales_price is_custom_sales_price
     *
     * @return $this
     */
    public function setIsCustomSalesPrice($is_custom_sales_price)
    {
        $this->container['is_custom_sales_price'] = $is_custom_sales_price;

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

