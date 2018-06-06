<?php

namespace FirstData\ApiClient\Model;

use \ArrayAccess;
use \FirstData\ApiClient\ObjectSerializer;


/**
 * Class WalletDecryptionResponseDecryptedData
 *
 * @category Class
 * @package  FirstData\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WalletDecryptionResponseDecryptedData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WalletDecryptionResponse_decryptedData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transactionAmount' => Amount::class,
        'paymentCard' => PaymentCard::class,
        'requestStatus' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transactionAmount' => null,
        'paymentCard' => null,
        'requestStatus' => null
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
        'transactionAmount' => 'transactionAmount',
        'paymentCard' => 'paymentCard',
        'requestStatus' => 'requestStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transactionAmount' => 'setTransactionAmount',
        'paymentCard' => 'setPaymentCard',
        'requestStatus' => 'setRequestStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transactionAmount' => 'getTransactionAmount',
        'paymentCard' => 'getPaymentCard',
        'requestStatus' => 'getRequestStatus'
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

    const REQUEST_STATUS_SUCCESS = 'SUCCESS';
    const REQUEST_STATUS_VALIDATION_FAILED = 'VALIDATION_FAILED';
    const REQUEST_STATUS_ERROR = 'ERROR';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequestStatusAllowableValues()
    {
        return [
            self::REQUEST_STATUS_SUCCESS,
            self::REQUEST_STATUS_VALIDATION_FAILED,
            self::REQUEST_STATUS_ERROR
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
        $this->container['transactionAmount'] = $data['transactionAmount'] ?? null;
        $this->container['paymentCard'] = $data['paymentCard'] ?? null;
        $this->container['requestStatus'] = $data['requestStatus'] ?? null;
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
        if (null !== $this->container['requestStatus'] && !\in_array($this->container['requestStatus'], $allowedValues, true)) {
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
        return \count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets transactionAmount
     *
     * @return \FirstData\ApiClient\Model\Amount
     */
    public function getTransactionAmount()
    {
        return $this->container['transactionAmount'];
    }

    /**
     * Sets transactionAmount
     *
     * @param \FirstData\ApiClient\Model\Amount $transactionAmount transactionAmount
     *
     * @return $this
     */
    public function setTransactionAmount($transactionAmount)
    {
        $this->container['transactionAmount'] = $transactionAmount;

        return $this;
    }

    /**
     * Gets paymentCard
     *
     * @return \FirstData\ApiClient\Model\PaymentCard
     */
    public function getPaymentCard()
    {
        return $this->container['paymentCard'];
    }

    /**
     * Sets paymentCard
     *
     * @param \FirstData\ApiClient\Model\PaymentCard $paymentCard paymentCard
     *
     * @return $this
     */
    public function setPaymentCard($paymentCard)
    {
        $this->container['paymentCard'] = $paymentCard;

        return $this;
    }

    /**
     * Gets requestStatus
     *
     * @return string
     */
    public function getRequestStatus()
    {
        return $this->container['requestStatus'];
    }

    /**
     * Sets requestStatus
     *
     * @param string $requestStatus Transaction status. If it's anything other than 'APPROVED', please refer to 400s HTTP error codes or decline. See Error object for details.
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setRequestStatus($requestStatus)
    {
        $allowedValues = $this->getRequestStatusAllowableValues();
        if (null !== $requestStatus && !\in_array($requestStatus, $allowedValues, true)) {
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
        return $this->container[$offset] ?? null;
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
        if (null === $offset) {
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
        if (\defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

