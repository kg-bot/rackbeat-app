<?php
/**
 * Lot
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
 * Lot Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Lot implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Lot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'number' => 'string',
        'total_price' => 'float',
        'cost_price' => 'float',
        'add_products_individually' => 'int',
        'stock_quantity' => 'int',
        'in_order_quantity' => 'int',
        'available_quantity' => 'int',
        'purchased_quantity' => 'int',
        'lines' => '\Swagger\Client\Model\LotLine[]',
        'created_at' => 'string',
        'updated_at' => 'string',
        'self' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'number' => null,
        'total_price' => null,
        'cost_price' => null,
        'add_products_individually' => 'int1',
        'stock_quantity' => 'int11',
        'in_order_quantity' => 'int11',
        'available_quantity' => 'int11',
        'purchased_quantity' => 'int11',
        'lines' => null,
        'created_at' => 'ISO8601 (Atom)',
        'updated_at' => 'ISO8601 (Atom)',
        'self' => null
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
        'total_price' => 'total_price',
        'cost_price' => 'cost_price',
        'add_products_individually' => 'add_products_individually',
        'stock_quantity' => 'stock_quantity',
        'in_order_quantity' => 'in_order_quantity',
        'available_quantity' => 'available_quantity',
        'purchased_quantity' => 'purchased_quantity',
        'lines' => 'lines',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'self' => 'self'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'number' => 'setNumber',
        'total_price' => 'setTotalPrice',
        'cost_price' => 'setCostPrice',
        'add_products_individually' => 'setAddProductsIndividually',
        'stock_quantity' => 'setStockQuantity',
        'in_order_quantity' => 'setInOrderQuantity',
        'available_quantity' => 'setAvailableQuantity',
        'purchased_quantity' => 'setPurchasedQuantity',
        'lines' => 'setLines',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'self' => 'setSelf'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'number' => 'getNumber',
        'total_price' => 'getTotalPrice',
        'cost_price' => 'getCostPrice',
        'add_products_individually' => 'getAddProductsIndividually',
        'stock_quantity' => 'getStockQuantity',
        'in_order_quantity' => 'getInOrderQuantity',
        'available_quantity' => 'getAvailableQuantity',
        'purchased_quantity' => 'getPurchasedQuantity',
        'lines' => 'getLines',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'self' => 'getSelf'
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
        $this->container['total_price'] = isset($data['total_price']) ? $data['total_price'] : null;
        $this->container['cost_price'] = isset($data['cost_price']) ? $data['cost_price'] : null;
        $this->container['add_products_individually'] = isset($data['add_products_individually']) ? $data['add_products_individually'] : null;
        $this->container['stock_quantity'] = isset($data['stock_quantity']) ? $data['stock_quantity'] : null;
        $this->container['in_order_quantity'] = isset($data['in_order_quantity']) ? $data['in_order_quantity'] : null;
        $this->container['available_quantity'] = isset($data['available_quantity']) ? $data['available_quantity'] : null;
        $this->container['purchased_quantity'] = isset($data['purchased_quantity']) ? $data['purchased_quantity'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['self'] = isset($data['self']) ? $data['self'] : null;
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
     * Gets total_price
     *
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param float $total_price total_price
     *
     * @return $this
     */
    public function setTotalPrice($total_price)
    {
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets cost_price
     *
     * @return float
     */
    public function getCostPrice()
    {
        return $this->container['cost_price'];
    }

    /**
     * Sets cost_price
     *
     * @param float $cost_price cost_price
     *
     * @return $this
     */
    public function setCostPrice($cost_price)
    {
        $this->container['cost_price'] = $cost_price;

        return $this;
    }

    /**
     * Gets add_products_individually
     *
     * @return int
     */
    public function getAddProductsIndividually()
    {
        return $this->container['add_products_individually'];
    }

    /**
     * Sets add_products_individually
     *
     * @param int $add_products_individually add_products_individually
     *
     * @return $this
     */
    public function setAddProductsIndividually($add_products_individually)
    {
        $this->container['add_products_individually'] = $add_products_individually;

        return $this;
    }

    /**
     * Gets stock_quantity
     *
     * @return int
     */
    public function getStockQuantity()
    {
        return $this->container['stock_quantity'];
    }

    /**
     * Sets stock_quantity
     *
     * @param int $stock_quantity stock_quantity
     *
     * @return $this
     */
    public function setStockQuantity($stock_quantity)
    {
        $this->container['stock_quantity'] = $stock_quantity;

        return $this;
    }

    /**
     * Gets in_order_quantity
     *
     * @return int
     */
    public function getInOrderQuantity()
    {
        return $this->container['in_order_quantity'];
    }

    /**
     * Sets in_order_quantity
     *
     * @param int $in_order_quantity in_order_quantity
     *
     * @return $this
     */
    public function setInOrderQuantity($in_order_quantity)
    {
        $this->container['in_order_quantity'] = $in_order_quantity;

        return $this;
    }

    /**
     * Gets available_quantity
     *
     * @return int
     */
    public function getAvailableQuantity()
    {
        return $this->container['available_quantity'];
    }

    /**
     * Sets available_quantity
     *
     * @param int $available_quantity available_quantity
     *
     * @return $this
     */
    public function setAvailableQuantity($available_quantity)
    {
        $this->container['available_quantity'] = $available_quantity;

        return $this;
    }

    /**
     * Gets purchased_quantity
     *
     * @return int
     */
    public function getPurchasedQuantity()
    {
        return $this->container['purchased_quantity'];
    }

    /**
     * Sets purchased_quantity
     *
     * @param int $purchased_quantity purchased_quantity
     *
     * @return $this
     */
    public function setPurchasedQuantity($purchased_quantity)
    {
        $this->container['purchased_quantity'] = $purchased_quantity;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \Swagger\Client\Model\LotLine[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \Swagger\Client\Model\LotLine[] $lines lines
     *
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

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
     * Gets updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets self
     *
     * @return string
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     *
     * @param string $self self
     *
     * @return $this
     */
    public function setSelf($self)
    {
        $this->container['self'] = $self;

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

