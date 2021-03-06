<?php
/**
 * Plan
 *
 * PHP version 5
 *
 * @category Class
 * @package  Upcloud\ApiClient
 */

/**
 * Upcloud api
 *
 * The UpCloud API consists of operations used to control resources on UpCloud. The API is a web service interface. HTTPS is used to connect to the API. The API follows the principles of a RESTful web service wherever possible. The base URL for all API operations is  https://api.upcloud.com/. All API operations require authentication.
 *
 * OpenAPI spec version: 1.2.0
 * 
 */


namespace Upcloud\ApiClient\Model;

use \ArrayAccess;

/**
 * Plan Class Doc Comment
 *
 * @category    Class
 * @description Server plans are preconfigured server configurations with fixed price. Each plan includes certain number of CPU cores, memory amount, storage and transfer quota in addition of one public IPv4 address (private IPv4 addresses and public IPv6 addresses are currently free of charge, so they are not included in plan).
 * @package     Upcloud\ApiClient
 */
class Plan implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Plan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'core_number' => 'float',
        'memory_amount' => 'float',
        'name' => 'string',
        'public_traffic_out' => 'string',
        'storage_size' => 'string',
        'storage_tier' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'core_number' => null,
        'memory_amount' => null,
        'name' => null,
        'public_traffic_out' => null,
        'storage_size' => null,
        'storage_tier' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'core_number' => 'core_number',
        'memory_amount' => 'memory_amount',
        'name' => 'name',
        'public_traffic_out' => 'public_traffic_out',
        'storage_size' => 'storage_size',
        'storage_tier' => 'storage_tier'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'core_number' => 'setCoreNumber',
        'memory_amount' => 'setMemoryAmount',
        'name' => 'setName',
        'public_traffic_out' => 'setPublicTrafficOut',
        'storage_size' => 'setStorageSize',
        'storage_tier' => 'setStorageTier'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'core_number' => 'getCoreNumber',
        'memory_amount' => 'getMemoryAmount',
        'name' => 'getName',
        'public_traffic_out' => 'getPublicTrafficOut',
        'storage_size' => 'getStorageSize',
        'storage_tier' => 'getStorageTier'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['core_number'] = isset($data['core_number']) ? $data['core_number'] : null;
        $this->container['memory_amount'] = isset($data['memory_amount']) ? $data['memory_amount'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['public_traffic_out'] = isset($data['public_traffic_out']) ? $data['public_traffic_out'] : null;
        $this->container['storage_size'] = isset($data['storage_size']) ? $data['storage_size'] : null;
        $this->container['storage_tier'] = isset($data['storage_tier']) ? $data['storage_tier'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets core_number
     * @return float
     */
    public function getCoreNumber()
    {
        return $this->container['core_number'];
    }

    /**
     * Sets core_number
     * @param float $core_number
     * @return $this
     */
    public function setCoreNumber($core_number)
    {
        $this->container['core_number'] = $core_number;

        return $this;
    }

    /**
     * Gets memory_amount
     * @return float
     */
    public function getMemoryAmount()
    {
        return $this->container['memory_amount'];
    }

    /**
     * Sets memory_amount
     * @param float $memory_amount
     * @return $this
     */
    public function setMemoryAmount($memory_amount)
    {
        $this->container['memory_amount'] = $memory_amount;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets public_traffic_out
     * @return string
     */
    public function getPublicTrafficOut()
    {
        return $this->container['public_traffic_out'];
    }

    /**
     * Sets public_traffic_out
     * @param string $public_traffic_out
     * @return $this
     */
    public function setPublicTrafficOut($public_traffic_out)
    {
        $this->container['public_traffic_out'] = $public_traffic_out;

        return $this;
    }

    /**
     * Gets storage_size
     * @return string
     */
    public function getStorageSize()
    {
        return $this->container['storage_size'];
    }

    /**
     * Sets storage_size
     * @param string $storage_size
     * @return $this
     */
    public function setStorageSize($storage_size)
    {
        $this->container['storage_size'] = $storage_size;

        return $this;
    }

    /**
     * Gets storage_tier
     * @return string
     */
    public function getStorageTier()
    {
        return $this->container['storage_tier'];
    }

    /**
     * Sets storage_tier
     * @param string $storage_tier
     * @return $this
     */
    public function setStorageTier($storage_tier)
    {
        $this->container['storage_tier'] = $storage_tier;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Upcloud\ApiClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Upcloud\ApiClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


