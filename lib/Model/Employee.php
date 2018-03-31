<?php
/**
 * Employee
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
 * Employee Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Employee implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Employee';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'number' => 'int',
        'name' => 'string',
        'initials' => 'string',
        'contact_phone' => 'string',
        'contact_email' => 'string',
        'locale' => 'string',
        'job_title' => 'string',
        'default_location_id' => 'string',
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
        'number' => 'int10',
        'name' => null,
        'initials' => null,
        'contact_phone' => null,
        'contact_email' => null,
        'locale' => null,
        'job_title' => null,
        'default_location_id' => null,
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
        'number' => 'number',
        'name' => 'name',
        'initials' => 'initials',
        'contact_phone' => 'contact_phone',
        'contact_email' => 'contact_email',
        'locale' => 'locale',
        'job_title' => 'job_title',
        'default_location_id' => 'default_location_id',
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
        'number' => 'setNumber',
        'name' => 'setName',
        'initials' => 'setInitials',
        'contact_phone' => 'setContactPhone',
        'contact_email' => 'setContactEmail',
        'locale' => 'setLocale',
        'job_title' => 'setJobTitle',
        'default_location_id' => 'setDefaultLocationId',
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
        'number' => 'getNumber',
        'name' => 'getName',
        'initials' => 'getInitials',
        'contact_phone' => 'getContactPhone',
        'contact_email' => 'getContactEmail',
        'locale' => 'getLocale',
        'job_title' => 'getJobTitle',
        'default_location_id' => 'getDefaultLocationId',
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['initials'] = isset($data['initials']) ? $data['initials'] : null;
        $this->container['contact_phone'] = isset($data['contact_phone']) ? $data['contact_phone'] : null;
        $this->container['contact_email'] = isset($data['contact_email']) ? $data['contact_email'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['job_title'] = isset($data['job_title']) ? $data['job_title'] : null;
        $this->container['default_location_id'] = isset($data['default_location_id']) ? $data['default_location_id'] : null;
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

        if (!is_null($this->container['name']) && (strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['contact_phone']) && (strlen($this->container['contact_phone']) > 20)) {
            $invalidProperties[] = "invalid value for 'contact_phone', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['contact_email']) && (strlen($this->container['contact_email']) > 255)) {
            $invalidProperties[] = "invalid value for 'contact_email', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['locale']) && (strlen($this->container['locale']) > 2)) {
            $invalidProperties[] = "invalid value for 'locale', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['job_title']) && (strlen($this->container['job_title']) > 50)) {
            $invalidProperties[] = "invalid value for 'job_title', the character length must be smaller than or equal to 50.";
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

        if (strlen($this->container['name']) > 255) {
            return false;
        }
        if (strlen($this->container['contact_phone']) > 20) {
            return false;
        }
        if (strlen($this->container['contact_email']) > 255) {
            return false;
        }
        if (strlen($this->container['locale']) > 2) {
            return false;
        }
        if (strlen($this->container['job_title']) > 50) {
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
        if (!is_null($name) && (strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Employee., must be smaller than or equal to 255.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets initials
     *
     * @return string
     */
    public function getInitials()
    {
        return $this->container['initials'];
    }

    /**
     * Sets initials
     *
     * @param string $initials initials
     *
     * @return $this
     */
    public function setInitials($initials)
    {
        $this->container['initials'] = $initials;

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
        if (!is_null($contact_phone) && (strlen($contact_phone) > 20)) {
            throw new \InvalidArgumentException('invalid length for $contact_phone when calling Employee., must be smaller than or equal to 20.');
        }

        $this->container['contact_phone'] = $contact_phone;

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
        if (!is_null($contact_email) && (strlen($contact_email) > 255)) {
            throw new \InvalidArgumentException('invalid length for $contact_email when calling Employee., must be smaller than or equal to 255.');
        }

        $this->container['contact_email'] = $contact_email;

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
            throw new \InvalidArgumentException('invalid length for $locale when calling Employee., must be smaller than or equal to 2.');
        }

        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets job_title
     *
     * @return string
     */
    public function getJobTitle()
    {
        return $this->container['job_title'];
    }

    /**
     * Sets job_title
     *
     * @param string $job_title job_title
     *
     * @return $this
     */
    public function setJobTitle($job_title)
    {
        if (!is_null($job_title) && (strlen($job_title) > 50)) {
            throw new \InvalidArgumentException('invalid length for $job_title when calling Employee., must be smaller than or equal to 50.');
        }

        $this->container['job_title'] = $job_title;

        return $this;
    }

    /**
     * Gets default_location_id
     *
     * @return string
     */
    public function getDefaultLocationId()
    {
        return $this->container['default_location_id'];
    }

    /**
     * Sets default_location_id
     *
     * @param string $default_location_id default_location_id
     *
     * @return $this
     */
    public function setDefaultLocationId($default_location_id)
    {
        $this->container['default_location_id'] = $default_location_id;

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

