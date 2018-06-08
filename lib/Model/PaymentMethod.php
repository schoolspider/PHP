<?php

namespace FirstData\ApiClient\Model;

use \ArrayAccess;
use \FirstData\ApiClient\ObjectSerializer;


/**
 * Class PaymentMethod
 *
 * @category Class
 * @package  FirstData\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentMethod implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'paymentCard' => PaymentCard::class,
        'sepaDirectDebit' => SepaDirectDebit::class,
        'applePay' => ApplePay::class
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'paymentCard' => null,
        'sepaDirectDebit' => null,
        'applePay' => null
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
        'type' => 'type',
        'paymentCard' => 'paymentCard',
        'sepaDirectDebit' => 'sepaDirectDebit',
        'applePay' => 'applePay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'paymentCard' => 'setPaymentCard',
        'sepaDirectDebit' => 'setSepaDirectDebit',
        'applePay' => 'setApplePay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'paymentCard' => 'getPaymentCard',
        'sepaDirectDebit' => 'getSepaDirectDebit',
        'applePay' => 'getApplePay'
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

    const TYPE_PAYMENT_CARD = 'PAYMENT_CARD';
    const TYPE_SEPA_DIRECT_DEBIT = 'SEPA_DIRECT_DEBIT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PAYMENT_CARD,
            self::TYPE_SEPA_DIRECT_DEBIT
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['paymentCard'] = isset($data['paymentCard']) ? $data['paymentCard'] : null;
        $this->container['sepaDirectDebit'] = isset($data['sepaDirectDebit']) ? $data['sepaDirectDebit'] : null;
        $this->container['applePay'] = isset($data['applePay']) ? $data['applePay'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (null !== $this->container['type'] && !\in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of payment method. PayPal can only do 'Credit' as primary transactions with Order. Email is mandatory. PayPal secondary transactions are processed as any other secondary transactions.
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!\in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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
     * Gets sepaDirectDebit
     *
     * @return \FirstData\ApiClient\Model\SepaDirectDebit
     */
    public function getSepaDirectDebit()
    {
        return $this->container['sepaDirectDebit'];
    }

    /**
     * Sets sepaDirectDebit
     *
     * @param \FirstData\ApiClient\Model\SepaDirectDebit $sepaDirectDebit sepaDirectDebit
     *
     * @return $this
     */
    public function setSepaDirectDebit($sepaDirectDebit)
    {
        $this->container['sepaDirectDebit'] = $sepaDirectDebit;

        return $this;
    }

    /**
     * Gets applePay
     *
     * @return \FirstData\ApiClient\Model\ApplePay
     */
    public function getApplePay()
    {
        return $this->container['applePay'];
    }

    /**
     * Sets applePay
     *
     * @param \FirstData\ApiClient\Model\ApplePay $applePay applePay
     *
     * @return $this
     */
    public function setApplePay($applePay)
    {
        $this->container['applePay'] = $applePay;

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


