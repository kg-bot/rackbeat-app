<?php
/**
 * InvoiceForm
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
 * InvoiceForm Class Doc Comment
 *
 * @category Class
 * @package     RackbeatApp\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InvoiceForm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'invoice_form';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'supplier_id'     => 'int',
        'note'            => 'string',
        'currency'        => 'string',
        'currency_rate'   => 'float',
        'address_street'  => 'string',
        'address_street2' => 'string',
        'address_city'    => 'string',
        'address_zipcode' => 'string',
        'address_country' => 'string',
        'lines'           => '\RackbeatApp\Client\Model\InvoiceLine[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'supplier_id' => 'int10',
        'note' => null,
        'currency' => null,
        'currency_rate' => null,
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
        'supplier_id' => 'supplier_id',
        'note' => 'note',
        'currency' => 'currency',
        'currency_rate' => 'currency_rate',
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
        'supplier_id' => 'setSupplierId',
        'note' => 'setNote',
        'currency' => 'setCurrency',
        'currency_rate' => 'setCurrencyRate',
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
        'supplier_id' => 'getSupplierId',
        'note' => 'getNote',
        'currency' => 'getCurrency',
        'currency_rate' => 'getCurrencyRate',
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
        $this->container['supplier_id'] = isset($data['supplier_id']) ? $data['supplier_id'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['currency_rate'] = isset($data['currency_rate']) ? $data['currency_rate'] : null;
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
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

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
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets currency_rate
     *
     * @return float
     */
    public function getCurrencyRate()
    {
        return $this->container['currency_rate'];
    }

    /**
     * Sets currency_rate
     *
     * @param float $currency_rate currency_rate
     *
     * @return $this
     */
    public function setCurrencyRate($currency_rate)
    {
        $this->container['currency_rate'] = $currency_rate;

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
        $this->container['address_country'] = $address_country;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \RackbeatApp\Client\Model\InvoiceLine[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \RackbeatApp\Client\Model\InvoiceLine[] $lines lines
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

