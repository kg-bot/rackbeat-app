<?php
/**
 * InventoryCheckingReport
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
 * InventoryCheckingReport Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InventoryCheckingReport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InventoryCheckingReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'number' => 'string',
        'type' => 'string',
        'name' => 'string',
        'group_name' => 'string',
        'group_number' => 'float',
        'category_name' => 'string',
        'category_number' => 'float',
        'net_book_value' => 'int',
        'received' => 'int',
        'delivered' => 'int',
        'in_stock' => 'int',
        'created_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'number' => null,
        'type' => null,
        'name' => null,
        'group_name' => null,
        'group_number' => null,
        'category_name' => null,
        'category_number' => null,
        'net_book_value' => null,
        'received' => null,
        'delivered' => null,
        'in_stock' => null,
        'created_at' => 'ISO8601 (Atom)'
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
        'number' => 'number',
        'type' => 'type',
        'name' => 'name',
        'group_name' => 'group_name',
        'group_number' => 'group_number',
        'category_name' => 'category_name',
        'category_number' => 'category_number',
        'net_book_value' => 'net_book_value',
        'received' => 'received',
        'delivered' => 'delivered',
        'in_stock' => 'in_stock',
        'created_at' => 'created_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'type' => 'setType',
        'name' => 'setName',
        'group_name' => 'setGroupName',
        'group_number' => 'setGroupNumber',
        'category_name' => 'setCategoryName',
        'category_number' => 'setCategoryNumber',
        'net_book_value' => 'setNetBookValue',
        'received' => 'setReceived',
        'delivered' => 'setDelivered',
        'in_stock' => 'setInStock',
        'created_at' => 'setCreatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'type' => 'getType',
        'name' => 'getName',
        'group_name' => 'getGroupName',
        'group_number' => 'getGroupNumber',
        'category_name' => 'getCategoryName',
        'category_number' => 'getCategoryNumber',
        'net_book_value' => 'getNetBookValue',
        'received' => 'getReceived',
        'delivered' => 'getDelivered',
        'in_stock' => 'getInStock',
        'created_at' => 'getCreatedAt'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['group_name'] = isset($data['group_name']) ? $data['group_name'] : null;
        $this->container['group_number'] = isset($data['group_number']) ? $data['group_number'] : null;
        $this->container['category_name'] = isset($data['category_name']) ? $data['category_name'] : null;
        $this->container['category_number'] = isset($data['category_number']) ? $data['category_number'] : null;
        $this->container['net_book_value'] = isset($data['net_book_value']) ? $data['net_book_value'] : null;
        $this->container['received'] = isset($data['received']) ? $data['received'] : null;
        $this->container['delivered'] = isset($data['delivered']) ? $data['delivered'] : null;
        $this->container['in_stock'] = isset($data['in_stock']) ? $data['in_stock'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * Gets group_name
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->container['group_name'];
    }

    /**
     * Sets group_name
     *
     * @param string $group_name group_name
     *
     * @return $this
     */
    public function setGroupName($group_name)
    {
        $this->container['group_name'] = $group_name;

        return $this;
    }

    /**
     * Gets group_number
     *
     * @return float
     */
    public function getGroupNumber()
    {
        return $this->container['group_number'];
    }

    /**
     * Sets group_number
     *
     * @param float $group_number group_number
     *
     * @return $this
     */
    public function setGroupNumber($group_number)
    {
        $this->container['group_number'] = $group_number;

        return $this;
    }

    /**
     * Gets category_name
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->container['category_name'];
    }

    /**
     * Sets category_name
     *
     * @param string $category_name category_name
     *
     * @return $this
     */
    public function setCategoryName($category_name)
    {
        $this->container['category_name'] = $category_name;

        return $this;
    }

    /**
     * Gets category_number
     *
     * @return float
     */
    public function getCategoryNumber()
    {
        return $this->container['category_number'];
    }

    /**
     * Sets category_number
     *
     * @param float $category_number category_number
     *
     * @return $this
     */
    public function setCategoryNumber($category_number)
    {
        $this->container['category_number'] = $category_number;

        return $this;
    }

    /**
     * Gets net_book_value
     *
     * @return int
     */
    public function getNetBookValue()
    {
        return $this->container['net_book_value'];
    }

    /**
     * Sets net_book_value
     *
     * @param int $net_book_value net_book_value
     *
     * @return $this
     */
    public function setNetBookValue($net_book_value)
    {
        $this->container['net_book_value'] = $net_book_value;

        return $this;
    }

    /**
     * Gets received
     *
     * @return int
     */
    public function getReceived()
    {
        return $this->container['received'];
    }

    /**
     * Sets received
     *
     * @param int $received received
     *
     * @return $this
     */
    public function setReceived($received)
    {
        $this->container['received'] = $received;

        return $this;
    }

    /**
     * Gets delivered
     *
     * @return int
     */
    public function getDelivered()
    {
        return $this->container['delivered'];
    }

    /**
     * Sets delivered
     *
     * @param int $delivered delivered
     *
     * @return $this
     */
    public function setDelivered($delivered)
    {
        $this->container['delivered'] = $delivered;

        return $this;
    }

    /**
     * Gets in_stock
     *
     * @return int
     */
    public function getInStock()
    {
        return $this->container['in_stock'];
    }

    /**
     * Sets in_stock
     *
     * @param int $in_stock in_stock
     *
     * @return $this
     */
    public function setInStock($in_stock)
    {
        $this->container['in_stock'] = $in_stock;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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

