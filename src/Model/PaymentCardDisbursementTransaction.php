<?php
/**
 * PaymentCardDisbursementTransaction
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
use \FirstData\FirstApi\Client\ObjectSerializer;

/**
 * PaymentCardDisbursementTransaction Class Doc Comment
 *
 * @category Class
 * @description Request to create disbursement transaction using a payment card.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentCardDisbursementTransaction extends PrimaryTransaction 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentCardDisbursementTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'disbursement' => '\FirstData\FirstApi\Client\Model\Disbursement',
        'paymentMethod' => '\FirstData\FirstApi\Client\Model\PaymentCardPaymentMethod',
        'storedCredentials' => '\FirstData\FirstApi\Client\Model\StoredCredential',
        'createToken' => '\FirstData\FirstApi\Client\Model\CreatePaymentToken'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'disbursement' => null,
        'paymentMethod' => null,
        'storedCredentials' => null,
        'createToken' => null
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
        'disbursement' => 'disbursement',
        'paymentMethod' => 'paymentMethod',
        'storedCredentials' => 'storedCredentials',
        'createToken' => 'createToken'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'disbursement' => 'setDisbursement',
        'paymentMethod' => 'setPaymentMethod',
        'storedCredentials' => 'setStoredCredentials',
        'createToken' => 'setCreateToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'disbursement' => 'getDisbursement',
        'paymentMethod' => 'getPaymentMethod',
        'storedCredentials' => 'getStoredCredentials',
        'createToken' => 'getCreateToken'
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

    

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['disbursement'] = isset($data['disbursement']) ? $data['disbursement'] : null;
        $this->container['paymentMethod'] = isset($data['paymentMethod']) ? $data['paymentMethod'] : null;
        $this->container['storedCredentials'] = isset($data['storedCredentials']) ? $data['storedCredentials'] : null;
        $this->container['createToken'] = isset($data['createToken']) ? $data['createToken'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['disbursement'] === null) {
            $invalidProperties[] = "'disbursement' can't be null";
        }
        if ($this->container['paymentMethod'] === null) {
            $invalidProperties[] = "'paymentMethod' can't be null";
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
     * Gets disbursement
     *
     * @return \FirstData\FirstApi\Client\Model\Disbursement
     */
    public function getDisbursement()
    {
        return $this->container['disbursement'];
    }

    /**
     * Sets disbursement
     *
     * @param \FirstData\FirstApi\Client\Model\Disbursement $disbursement disbursement
     *
     * @return $this
     */
    public function setDisbursement($disbursement)
    {
        $this->container['disbursement'] = $disbursement;

        return $this;
    }

    /**
     * Gets paymentMethod
     *
     * @return \FirstData\FirstApi\Client\Model\PaymentCardPaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param \FirstData\FirstApi\Client\Model\PaymentCardPaymentMethod $paymentMethod paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets storedCredentials
     *
     * @return \FirstData\FirstApi\Client\Model\StoredCredential|null
     */
    public function getStoredCredentials()
    {
        return $this->container['storedCredentials'];
    }

    /**
     * Sets storedCredentials
     *
     * @param \FirstData\FirstApi\Client\Model\StoredCredential|null $storedCredentials storedCredentials
     *
     * @return $this
     */
    public function setStoredCredentials($storedCredentials)
    {
        $this->container['storedCredentials'] = $storedCredentials;

        return $this;
    }

    /**
     * Gets createToken
     *
     * @return \FirstData\FirstApi\Client\Model\CreatePaymentToken|null
     */
    public function getCreateToken()
    {
        return $this->container['createToken'];
    }

    /**
     * Sets createToken
     *
     * @param \FirstData\FirstApi\Client\Model\CreatePaymentToken|null $createToken createToken
     *
     * @return $this
     */
    public function setCreateToken($createToken)
    {
        $this->container['createToken'] = $createToken;

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


