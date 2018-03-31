<?php
/**
 * InvoiceLine
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
 * InvoiceLine Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InvoiceLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lineable_id' => 'int',
        'lineable_type' => 'string',
        'location_id' => 'int',
        'location' => '\Swagger\Client\Model\SupplierInvoiceLineLocation',
        'name' => 'string',
        'quantity' => 'int',
        'line_price' => 'float',
        'variations' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lineable_id' => 'int10',
        'lineable_type' => null,
        'location_id' => 'int10',
        'location' => null,
        'name' => null,
        'quantity' => null,
        'line_price' => null,
        'variations' => null
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
        'lineable_id' => 'lineable_id',
        'lineable_type' => 'lineable_type',
        'location_id' => 'location_id',
        'location' => 'location',
        'name' => 'name',
        'quantity' => 'quantity',
        'line_price' => 'line_price',
        'variations' => 'variations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lineable_id' => 'setLineableId',
        'lineable_type' => 'setLineableType',
        'location_id' => 'setLocationId',
        'location' => 'setLocation',
        'name' => 'setName',
        'quantity' => 'setQuantity',
        'line_price' => 'setLinePrice',
        'variations' => 'setVariations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lineable_id' => 'getLineableId',
        'lineable_type' => 'getLineableType',
        'location_id' => 'getLocationId',
        'location' => 'getLocation',
        'name' => 'getName',
        'quantity' => 'getQuantity',
        'line_price' => 'getLinePrice',
        'variations' => 'getVariations'
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
        $this->container['lineable_id'] = isset($data['lineable_id']) ? $data['lineable_id'] : null;
        $this->container['lineable_type'] = isset($data['lineable_type']) ? $data['lineable_type'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['line_price'] = isset($data['line_price']) ? $data['line_price'] : null;
        $this->container['variations'] = isset($data['variations']) ? $data['variations'] : null;
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
     * Gets lineable_id
     *
     * @return int
     */
    public function getLineableId()
    {
        return $this->container['lineable_id'];
    }

    /**
     * Sets lineable_id
     *
     * @param int $lineable_id lineable_id
     *
     * @return $this
     */
    public function setLineableId($lineable_id)
    {
        $this->container['lineable_id'] = $lineable_id;

        return $this;
    }

    /**
     * Gets lineable_type
     *
     * @return string
     */
    public function getLineableType()
    {
        return $this->container['lineable_type'];
    }

    /**
     * Sets lineable_type
     *
     * @param string $lineable_type lot if is Lot and product if is Product
     *
     * @return $this
     */
    public function setLineableType($lineable_type)
    {
        $this->container['lineable_type'] = $lineable_type;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int $location_id Should reference a location number.
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Swagger\Client\Model\SupplierInvoiceLineLocation
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Swagger\Client\Model\SupplierInvoiceLineLocation $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
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
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets line_price
     *
     * @return float
     */
    public function getLinePrice()
    {
        return $this->container['line_price'];
    }

    /**
     * Sets line_price
     *
     * @param float $line_price Allows up to 6 decimals. Must not use comma (,) but instead a period (.) for decimals.
     *
     * @return $this
     */
    public function setLinePrice($line_price)
    {
        $this->container['line_price'] = $line_price;

        return $this;
    }

    /**
     * Gets variations
     *
     * @return object
     */
    public function getVariations()
    {
        return $this->container['variations'];
    }

    /**
     * Sets variations
     *
     * @param object $variations variations
     *
     * @return $this
     */
    public function setVariations($variations)
    {
        $this->container['variations'] = $variations;

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
