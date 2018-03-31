<?php
/**
 * PurchaseOrderForm
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
 * PurchaseOrderForm Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PurchaseOrderForm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'purchase_order_form';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'number' => 'int',
        'supplier_id' => 'int',
        'employee_id' => 'int',
        'currency' => 'string',
        'address_street' => 'string',
        'address_street2' => 'string',
        'address_city' => 'string',
        'address_zipcode' => 'string',
        'address_country' => 'string',
        'lines' => '\Swagger\Client\Model\PurchaseOrderLineForm[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'number' => 'int10',
        'supplier_id' => 'int10',
        'employee_id' => 'int10',
        'currency' => null,
        'address_street' => null,
        'address_street2' => null,
        'address_city' => null,
        'address_zipcode' => null,
        'address_country' => null,
        'lines' => null
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
        'supplier_id' => 'supplier_id',
        'employee_id' => 'employee_id',
        'currency' => 'currency',
        'address_street' => 'address_street',
        'address_street2' => 'address_street2',
        'address_city' => 'address_city',
        'address_zipcode' => 'address_zipcode',
        'address_country' => 'address_country',
        'lines' => 'lines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'supplier_id' => 'setSupplierId',
        'employee_id' => 'setEmployeeId',
        'currency' => 'setCurrency',
        'address_street' => 'setAddressStreet',
        'address_street2' => 'setAddressStreet2',
        'address_city' => 'setAddressCity',
        'address_zipcode' => 'setAddressZipcode',
        'address_country' => 'setAddressCountry',
        'lines' => 'setLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'supplier_id' => 'getSupplierId',
        'employee_id' => 'getEmployeeId',
        'currency' => 'getCurrency',
        'address_street' => 'getAddressStreet',
        'address_street2' => 'getAddressStreet2',
        'address_city' => 'getAddressCity',
        'address_zipcode' => 'getAddressZipcode',
        'address_country' => 'getAddressCountry',
        'lines' => 'getLines'
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
        $this->container['supplier_id'] = isset($data['supplier_id']) ? $data['supplier_id'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['address_street'] = isset($data['address_street']) ? $data['address_street'] : null;
        $this->container['address_street2'] = isset($data['address_street2']) ? $data['address_street2'] : null;
        $this->container['address_city'] = isset($data['address_city']) ? $data['address_city'] : null;
        $this->container['address_zipcode'] = isset($data['address_zipcode']) ? $data['address_zipcode'] : null;
        $this->container['address_country'] = isset($data['address_country']) ? $data['address_country'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['supplier_id'] === null) {
            $invalidProperties[] = "'supplier_id' can't be null";
        }
        if (!is_null($this->container['currency']) && (strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['address_street']) && (strlen($this->container['address_street']) > 255)) {
            $invalidProperties[] = "invalid value for 'address_street', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['address_street2']) && (strlen($this->container['address_street2']) > 255)) {
            $invalidProperties[] = "invalid value for 'address_street2', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['address_city']) && (strlen($this->container['address_city']) > 255)) {
            $invalidProperties[] = "invalid value for 'address_city', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['address_zipcode']) && (strlen($this->container['address_zipcode']) > 255)) {
            $invalidProperties[] = "invalid value for 'address_zipcode', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['address_country']) && (strlen($this->container['address_country']) > 255)) {
            $invalidProperties[] = "invalid value for 'address_country', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['lines'] === null) {
            $invalidProperties[] = "'lines' can't be null";
        }
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

        if ($this->container['supplier_id'] === null) {
            return false;
        }
        if (strlen($this->container['currency']) > 3) {
            return false;
        }
        if (strlen($this->container['address_street']) > 255) {
            return false;
        }
        if (strlen($this->container['address_street2']) > 255) {
            return false;
        }
        if (strlen($this->container['address_city']) > 255) {
            return false;
        }
        if (strlen($this->container['address_zipcode']) > 255) {
            return false;
        }
        if (strlen($this->container['address_country']) > 255) {
            return false;
        }
        if ($this->container['lines'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int $number Unique integer
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets supplier_id
     *
     * @return int
     */
    public function getSupplierId()
    {
        return $this->container['supplier_id'];
    }

    /**
     * Sets supplier_id
     *
     * @param int $supplier_id supplier_id
     *
     * @return $this
     */
    public function setSupplierId($supplier_id)
    {
        $this->container['supplier_id'] = $supplier_id;

        return $this;
    }

    /**
     * Gets employee_id
     *
     * @return int
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param int $employee_id employee_id
     *
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {
        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        if (!is_null($currency) && (strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling PurchaseOrderForm., must be smaller than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets address_street
     *
     * @return string
     */
    public function getAddressStreet()
    {
        return $this->container['address_street'];
    }

    /**
     * Sets address_street
     *
     * @param string $address_street address_street
     *
     * @return $this
     */
    public function setAddressStreet($address_street)
    {
        if (!is_null($address_street) && (strlen($address_street) > 255)) {
            throw new \InvalidArgumentException('invalid length for $address_street when calling PurchaseOrderForm., must be smaller than or equal to 255.');
        }

        $this->container['address_street'] = $address_street;

        return $this;
    }

    /**
     * Gets address_street2
     *
     * @return string
     */
    public function getAddressStreet2()
    {
        return $this->container['address_street2'];
    }

    /**
     * Sets address_street2
     *
     * @param string $address_street2 address_street2
     *
     * @return $this
     */
    public function setAddressStreet2($address_street2)
    {
        if (!is_null($address_street2) && (strlen($address_street2) > 255)) {
            throw new \InvalidArgumentException('invalid length for $address_street2 when calling PurchaseOrderForm., must be smaller than or equal to 255.');
        }

        $this->container['address_street2'] = $address_street2;

        return $this;
    }

    /**
     * Gets address_city
     *
     * @return string
     */
    public function getAddressCity()
    {
        return $this->container['address_city'];
    }

    /**
     * Sets address_city
     *
     * @param string $address_city address_city
     *
     * @return $this
     */
    public function setAddressCity($address_city)
    {
        if (!is_null($address_city) && (strlen($address_city) > 255)) {
            throw new \InvalidArgumentException('invalid length for $address_city when calling PurchaseOrderForm., must be smaller than or equal to 255.');
        }

        $this->container['address_city'] = $address_city;

        return $this;
    }

    /**
     * Gets address_zipcode
     *
     * @return string
     */
    public function getAddressZipcode()
    {
        return $this->container['address_zipcode'];
    }

    /**
     * Sets address_zipcode
     *
     * @param string $address_zipcode address_zipcode
     *
     * @return $this
     */
    public function setAddressZipcode($address_zipcode)
    {
        if (!is_null($address_zipcode) && (strlen($address_zipcode) > 255)) {
            throw new \InvalidArgumentException('invalid length for $address_zipcode when calling PurchaseOrderForm., must be smaller than or equal to 255.');
        }

        $this->container['address_zipcode'] = $address_zipcode;

        return $this;
    }

    /**
     * Gets address_country
     *
     * @return string
     */
    public function getAddressCountry()
    {
        return $this->container['address_country'];
    }

    /**
     * Sets address_country
     *
     * @param string $address_country address_country
     *
     * @return $this
     */
    public function setAddressCountry($address_country)
    {
        if (!is_null($address_country) && (strlen($address_country) > 255)) {
            throw new \InvalidArgumentException('invalid length for $address_country when calling PurchaseOrderForm., must be smaller than or equal to 255.');
        }

        $this->container['address_country'] = $address_country;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \Swagger\Client\Model\PurchaseOrderLineForm[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \Swagger\Client\Model\PurchaseOrderLineForm[] $lines lines
     *
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

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
