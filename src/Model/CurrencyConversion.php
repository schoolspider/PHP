<?php
/**
 * CurrencyConversion
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
 * CurrencyConversion Class Doc Comment
 *
 * @category Class
 * @description Currency conversion. Abstract class, do not use this class directly, use one of its children: Dcc, DynamicPricing.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CurrencyConversion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'conversionType';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CurrencyConversion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'conversionType' => 'string',
        'inquiryRateId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'conversionType' => null,
        'inquiryRateId' => null
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
        'conversionType' => 'conversionType',
        'inquiryRateId' => 'inquiryRateId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conversionType' => 'setConversionType',
        'inquiryRateId' => 'setInquiryRateId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conversionType' => 'getConversionType',
        'inquiryRateId' => 'getInquiryRateId'
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
        $this->container['conversionType'] = isset($data['conversionType']) ? $data['conversionType'] : null;
        $this->container['inquiryRateId'] = isset($data['inquiryRateId']) ? $data['inquiryRateId'] : null;

        // Initialize discriminator property with the model name.
        $this->container['conversionType'] = static::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['conversionType'] === null) {
            $invalidProperties[] = "'conversionType' can't be null";
        }
        if ($this->container['inquiryRateId'] === null) {
            $invalidProperties[] = "'inquiryRateId' can't be null";
        }
        if (!preg_match("/^(?!\\s*$).+/", $this->container['inquiryRateId'])) {
            $invalidProperties[] = "invalid value for 'inquiryRateId', must be conform to the pattern /^(?!\\s*$).+/.";
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
     * Gets conversionType
     *
     * @return string
     */
    public function getConversionType()
    {
        return $this->container['conversionType'];
    }

    /**
     * Sets conversionType
     *
     * @param string $conversionType Type of currency conversion.
     *
     * @return $this
     */
    public function setConversionType($conversionType)
    {
        $this->container['conversionType'] = $conversionType;

        return $this;
    }

    /**
     * Gets inquiryRateId
     *
     * @return string
     */
    public function getInquiryRateId()
    {
        return $this->container['inquiryRateId'];
    }

    /**
     * Sets inquiryRateId
     *
     * @param string $inquiryRateId Inquiry rate id.
     *
     * @return $this
     */
    public function setInquiryRateId($inquiryRateId)
    {

        if ((!preg_match("/^(?!\\s*$).+/", $inquiryRateId))) {
            throw new \InvalidArgumentException("invalid value for $inquiryRateId when calling CurrencyConversion., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['inquiryRateId'] = $inquiryRateId;

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


