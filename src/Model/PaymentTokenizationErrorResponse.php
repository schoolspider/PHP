<?php
/**
 * PaymentTokenizationErrorResponse
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
 * The version of the OpenAPI document: 21.5.0.20211029.001
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
 * PaymentTokenizationErrorResponse Class Doc Comment
 *
 * @category Class
 * @description Payment tokenization response with error field included.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentTokenizationErrorResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentTokenizationErrorResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'clientRequestId' => 'string',
        'apiTraceId' => 'string',
        'responseType' => '\FirstData\FirstApi\Client\Model\ResponseType',
        'requestStatus' => 'string',
        'requestTime' => 'int',
        'brand' => 'string',
        'country' => 'string',
        'paymentToken' => '\FirstData\FirstApi\Client\Model\PaymentTokenDetails',
        'paymentCard' => '\FirstData\FirstApi\Client\Model\PaymentCard',
        'processor' => '\FirstData\FirstApi\Client\Model\ProcessorData',
        'orderId' => 'string',
        'ipgTransactionId' => 'string',
        'merchantTransactionId' => 'string',
        'additionalResponseData' => '\FirstData\FirstApi\Client\Model\AdditionalResponseData',
        'error' => '\FirstData\FirstApi\Client\Model\Error'
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
        'requestStatus' => null,
        'requestTime' => 'int64',
        'brand' => null,
        'country' => null,
        'paymentToken' => null,
        'paymentCard' => null,
        'processor' => null,
        'orderId' => null,
        'ipgTransactionId' => null,
        'merchantTransactionId' => null,
        'additionalResponseData' => null,
        'error' => null
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
        'requestStatus' => 'requestStatus',
        'requestTime' => 'requestTime',
        'brand' => 'brand',
        'country' => 'country',
        'paymentToken' => 'paymentToken',
        'paymentCard' => 'paymentCard',
        'processor' => 'processor',
        'orderId' => 'orderId',
        'ipgTransactionId' => 'ipgTransactionId',
        'merchantTransactionId' => 'merchantTransactionId',
        'additionalResponseData' => 'additionalResponseData',
        'error' => 'error'
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
        'requestStatus' => 'setRequestStatus',
        'requestTime' => 'setRequestTime',
        'brand' => 'setBrand',
        'country' => 'setCountry',
        'paymentToken' => 'setPaymentToken',
        'paymentCard' => 'setPaymentCard',
        'processor' => 'setProcessor',
        'orderId' => 'setOrderId',
        'ipgTransactionId' => 'setIpgTransactionId',
        'merchantTransactionId' => 'setMerchantTransactionId',
        'additionalResponseData' => 'setAdditionalResponseData',
        'error' => 'setError'
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
        'requestStatus' => 'getRequestStatus',
        'requestTime' => 'getRequestTime',
        'brand' => 'getBrand',
        'country' => 'getCountry',
        'paymentToken' => 'getPaymentToken',
        'paymentCard' => 'getPaymentCard',
        'processor' => 'getProcessor',
        'orderId' => 'getOrderId',
        'ipgTransactionId' => 'getIpgTransactionId',
        'merchantTransactionId' => 'getMerchantTransactionId',
        'additionalResponseData' => 'getAdditionalResponseData',
        'error' => 'getError'
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

    const REQUEST_STATUS_DELETED = 'DELETED';
    const REQUEST_STATUS_FAILED = 'FAILED';
    const REQUEST_STATUS_SUCCESS = 'SUCCESS';
    const REQUEST_STATUS_APPROVED = 'APPROVED';
    const REQUEST_STATUS_WAITING = 'WAITING';
    const REQUEST_STATUS_VALIDATION_FAILED = 'VALIDATION_FAILED';
    const REQUEST_STATUS_DECLINED = 'DECLINED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequestStatusAllowableValues()
    {
        return [
            self::REQUEST_STATUS_DELETED,
            self::REQUEST_STATUS_FAILED,
            self::REQUEST_STATUS_SUCCESS,
            self::REQUEST_STATUS_APPROVED,
            self::REQUEST_STATUS_WAITING,
            self::REQUEST_STATUS_VALIDATION_FAILED,
            self::REQUEST_STATUS_DECLINED,
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
        $this->container['clientRequestId'] = isset($data['clientRequestId']) ? $data['clientRequestId'] : null;
        $this->container['apiTraceId'] = isset($data['apiTraceId']) ? $data['apiTraceId'] : null;
        $this->container['responseType'] = isset($data['responseType']) ? $data['responseType'] : null;
        $this->container['requestStatus'] = isset($data['requestStatus']) ? $data['requestStatus'] : null;
        $this->container['requestTime'] = isset($data['requestTime']) ? $data['requestTime'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['paymentToken'] = isset($data['paymentToken']) ? $data['paymentToken'] : null;
        $this->container['paymentCard'] = isset($data['paymentCard']) ? $data['paymentCard'] : null;
        $this->container['processor'] = isset($data['processor']) ? $data['processor'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['ipgTransactionId'] = isset($data['ipgTransactionId']) ? $data['ipgTransactionId'] : null;
        $this->container['merchantTransactionId'] = isset($data['merchantTransactionId']) ? $data['merchantTransactionId'] : null;
        $this->container['additionalResponseData'] = isset($data['additionalResponseData']) ? $data['additionalResponseData'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRequestStatusAllowableValues();
        if (!is_null($this->container['requestStatus']) && !in_array($this->container['requestStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'requestStatus', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['ipgTransactionId']) && (mb_strlen($this->container['ipgTransactionId']) > 14)) {
            $invalidProperties[] = "invalid value for 'ipgTransactionId', the character length must be smaller than or equal to 14.";
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
     * Gets requestStatus
     *
     * @return string|null
     */
    public function getRequestStatus()
    {
        return $this->container['requestStatus'];
    }

    /**
     * Sets requestStatus
     *
     * @param string|null $requestStatus The status of the request.
     *
     * @return $this
     */
    public function setRequestStatus($requestStatus)
    {
        $allowedValues = $this->getRequestStatusAllowableValues();
        if (!is_null($requestStatus) && !in_array($requestStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'requestStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['requestStatus'] = $requestStatus;

        return $this;
    }

    /**
     * Gets requestTime
     *
     * @return int|null
     */
    public function getRequestTime()
    {
        return $this->container['requestTime'];
    }

    /**
     * Sets requestTime
     *
     * @param int|null $requestTime Time of the request.
     *
     * @return $this
     */
    public function setRequestTime($requestTime)
    {
        $this->container['requestTime'] = $requestTime;

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
     * @param string|null $brand Card brand.
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country Country of the card issued.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets paymentToken
     *
     * @return \FirstData\FirstApi\Client\Model\PaymentTokenDetails|null
     */
    public function getPaymentToken()
    {
        return $this->container['paymentToken'];
    }

    /**
     * Sets paymentToken
     *
     * @param \FirstData\FirstApi\Client\Model\PaymentTokenDetails|null $paymentToken paymentToken
     *
     * @return $this
     */
    public function setPaymentToken($paymentToken)
    {
        $this->container['paymentToken'] = $paymentToken;

        return $this;
    }

    /**
     * Gets paymentCard
     *
     * @return \FirstData\FirstApi\Client\Model\PaymentCard|null
     */
    public function getPaymentCard()
    {
        return $this->container['paymentCard'];
    }

    /**
     * Sets paymentCard
     *
     * @param \FirstData\FirstApi\Client\Model\PaymentCard|null $paymentCard paymentCard
     *
     * @return $this
     */
    public function setPaymentCard($paymentCard)
    {
        $this->container['paymentCard'] = $paymentCard;

        return $this;
    }

    /**
     * Gets processor
     *
     * @return \FirstData\FirstApi\Client\Model\ProcessorData|null
     */
    public function getProcessor()
    {
        return $this->container['processor'];
    }

    /**
     * Sets processor
     *
     * @param \FirstData\FirstApi\Client\Model\ProcessorData|null $processor processor
     *
     * @return $this
     */
    public function setProcessor($processor)
    {
        $this->container['processor'] = $processor;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string|null $orderId Note - Client Order ID if supplied by client. If not supplied by client, IPG will generate. The first 12 alphanumeric digits are passed down to Fiserv Enterprise reporting tool, Clientline and Data File Manager (DFM).
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

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
        if (!is_null($ipgTransactionId) && (mb_strlen($ipgTransactionId) > 14)) {
            throw new \InvalidArgumentException('invalid length for $ipgTransactionId when calling PaymentTokenizationErrorResponse., must be smaller than or equal to 14.');
        }

        $this->container['ipgTransactionId'] = $ipgTransactionId;

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
     * @param string|null $merchantTransactionId The unique merchant transaction ID from the request header, if supplied.
     *
     * @return $this
     */
    public function setMerchantTransactionId($merchantTransactionId)
    {
        if (!is_null($merchantTransactionId) && (mb_strlen($merchantTransactionId) > 40)) {
            throw new \InvalidArgumentException('invalid length for $merchantTransactionId when calling PaymentTokenizationErrorResponse., must be smaller than or equal to 40.');
        }

        $this->container['merchantTransactionId'] = $merchantTransactionId;

        return $this;
    }

    /**
     * Gets additionalResponseData
     *
     * @return \FirstData\FirstApi\Client\Model\AdditionalResponseData|null
     */
    public function getAdditionalResponseData()
    {
        return $this->container['additionalResponseData'];
    }

    /**
     * Sets additionalResponseData
     *
     * @param \FirstData\FirstApi\Client\Model\AdditionalResponseData|null $additionalResponseData additionalResponseData
     *
     * @return $this
     */
    public function setAdditionalResponseData($additionalResponseData)
    {
        $this->container['additionalResponseData'] = $additionalResponseData;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \FirstData\FirstApi\Client\Model\Error|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \FirstData\FirstApi\Client\Model\Error|null $error error
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

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


