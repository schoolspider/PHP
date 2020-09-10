<?php
/**
 * TeleCheckICAPaymentMethodAllOf
 *
 * PHP version 5
 *
 * @category Class
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment Gateway API Specification.
 *
 * The documentation here is designed to provide all of the technical guidance required to consume and integrate with our APIs for payment processing. To learn more about our APIs please visit https://docs.firstdata.com/org/gateway.
 *
 * The version of the OpenAPI document: 6.13.0.20200810.001
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FirstData\FirstApi\Client\Model;

use \ArrayAccess;
use \FirstData\FirstApi\Client\ObjectSerializer;

/**
 * TeleCheckICAPaymentMethodAllOf Class Doc Comment
 *
 * @category Class
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TeleCheckICAPaymentMethodAllOf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TeleCheckICAPaymentMethod_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customerIpAddress' => 'string',
        'imeiCode' => 'string',
        'recurringType' => '\FirstData\FirstApi\Client\Model\AchRecurringType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'customerIpAddress' => null,
        'imeiCode' => null,
        'recurringType' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'customerIpAddress' => 'customerIpAddress',
        'imeiCode' => 'imeiCode',
        'recurringType' => 'recurringType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customerIpAddress' => 'setCustomerIpAddress',
        'imeiCode' => 'setImeiCode',
        'recurringType' => 'setRecurringType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customerIpAddress' => 'getCustomerIpAddress',
        'imeiCode' => 'getImeiCode',
        'recurringType' => 'getRecurringType'
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
        return self::$openAPIModelName;
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
        $this->container['customerIpAddress'] = isset($data['customerIpAddress']) ? $data['customerIpAddress'] : null;
        $this->container['imeiCode'] = isset($data['imeiCode']) ? $data['imeiCode'] : null;
        $this->container['recurringType'] = isset($data['recurringType']) ? $data['recurringType'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['customerIpAddress'] === null) {
            $invalidProperties[] = "'customerIpAddress' can't be null";
        }
        if ((mb_strlen($this->container['customerIpAddress']) > 15)) {
            $invalidProperties[] = "invalid value for 'customerIpAddress', the character length must be smaller than or equal to 15.";
        }

        if (!preg_match("/^[0-9\\.]+$/", $this->container['customerIpAddress'])) {
            $invalidProperties[] = "invalid value for 'customerIpAddress', must be conform to the pattern /^[0-9\\.]+$/.";
        }

        if (!is_null($this->container['imeiCode']) && (mb_strlen($this->container['imeiCode']) > 25)) {
            $invalidProperties[] = "invalid value for 'imeiCode', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['imeiCode']) && !preg_match("/(?=.*[^\\s])^[^|]+$/", $this->container['imeiCode'])) {
            $invalidProperties[] = "invalid value for 'imeiCode', must be conform to the pattern /(?=.*[^\\s])^[^|]+$/.";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets customerIpAddress
     *
     * @return string
     */
    public function getCustomerIpAddress()
    {
        return $this->container['customerIpAddress'];
    }

    /**
     * Sets customerIpAddress
     *
     * @param string $customerIpAddress Customer IP address from the terminal where the order was placed (as captured by merchant).
     *
     * @return $this
     */
    public function setCustomerIpAddress($customerIpAddress)
    {
        if ((mb_strlen($customerIpAddress) > 15)) {
            throw new \InvalidArgumentException('invalid length for $customerIpAddress when calling TeleCheckICAPaymentMethodAllOf., must be smaller than or equal to 15.');
        }
        if ((!preg_match("/^[0-9\\.]+$/", $customerIpAddress))) {
            throw new \InvalidArgumentException("invalid value for $customerIpAddress when calling TeleCheckICAPaymentMethodAllOf., must conform to the pattern /^[0-9\\.]+$/.");
        }

        $this->container['customerIpAddress'] = $customerIpAddress;

        return $this;
    }

    /**
     * Gets imeiCode
     *
     * @return string|null
     */
    public function getImeiCode()
    {
        return $this->container['imeiCode'];
    }

    /**
     * Sets imeiCode
     *
     * @param string|null $imeiCode International mobile equipment identity code.
     *
     * @return $this
     */
    public function setImeiCode($imeiCode)
    {
        if (!is_null($imeiCode) && (mb_strlen($imeiCode) > 25)) {
            throw new \InvalidArgumentException('invalid length for $imeiCode when calling TeleCheckICAPaymentMethodAllOf., must be smaller than or equal to 25.');
        }
        if (!is_null($imeiCode) && (!preg_match("/(?=.*[^\\s])^[^|]+$/", $imeiCode))) {
            throw new \InvalidArgumentException("invalid value for $imeiCode when calling TeleCheckICAPaymentMethodAllOf., must conform to the pattern /(?=.*[^\\s])^[^|]+$/.");
        }

        $this->container['imeiCode'] = $imeiCode;

        return $this;
    }

    /**
     * Gets recurringType
     *
     * @return \FirstData\FirstApi\Client\Model\AchRecurringType|null
     */
    public function getRecurringType()
    {
        return $this->container['recurringType'];
    }

    /**
     * Sets recurringType
     *
     * @param \FirstData\FirstApi\Client\Model\AchRecurringType|null $recurringType recurringType
     *
     * @return $this
     */
    public function setRecurringType($recurringType)
    {
        $this->container['recurringType'] = $recurringType;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
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
     * @param integer $offset Offset
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
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * @param integer $offset Offset
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


