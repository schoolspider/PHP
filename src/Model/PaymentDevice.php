<?php
/**
 * PaymentDevice
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
 * PaymentDevice Class Doc Comment
 *
 * @category Class
 * @description Information from the payment device including the blob data and its mode of entry.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentDevice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentDevice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'deviceType' => 'string',
        'data' => 'string',
        'securityCode' => 'string',
        'cardholderName' => 'string',
        'cardFunction' => '\FirstData\FirstApi\Client\Model\CardFunction',
        'brand' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'deviceType' => null,
        'data' => null,
        'securityCode' => null,
        'cardholderName' => null,
        'cardFunction' => null,
        'brand' => null
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
        'deviceType' => 'deviceType',
        'data' => 'data',
        'securityCode' => 'securityCode',
        'cardholderName' => 'cardholderName',
        'cardFunction' => 'cardFunction',
        'brand' => 'brand'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deviceType' => 'setDeviceType',
        'data' => 'setData',
        'securityCode' => 'setSecurityCode',
        'cardholderName' => 'setCardholderName',
        'cardFunction' => 'setCardFunction',
        'brand' => 'setBrand'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deviceType' => 'getDeviceType',
        'data' => 'getData',
        'securityCode' => 'getSecurityCode',
        'cardholderName' => 'getCardholderName',
        'cardFunction' => 'getCardFunction',
        'brand' => 'getBrand'
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

    const DEVICE_TYPE_SWIPE = 'SWIPE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeviceTypeAllowableValues()
    {
        return [
            self::DEVICE_TYPE_SWIPE,
        ];
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
        $this->container['deviceType'] = isset($data['deviceType']) ? $data['deviceType'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['securityCode'] = isset($data['securityCode']) ? $data['securityCode'] : null;
        $this->container['cardholderName'] = isset($data['cardholderName']) ? $data['cardholderName'] : null;
        $this->container['cardFunction'] = isset($data['cardFunction']) ? $data['cardFunction'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['deviceType'] === null) {
            $invalidProperties[] = "'deviceType' can't be null";
        }
        $allowedValues = $this->getDeviceTypeAllowableValues();
        if (!is_null($this->container['deviceType']) && !in_array($this->container['deviceType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'deviceType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['data'] === null) {
            $invalidProperties[] = "'data' can't be null";
        }
        if (!preg_match("/^(?!\\s*$).+/", $this->container['data'])) {
            $invalidProperties[] = "invalid value for 'data', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if (!is_null($this->container['securityCode']) && (mb_strlen($this->container['securityCode']) > 4)) {
            $invalidProperties[] = "invalid value for 'securityCode', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['securityCode']) && (mb_strlen($this->container['securityCode']) < 3)) {
            $invalidProperties[] = "invalid value for 'securityCode', the character length must be bigger than or equal to 3.";
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
     * Gets deviceType
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->container['deviceType'];
    }

    /**
     * Sets deviceType
     *
     * @param string $deviceType The data format.
     *
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $allowedValues = $this->getDeviceTypeAllowableValues();
        if (!in_array($deviceType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'deviceType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['deviceType'] = $deviceType;

        return $this;
    }

    /**
     * Gets data
     *
     * @return string
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param string $data Data from device containing, at a minimum, a transaction-unique key serial number (KSN) and track 2 card data.
     *
     * @return $this
     */
    public function setData($data)
    {

        if ((!preg_match("/^(?!\\s*$).+/", $data))) {
            throw new \InvalidArgumentException("invalid value for $data when calling PaymentDevice., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets securityCode
     *
     * @return string|null
     */
    public function getSecurityCode()
    {
        return $this->container['securityCode'];
    }

    /**
     * Sets securityCode
     *
     * @param string|null $securityCode Card verification value/number.
     *
     * @return $this
     */
    public function setSecurityCode($securityCode)
    {
        if (!is_null($securityCode) && (mb_strlen($securityCode) > 4)) {
            throw new \InvalidArgumentException('invalid length for $securityCode when calling PaymentDevice., must be smaller than or equal to 4.');
        }
        if (!is_null($securityCode) && (mb_strlen($securityCode) < 3)) {
            throw new \InvalidArgumentException('invalid length for $securityCode when calling PaymentDevice., must be bigger than or equal to 3.');
        }

        $this->container['securityCode'] = $securityCode;

        return $this;
    }

    /**
     * Gets cardholderName
     *
     * @return string|null
     */
    public function getCardholderName()
    {
        return $this->container['cardholderName'];
    }

    /**
     * Sets cardholderName
     *
     * @param string|null $cardholderName Name of cardholder.
     *
     * @return $this
     */
    public function setCardholderName($cardholderName)
    {
        $this->container['cardholderName'] = $cardholderName;

        return $this;
    }

    /**
     * Gets cardFunction
     *
     * @return \FirstData\FirstApi\Client\Model\CardFunction|null
     */
    public function getCardFunction()
    {
        return $this->container['cardFunction'];
    }

    /**
     * Sets cardFunction
     *
     * @param \FirstData\FirstApi\Client\Model\CardFunction|null $cardFunction cardFunction
     *
     * @return $this
     */
    public function setCardFunction($cardFunction)
    {
        $this->container['cardFunction'] = $cardFunction;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand The card brand.
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

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


