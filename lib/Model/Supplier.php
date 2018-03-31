<?php
/**
 * Supplier
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
 * Supplier Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Supplier implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Supplier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'number' => 'int',
        'company_name' => 'string',
        'company_vat' => 'string',
        'address_street' => 'string',
        'address_street2' => 'string',
        'address_city' => 'string',
        'address_zipcode' => 'string',
        'address_country' => 'string',
        'contact_email' => 'string',
        'contact_phone' => 'string',
        'locale' => 'string',
        'currency' => 'string',
        'vat_zone' => 'string',
        'payment_terms_id' => 'int',
        'payment_terms' => '\Swagger\Client\Model\PaymentTerm',
        'supplier_groups' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'is_deleted' => 'bool',
        'self' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'number' => 'int10',
        'company_name' => null,
        'company_vat' => null,
        'address_street' => null,
        'address_street2' => null,
        'address_city' => null,
        'address_zipcode' => null,
        'address_country' => null,
        'contact_email' => null,
        'contact_phone' => null,
        'locale' => null,
        'currency' => null,
        'vat_zone' => null,
        'payment_terms_id' => 'int10',
        'payment_terms' => null,
        'supplier_groups' => null,
        'created_at' => 'ISO8601 (Atom)',
        'updated_at' => 'ISO8601 (Atom)',
        'is_deleted' => null,
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
        'number' => 'number',
        'company_name' => 'company_name',
        'company_vat' => 'company_vat',
        'address_street' => 'address_street',
        'address_street2' => 'address_street2',
        'address_city' => 'address_city',
        'address_zipcode' => 'address_zipcode',
        'address_country' => 'address_country',
        'contact_email' => 'contact_email',
        'contact_phone' => 'contact_phone',
        'locale' => 'locale',
        'currency' => 'currency',
        'vat_zone' => 'vat_zone',
        'payment_terms_id' => 'payment_terms_id',
        'payment_terms' => 'payment_terms',
        'supplier_groups' => 'supplier_groups',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'is_deleted' => 'is_deleted',
        'self' => 'self'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'company_name' => 'setCompanyName',
        'company_vat' => 'setCompanyVat',
        'address_street' => 'setAddressStreet',
        'address_street2' => 'setAddressStreet2',
        'address_city' => 'setAddressCity',
        'address_zipcode' => 'setAddressZipcode',
        'address_country' => 'setAddressCountry',
        'contact_email' => 'setContactEmail',
        'contact_phone' => 'setContactPhone',
        'locale' => 'setLocale',
        'currency' => 'setCurrency',
        'vat_zone' => 'setVatZone',
        'payment_terms_id' => 'setPaymentTermsId',
        'payment_terms' => 'setPaymentTerms',
        'supplier_groups' => 'setSupplierGroups',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'is_deleted' => 'setIsDeleted',
        'self' => 'setSelf'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'company_name' => 'getCompanyName',
        'company_vat' => 'getCompanyVat',
        'address_street' => 'getAddressStreet',
        'address_street2' => 'getAddressStreet2',
        'address_city' => 'getAddressCity',
        'address_zipcode' => 'getAddressZipcode',
        'address_country' => 'getAddressCountry',
        'contact_email' => 'getContactEmail',
        'contact_phone' => 'getContactPhone',
        'locale' => 'getLocale',
        'currency' => 'getCurrency',
        'vat_zone' => 'getVatZone',
        'payment_terms_id' => 'getPaymentTermsId',
        'payment_terms' => 'getPaymentTerms',
        'supplier_groups' => 'getSupplierGroups',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'is_deleted' => 'getIsDeleted',
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['company_vat'] = isset($data['company_vat']) ? $data['company_vat'] : null;
        $this->container['address_street'] = isset($data['address_street']) ? $data['address_street'] : null;
        $this->container['address_street2'] = isset($data['address_street2']) ? $data['address_street2'] : null;
        $this->container['address_city'] = isset($data['address_city']) ? $data['address_city'] : null;
        $this->container['address_zipcode'] = isset($data['address_zipcode']) ? $data['address_zipcode'] : null;
        $this->container['address_country'] = isset($data['address_country']) ? $data['address_country'] : null;
        $this->container['contact_email'] = isset($data['contact_email']) ? $data['contact_email'] : null;
        $this->container['contact_phone'] = isset($data['contact_phone']) ? $data['contact_phone'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['vat_zone'] = isset($data['vat_zone']) ? $data['vat_zone'] : null;
        $this->container['payment_terms_id'] = isset($data['payment_terms_id']) ? $data['payment_terms_id'] : null;
        $this->container['payment_terms'] = isset($data['payment_terms']) ? $data['payment_terms'] : null;
        $this->container['supplier_groups'] = isset($data['supplier_groups']) ? $data['supplier_groups'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['is_deleted'] = isset($data['is_deleted']) ? $data['is_deleted'] : null;
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

        if (!is_null($this->container['company_name']) && (strlen($this->container['company_name']) > 80)) {
            $invalidProperties[] = "invalid value for 'company_name', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['company_vat']) && (strlen($this->container['company_vat']) > 40)) {
            $invalidProperties[] = "invalid value for 'company_vat', the character length must be smaller than or equal to 40.";
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

        if (!is_null($this->container['contact_email']) && (strlen($this->container['contact_email']) > 80)) {
            $invalidProperties[] = "invalid value for 'contact_email', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['contact_phone']) && (strlen($this->container['contact_phone']) > 80)) {
            $invalidProperties[] = "invalid value for 'contact_phone', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['locale']) && (strlen($this->container['locale']) > 2)) {
            $invalidProperties[] = "invalid value for 'locale', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['currency']) && (strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['vat_zone']) && (strlen($this->container['vat_zone']) > 16)) {
            $invalidProperties[] = "invalid value for 'vat_zone', the character length must be smaller than or equal to 16.";
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

        if (strlen($this->container['company_name']) > 80) {
            return false;
        }
        if (strlen($this->container['company_vat']) > 40) {
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
        if (strlen($this->container['contact_email']) > 80) {
            return false;
        }
        if (strlen($this->container['contact_phone']) > 80) {
            return false;
        }
        if (strlen($this->container['locale']) > 2) {
            return false;
        }
        if (strlen($this->container['currency']) > 3) {
            return false;
        }
        if (strlen($this->container['vat_zone']) > 16) {
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
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name company_name
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        if (!is_null($company_name) && (strlen($company_name) > 80)) {
            throw new \InvalidArgumentException('invalid length for $company_name when calling Supplier., must be smaller than or equal to 80.');
        }

        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets company_vat
     *
     * @return string
     */
    public function getCompanyVat()
    {
        return $this->container['company_vat'];
    }

    /**
     * Sets company_vat
     *
     * @param string $company_vat company_vat
     *
     * @return $this
     */
    public function setCompanyVat($company_vat)
    {
        if (!is_null($company_vat) && (strlen($company_vat) > 40)) {
            throw new \InvalidArgumentException('invalid length for $company_vat when calling Supplier., must be smaller than or equal to 40.');
        }

        $this->container['company_vat'] = $company_vat;

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
            throw new \InvalidArgumentException('invalid length for $address_street when calling Supplier., must be smaller than or equal to 255.');
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
            throw new \InvalidArgumentException('invalid length for $address_street2 when calling Supplier., must be smaller than or equal to 255.');
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
            throw new \InvalidArgumentException('invalid length for $address_city when calling Supplier., must be smaller than or equal to 255.');
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
            throw new \InvalidArgumentException('invalid length for $address_zipcode when calling Supplier., must be smaller than or equal to 255.');
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
            throw new \InvalidArgumentException('invalid length for $address_country when calling Supplier., must be smaller than or equal to 255.');
        }

        $this->container['address_country'] = $address_country;

        return $this;
    }

    /**
     * Gets contact_email
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->container['contact_email'];
    }

    /**
     * Sets contact_email
     *
     * @param string $contact_email contact_email
     *
     * @return $this
     */
    public function setContactEmail($contact_email)
    {
        if (!is_null($contact_email) && (strlen($contact_email) > 80)) {
            throw new \InvalidArgumentException('invalid length for $contact_email when calling Supplier., must be smaller than or equal to 80.');
        }

        $this->container['contact_email'] = $contact_email;

        return $this;
    }

    /**
     * Gets contact_phone
     *
     * @return string
     */
    public function getContactPhone()
    {
        return $this->container['contact_phone'];
    }

    /**
     * Sets contact_phone
     *
     * @param string $contact_phone contact_phone
     *
     * @return $this
     */
    public function setContactPhone($contact_phone)
    {
        if (!is_null($contact_phone) && (strlen($contact_phone) > 80)) {
            throw new \InvalidArgumentException('invalid length for $contact_phone when calling Supplier., must be smaller than or equal to 80.');
        }

        $this->container['contact_phone'] = $contact_phone;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        if (!is_null($locale) && (strlen($locale) > 2)) {
            throw new \InvalidArgumentException('invalid length for $locale when calling Supplier., must be smaller than or equal to 2.');
        }

        $this->container['locale'] = $locale;

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
            throw new \InvalidArgumentException('invalid length for $currency when calling Supplier., must be smaller than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets vat_zone
     *
     * @return string
     */
    public function getVatZone()
    {
        return $this->container['vat_zone'];
    }

    /**
     * Sets vat_zone
     *
     * @param string $vat_zone vat_zone
     *
     * @return $this
     */
    public function setVatZone($vat_zone)
    {
        if (!is_null($vat_zone) && (strlen($vat_zone) > 16)) {
            throw new \InvalidArgumentException('invalid length for $vat_zone when calling Supplier., must be smaller than or equal to 16.');
        }

        $this->container['vat_zone'] = $vat_zone;

        return $this;
    }

    /**
     * Gets payment_terms_id
     *
     * @return int
     */
    public function getPaymentTermsId()
    {
        return $this->container['payment_terms_id'];
    }

    /**
     * Sets payment_terms_id
     *
     * @param int $payment_terms_id payment_terms_id
     *
     * @return $this
     */
    public function setPaymentTermsId($payment_terms_id)
    {
        $this->container['payment_terms_id'] = $payment_terms_id;

        return $this;
    }

    /**
     * Gets payment_terms
     *
     * @return \Swagger\Client\Model\PaymentTerm
     */
    public function getPaymentTerms()
    {
        return $this->container['payment_terms'];
    }

    /**
     * Sets payment_terms
     *
     * @param \Swagger\Client\Model\PaymentTerm $payment_terms payment_terms
     *
     * @return $this
     */
    public function setPaymentTerms($payment_terms)
    {
        $this->container['payment_terms'] = $payment_terms;

        return $this;
    }

    /**
     * Gets supplier_groups
     *
     * @return string
     */
    public function getSupplierGroups()
    {
        return $this->container['supplier_groups'];
    }

    /**
     * Sets supplier_groups
     *
     * @param string $supplier_groups supplier_groups
     *
     * @return $this
     */
    public function setSupplierGroups($supplier_groups)
    {
        $this->container['supplier_groups'] = $supplier_groups;

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
     * Gets is_deleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted
     *
     * @param bool $is_deleted Is it a deleted supplier?
     *
     * @return $this
     */
    public function setIsDeleted($is_deleted)
    {
        $this->container['is_deleted'] = $is_deleted;

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

