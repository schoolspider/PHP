<?php
/**
 * ExchangeRateResponse
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
 * ExchangeRateResponse Class Doc Comment
 *
 * @category Class
 * @description Exchange rate response.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExchangeRateResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExchangeRateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'clientRequestId' => 'string',
        'apiTraceId' => 'string',
        'responseType' => '\FirstData\FirstApi\Client\Model\ResponseType',
        'ipgTransactionId' => 'string',
        'requestTime' => 'string',
        'exchangeRateDetails' => '\FirstData\FirstApi\Client\Model\ExchangeRateDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'clientRequestId' => null,
        'apiTraceId' => null,
        'responseType' => null,
        'ipgTransactionId' => null,
        'requestTime' => null,
        'exchangeRateDetails' => null
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
        'clientRequestId' => 'clientRequestId',
        'apiTraceId' => 'apiTraceId',
        'responseType' => 'responseType',
        'ipgTransactionId' => 'ipgTransactionId',
        'requestTime' => 'requestTime',
        'exchangeRateDetails' => 'exchangeRateDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clientRequestId' => 'setClientRequestId',
        'apiTraceId' => 'setApiTraceId',
        'responseType' => 'setResponseType',
        'ipgTransactionId' => 'setIpgTransactionId',
        'requestTime' => 'setRequestTime',
        'exchangeRateDetails' => 'setExchangeRateDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clientRequestId' => 'getClientRequestId',
        'apiTraceId' => 'getApiTraceId',
        'responseType' => 'getResponseType',
        'ipgTransactionId' => 'getIpgTransactionId',
        'requestTime' => 'getRequestTime',
        'exchangeRateDetails' => 'getExchangeRateDetails'
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
        $this->container['clientRequestId'] = isset($data['clientRequestId']) ? $data['clientRequestId'] : null;
        $this->container['apiTraceId'] = isset($data['apiTraceId']) ? $data['apiTraceId'] : null;
        $this->container['responseType'] = isset($data['responseType']) ? $data['responseType'] : null;
        $this->container['ipgTransactionId'] = isset($data['ipgTransactionId']) ? $data['ipgTransactionId'] : null;
        $this->container['requestTime'] = isset($data['requestTime']) ? $data['requestTime'] : null;
        $this->container['exchangeRateDetails'] = isset($data['exchangeRateDetails']) ? $data['exchangeRateDetails'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets clientRequestId
     *
     * @return string|null
     */
    public function getClientRequestId()
    {
        return $this->container['clientRequestId'];
    }

    /**
     * Sets clientRequestId
     *
     * @param string|null $clientRequestId Echoes back the value in the request header for tracking.
     *
     * @return $this
     */
    public function setClientRequestId($clientRequestId)
    {
        $this->container['clientRequestId'] = $clientRequestId;

        return $this;
    }

    /**
     * Gets apiTraceId
     *
     * @return string|null
     */
    public function getApiTraceId()
    {
        return $this->container['apiTraceId'];
    }

    /**
     * Sets apiTraceId
     *
     * @param string|null $apiTraceId Request identifier in API, can be used to request logs from the support team.
     *
     * @return $this
     */
    public function setApiTraceId($apiTraceId)
    {
        $this->container['apiTraceId'] = $apiTraceId;

        return $this;
    }

    /**
     * Gets responseType
     *
     * @return \FirstData\FirstApi\Client\Model\ResponseType|null
     */
    public function getResponseType()
    {
        return $this->container['responseType'];
    }

    /**
     * Sets responseType
     *
     * @param \FirstData\FirstApi\Client\Model\ResponseType|null $responseType responseType
     *
     * @return $this
     */
    public function setResponseType($responseType)
    {
        $this->container['responseType'] = $responseType;

        return $this;
    }

    /**
     * Gets ipgTransactionId
     *
     * @return string|null
     */
    public function getIpgTransactionId()
    {
        return $this->container['ipgTransactionId'];
    }

    /**
     * Sets ipgTransactionId
     *
     * @param string|null $ipgTransactionId The response transaction ID.
     *
     * @return $this
     */
    public function setIpgTransactionId($ipgTransactionId)
    {
        $this->container['ipgTransactionId'] = $ipgTransactionId;

        return $this;
    }

    /**
     * Gets requestTime
     *
     * @return string|null
     */
    public function getRequestTime()
    {
        return $this->container['requestTime'];
    }

    /**
     * Sets requestTime
     *
     * @param string|null $requestTime Time of the request. The used format is \"yyyy-MM-dd'T'HH:mm:ss.SSSXXX\".
     *
     * @return $this
     */
    public function setRequestTime($requestTime)
    {
        $this->container['requestTime'] = $requestTime;

        return $this;
    }

    /**
     * Gets exchangeRateDetails
     *
     * @return \FirstData\FirstApi\Client\Model\ExchangeRateDetails|null
     */
    public function getExchangeRateDetails()
    {
        return $this->container['exchangeRateDetails'];
    }

    /**
     * Sets exchangeRateDetails
     *
     * @param \FirstData\FirstApi\Client\Model\ExchangeRateDetails|null $exchangeRateDetails exchangeRateDetails
     *
     * @return $this
     */
    public function setExchangeRateDetails($exchangeRateDetails)
    {
        $this->container['exchangeRateDetails'] = $exchangeRateDetails;

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


