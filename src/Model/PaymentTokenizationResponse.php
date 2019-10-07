<?php
/**
 * PaymentTokenizationResponse
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
 * OpenAPI spec version: 6.8.0.20190731.002
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FirstData\FirstApi\Client\Model;
use \FirstData\FirstApi\Client\ObjectSerializer;

/**
 * PaymentTokenizationResponse Class Doc Comment
 *
 * @category Class
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentTokenizationResponse extends BasicResponse 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentTokenizationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'requestStatus' => 'string',
        'requestTime' => 'int',
        'brand' => 'string',
        'country' => 'string',
        'paymentToken' => '\FirstData\FirstApi\Client\Model\PaymentTokenDetails',
        'paymentCard' => '\FirstData\FirstApi\Client\Model\PaymentCard',
        'processor' => '\FirstData\FirstApi\Client\Model\ProcessorData',
        'orderId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'requestStatus' => null,
        'requestTime' => 'int64',
        'brand' => null,
        'country' => null,
        'paymentToken' => null,
        'paymentCard' => null,
        'processor' => null,
        'orderId' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'requestStatus' => 'requestStatus',
        'requestTime' => 'requestTime',
        'brand' => 'brand',
        'country' => 'country',
        'paymentToken' => 'paymentToken',
        'paymentCard' => 'paymentCard',
        'processor' => 'processor',
        'orderId' => 'orderId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'requestStatus' => 'setRequestStatus',
        'requestTime' => 'setRequestTime',
        'brand' => 'setBrand',
        'country' => 'setCountry',
        'paymentToken' => 'setPaymentToken',
        'paymentCard' => 'setPaymentCard',
        'processor' => 'setProcessor',
        'orderId' => 'setOrderId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'requestStatus' => 'getRequestStatus',
        'requestTime' => 'getRequestTime',
        'brand' => 'getBrand',
        'country' => 'getCountry',
        'paymentToken' => 'getPaymentToken',
        'paymentCard' => 'getPaymentCard',
        'processor' => 'getProcessor',
        'orderId' => 'getOrderId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['requestStatus'] = isset($data['requestStatus']) ? $data['requestStatus'] : null;
        $this->container['requestTime'] = isset($data['requestTime']) ? $data['requestTime'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['paymentToken'] = isset($data['paymentToken']) ? $data['paymentToken'] : null;
        $this->container['paymentCard'] = isset($data['paymentCard']) ? $data['paymentCard'] : null;
        $this->container['processor'] = isset($data['processor']) ? $data['processor'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getRequestStatusAllowableValues();
        if (!is_null($this->container['requestStatus']) && !in_array($this->container['requestStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'requestStatus', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * @param string|null $orderId Client order ID if supplied by client, otherwise the order ID.
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

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

