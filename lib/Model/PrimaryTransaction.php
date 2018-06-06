<?php

namespace FirstData\ApiClient\Model;

use \ArrayAccess;
use \FirstData\ApiClient\ObjectSerializer;


/**
 * Class PrimaryTransaction
 *
 * @category Class
 * @description Model for primary financial transactions
 * @package  FirstData\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PrimaryTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PrimaryTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transactionType' => 'string',
        'storeId' => 'string',
        'clientTransactionId' => 'string',
        'amount' => Amount::class,
        'paymentMethod' => PaymentMethod::class,
        'order' => Order::class,
        'basketItems' => '\FirstData\ApiClient\Model\BasketItem[]',
        'splitShipment' => SplitShipment::class,
        'transactionOrigin' => 'string',
        'additionalDetails' => PrimaryTransactionAdditionalDetails::class,
        'industrySpecificExtensions' => IndustrySpecificExtensions::class
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transactionType' => null,
        'storeId' => null,
        'clientTransactionId' => null,
        'amount' => null,
        'paymentMethod' => null,
        'order' => null,
        'basketItems' => null,
        'splitShipment' => null,
        'transactionOrigin' => null,
        'additionalDetails' => null,
        'industrySpecificExtensions' => null
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
        'transactionType' => 'transactionType',
        'storeId' => 'storeId',
        'clientTransactionId' => 'clientTransactionId',
        'amount' => 'amount',
        'paymentMethod' => 'paymentMethod',
        'order' => 'order',
        'basketItems' => 'basketItems',
        'splitShipment' => 'splitShipment',
        'transactionOrigin' => 'transactionOrigin',
        'additionalDetails' => 'additionalDetails',
        'industrySpecificExtensions' => 'industrySpecificExtensions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transactionType' => 'setTransactionType',
        'storeId' => 'setStoreId',
        'clientTransactionId' => 'setClientTransactionId',
        'amount' => 'setAmount',
        'paymentMethod' => 'setPaymentMethod',
        'order' => 'setOrder',
        'basketItems' => 'setBasketItems',
        'splitShipment' => 'setSplitShipment',
        'transactionOrigin' => 'setTransactionOrigin',
        'additionalDetails' => 'setAdditionalDetails',
        'industrySpecificExtensions' => 'setIndustrySpecificExtensions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transactionType' => 'getTransactionType',
        'storeId' => 'getStoreId',
        'clientTransactionId' => 'getClientTransactionId',
        'amount' => 'getAmount',
        'paymentMethod' => 'getPaymentMethod',
        'order' => 'getOrder',
        'basketItems' => 'getBasketItems',
        'splitShipment' => 'getSplitShipment',
        'transactionOrigin' => 'getTransactionOrigin',
        'additionalDetails' => 'getAdditionalDetails',
        'industrySpecificExtensions' => 'getIndustrySpecificExtensions'
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

    const TRANSACTION_TYPE_SALE = 'SALE';
    const TRANSACTION_TYPE_PRE_AUTH = 'PRE_AUTH';
    const TRANSACTION_TYPE_CREDIT = 'CREDIT';
    const TRANSACTION_TYPE_FORCED_TICKET = 'FORCED_TICKET';
    const TRANSACTION_ORIGIN_ECOM = 'ECOM';
    const TRANSACTION_ORIGIN_MOTO = 'MOTO';
    const TRANSACTION_ORIGIN_RETAIL = 'RETAIL';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionTypeAllowableValues()
    {
        return [
            self::TRANSACTION_TYPE_SALE,
            self::TRANSACTION_TYPE_PRE_AUTH,
            self::TRANSACTION_TYPE_CREDIT,
            self::TRANSACTION_TYPE_FORCED_TICKET
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionOriginAllowableValues()
    {
        return [
            self::TRANSACTION_ORIGIN_ECOM,
            self::TRANSACTION_ORIGIN_MOTO,
            self::TRANSACTION_ORIGIN_RETAIL
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
        $this->container['transactionType'] = $data['transactionType'] ?? null;
        $this->container['storeId'] = $data['storeId'] ?? null;
        $this->container['clientTransactionId'] = $data['clientTransactionId'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['paymentMethod'] = $data['paymentMethod'] ?? null;
        $this->container['order'] = $data['order'] ?? null;
        $this->container['basketItems'] = $data['basketItems'] ?? null;
        $this->container['splitShipment'] = $data['splitShipment'] ?? null;
        $this->container['transactionOrigin'] = $data['transactionOrigin'] ?? 'ECOM';
        $this->container['additionalDetails'] = $data['additionalDetails'] ?? null;
        $this->container['industrySpecificExtensions'] = $data['industrySpecificExtensions'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['transactionType'] === null) {
            $invalidProperties[] = "'transactionType' can't be null";
        }
        $allowedValues = $this->getTransactionTypeAllowableValues();
        if (null !== $this->container['transactionType'] && !\in_array($this->container['transactionType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transactionType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['paymentMethod'] === null) {
            $invalidProperties[] = "'paymentMethod' can't be null";
        }
        $allowedValues = $this->getTransactionOriginAllowableValues();
        if (null !== $this->container['transactionOrigin'] && !\in_array($this->container['transactionOrigin'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transactionOrigin', must be one of '%s'",
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
     * Gets transactionType
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transactionType'];
    }

    /**
     * Sets transactionType
     *
     * @param string $transactionType The type of the transaction performed.
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setTransactionType($transactionType)
    {
        $allowedValues = $this->getTransactionTypeAllowableValues();
        if (!\in_array($transactionType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transactionType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transactionType'] = $transactionType;

        return $this;
    }

    /**
     * Gets storeId
     *
     * @return string
     */
    public function getStoreId()
    {
        return $this->container['storeId'];
    }

    /**
     * Sets storeId
     *
     * @param string $storeId An optional outlet ID for clients that support multiple store in the same developer app.
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        $this->container['storeId'] = $storeId;

        return $this;
    }

    /**
     * Gets clientTransactionId
     *
     * @return string
     */
    public function getClientTransactionId()
    {
        return $this->container['clientTransactionId'];
    }

    /**
     * Sets clientTransactionId
     *
     * @param string $clientTransactionId The unique client Transaction ID from the request header, if supplied.
     *
     * @return $this
     */
    public function setClientTransactionId($clientTransactionId)
    {
        $this->container['clientTransactionId'] = $clientTransactionId;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \FirstData\ApiClient\Model\Amount
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \FirstData\ApiClient\Model\Amount $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets paymentMethod
     *
     * @return \FirstData\ApiClient\Model\PaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param \FirstData\ApiClient\Model\PaymentMethod $paymentMethod paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \FirstData\ApiClient\Model\Order
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \FirstData\ApiClient\Model\Order $order order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets basketItems
     *
     * @return \FirstData\ApiClient\Model\BasketItem[]
     */
    public function getBasketItems()
    {
        return $this->container['basketItems'];
    }

    /**
     * Sets basketItems
     *
     * @param \FirstData\ApiClient\Model\BasketItem[] $basketItems Required for some payment methods (e.g. Klarna)
     *
     * @return $this
     */
    public function setBasketItems($basketItems)
    {
        $this->container['basketItems'] = $basketItems;

        return $this;
    }

    /**
     * Gets splitShipment
     *
     * @return \FirstData\ApiClient\Model\SplitShipment
     */
    public function getSplitShipment()
    {
        return $this->container['splitShipment'];
    }

    /**
     * Sets splitShipment
     *
     * @param \FirstData\ApiClient\Model\SplitShipment $splitShipment splitShipment
     *
     * @return $this
     */
    public function setSplitShipment($splitShipment)
    {
        $this->container['splitShipment'] = $splitShipment;

        return $this;
    }

    /**
     * Gets transactionOrigin
     *
     * @return string
     */
    public function getTransactionOrigin()
    {
        return $this->container['transactionOrigin'];
    }

    /**
     * Sets transactionOrigin
     *
     * @param string $transactionOrigin The origin of the transaction
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setTransactionOrigin($transactionOrigin)
    {
        $allowedValues = $this->getTransactionOriginAllowableValues();
        if (null !== $transactionOrigin && !\in_array($transactionOrigin, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transactionOrigin', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transactionOrigin'] = $transactionOrigin;

        return $this;
    }

    /**
     * Gets additionalDetails
     *
     * @return \FirstData\ApiClient\Model\PrimaryTransactionAdditionalDetails
     */
    public function getAdditionalDetails()
    {
        return $this->container['additionalDetails'];
    }

    /**
     * Sets additionalDetails
     *
     * @param \FirstData\ApiClient\Model\PrimaryTransactionAdditionalDetails $additionalDetails additionalDetails
     *
     * @return $this
     */
    public function setAdditionalDetails($additionalDetails)
    {
        $this->container['additionalDetails'] = $additionalDetails;

        return $this;
    }

    /**
     * Gets industrySpecificExtensions
     *
     * @return \FirstData\ApiClient\Model\IndustrySpecificExtensions
     */
    public function getIndustrySpecificExtensions()
    {
        return $this->container['industrySpecificExtensions'];
    }

    /**
     * Sets industrySpecificExtensions
     *
     * @param \FirstData\ApiClient\Model\IndustrySpecificExtensions $industrySpecificExtensions industrySpecificExtensions
     *
     * @return $this
     */
    public function setIndustrySpecificExtensions($industrySpecificExtensions)
    {
        $this->container['industrySpecificExtensions'] = $industrySpecificExtensions;

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

