<?php
/**
 * AccountVerificationRequest
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
 * The version of the OpenAPI document: 21.2.0.20210406.001
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
 * AccountVerificationRequest Class Doc Comment
 *
 * @category Class
 * @description Request to verify payment card or payment token. Abstract class, do not use this class directly, use one of its children.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountVerificationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'requestType';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountVerificationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'requestType' => 'string',
        'billingAddress' => '\FirstData\FirstApi\Client\Model\Address',
        'storeId' => 'string',
        'merchantTransactionId' => 'string',
        'additionalDetails' => '\FirstData\FirstApi\Client\Model\AdditionalDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'requestType' => null,
        'billingAddress' => null,
        'storeId' => null,
        'merchantTransactionId' => null,
        'additionalDetails' => null
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
        'requestType' => 'requestType',
        'billingAddress' => 'billingAddress',
        'storeId' => 'storeId',
        'merchantTransactionId' => 'merchantTransactionId',
        'additionalDetails' => 'additionalDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'requestType' => 'setRequestType',
        'billingAddress' => 'setBillingAddress',
        'storeId' => 'setStoreId',
        'merchantTransactionId' => 'setMerchantTransactionId',
        'additionalDetails' => 'setAdditionalDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'requestType' => 'getRequestType',
        'billingAddress' => 'getBillingAddress',
        'storeId' => 'getStoreId',
        'merchantTransactionId' => 'getMerchantTransactionId',
        'additionalDetails' => 'getAdditionalDetails'
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
        $this->container['requestType'] = isset($data['requestType']) ? $data['requestType'] : null;
        $this->container['billingAddress'] = isset($data['billingAddress']) ? $data['billingAddress'] : null;
        $this->container['storeId'] = isset($data['storeId']) ? $data['storeId'] : null;
        $this->container['merchantTransactionId'] = isset($data['merchantTransactionId']) ? $data['merchantTransactionId'] : null;
        $this->container['additionalDetails'] = isset($data['additionalDetails']) ? $data['additionalDetails'] : null;

        // Initialize discriminator property with the model name.
        $this->container['requestType'] = static::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['requestType'] === null) {
            $invalidProperties[] = "'requestType' can't be null";
        }
        if (!is_null($this->container['storeId']) && (mb_strlen($this->container['storeId']) > 20)) {
            $invalidProperties[] = "invalid value for 'storeId', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['merchantTransactionId']) && (mb_strlen($this->container['merchantTransactionId']) > 40)) {
            $invalidProperties[] = "invalid value for 'merchantTransactionId', the character length must be smaller than or equal to 40.";
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
     * Gets requestType
     *
     * @return string
     */
    public function getRequestType()
    {
        return $this->container['requestType'];
    }

    /**
     * Sets requestType
     *
     * @param string $requestType Object name of the account verification request.
     *
     * @return $this
     */
    public function setRequestType($requestType)
    {
        $this->container['requestType'] = $requestType;

        return $this;
    }

    /**
     * Gets billingAddress
     *
     * @return \FirstData\FirstApi\Client\Model\Address|null
     */
    public function getBillingAddress()
    {
        return $this->container['billingAddress'];
    }

    /**
     * Sets billingAddress
     *
     * @param \FirstData\FirstApi\Client\Model\Address|null $billingAddress billingAddress
     *
     * @return $this
     */
    public function setBillingAddress($billingAddress)
    {
        $this->container['billingAddress'] = $billingAddress;

        return $this;
    }

    /**
     * Gets storeId
     *
     * @return string|null
     */
    public function getStoreId()
    {
        return $this->container['storeId'];
    }

    /**
     * Sets storeId
     *
     * @param string|null $storeId An optional outlet ID for clients that support multiple stores in the same app.
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        if (!is_null($storeId) && (mb_strlen($storeId) > 20)) {
            throw new \InvalidArgumentException('invalid length for $storeId when calling AccountVerificationRequest., must be smaller than or equal to 20.');
        }

        $this->container['storeId'] = $storeId;

        return $this;
    }

    /**
     * Gets merchantTransactionId
     *
     * @return string|null
     */
    public function getMerchantTransactionId()
    {
        return $this->container['merchantTransactionId'];
    }

    /**
     * Sets merchantTransactionId
     *
     * @param string|null $merchantTransactionId The unique merchant transaction ID from the request, if supplied.
     *
     * @return $this
     */
    public function setMerchantTransactionId($merchantTransactionId)
    {
        if (!is_null($merchantTransactionId) && (mb_strlen($merchantTransactionId) > 40)) {
            throw new \InvalidArgumentException('invalid length for $merchantTransactionId when calling AccountVerificationRequest., must be smaller than or equal to 40.');
        }

        $this->container['merchantTransactionId'] = $merchantTransactionId;

        return $this;
    }

    /**
     * Gets additionalDetails
     *
     * @return \FirstData\FirstApi\Client\Model\AdditionalDetails|null
     */
    public function getAdditionalDetails()
    {
        return $this->container['additionalDetails'];
    }

    /**
     * Sets additionalDetails
     *
     * @param \FirstData\FirstApi\Client\Model\AdditionalDetails|null $additionalDetails additionalDetails
     *
     * @return $this
     */
    public function setAdditionalDetails($additionalDetails)
    {
        $this->container['additionalDetails'] = $additionalDetails;

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


