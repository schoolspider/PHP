<?php
/**
 * FraudRegistrationCard
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
 * FraudRegistrationCard Class Doc Comment
 *
 * @category Class
 * @description A JSON object that holds info about the payment registration card.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FraudRegistrationCard implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FraudRegistrationCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cardholderName' => 'string',
        'cardNumber' => 'string',
        'expDate' => 'string',
        'cvvPresent' => 'string',
        'issuer' => 'string',
        'cardReissuedNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'cardholderName' => null,
        'cardNumber' => null,
        'expDate' => null,
        'cvvPresent' => null,
        'issuer' => null,
        'cardReissuedNumber' => null
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
        'cardholderName' => 'cardholderName',
        'cardNumber' => 'cardNumber',
        'expDate' => 'expDate',
        'cvvPresent' => 'cvvPresent',
        'issuer' => 'issuer',
        'cardReissuedNumber' => 'cardReissuedNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cardholderName' => 'setCardholderName',
        'cardNumber' => 'setCardNumber',
        'expDate' => 'setExpDate',
        'cvvPresent' => 'setCvvPresent',
        'issuer' => 'setIssuer',
        'cardReissuedNumber' => 'setCardReissuedNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cardholderName' => 'getCardholderName',
        'cardNumber' => 'getCardNumber',
        'expDate' => 'getExpDate',
        'cvvPresent' => 'getCvvPresent',
        'issuer' => 'getIssuer',
        'cardReissuedNumber' => 'getCardReissuedNumber'
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
        $this->container['cardholderName'] = isset($data['cardholderName']) ? $data['cardholderName'] : null;
        $this->container['cardNumber'] = isset($data['cardNumber']) ? $data['cardNumber'] : null;
        $this->container['expDate'] = isset($data['expDate']) ? $data['expDate'] : null;
        $this->container['cvvPresent'] = isset($data['cvvPresent']) ? $data['cvvPresent'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['cardReissuedNumber'] = isset($data['cardReissuedNumber']) ? $data['cardReissuedNumber'] : null;
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
     * @param string|null $cardholderName The cardholder name as it appears on the card.
     *
     * @return $this
     */
    public function setCardholderName($cardholderName)
    {
        $this->container['cardholderName'] = $cardholderName;

        return $this;
    }

    /**
     * Gets cardNumber
     *
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->container['cardNumber'];
    }

    /**
     * Sets cardNumber
     *
     * @param string|null $cardNumber Use this field to send clear PAN or tokens other than TransArmor Token.
     *
     * @return $this
     */
    public function setCardNumber($cardNumber)
    {
        $this->container['cardNumber'] = $cardNumber;

        return $this;
    }

    /**
     * Gets expDate
     *
     * @return string|null
     */
    public function getExpDate()
    {
        return $this->container['expDate'];
    }

    /**
     * Sets expDate
     *
     * @param string|null $expDate Payment method expiration date. Format is MMYYYY.
     *
     * @return $this
     */
    public function setExpDate($expDate)
    {
        $this->container['expDate'] = $expDate;

        return $this;
    }

    /**
     * Gets cvvPresent
     *
     * @return string|null
     */
    public function getCvvPresent()
    {
        return $this->container['cvvPresent'];
    }

    /**
     * Sets cvvPresent
     *
     * @param string|null $cvvPresent CVV present indicator.
     *
     * @return $this
     */
    public function setCvvPresent($cvvPresent)
    {
        $this->container['cvvPresent'] = $cvvPresent;

        return $this;
    }

    /**
     * Gets issuer
     *
     * @return string|null
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     *
     * @param string|null $issuer The company (usually a bank) that issued the card.
     *
     * @return $this
     */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets cardReissuedNumber
     *
     * @return string|null
     */
    public function getCardReissuedNumber()
    {
        return $this->container['cardReissuedNumber'];
    }

    /**
     * Sets cardReissuedNumber
     *
     * @param string|null $cardReissuedNumber A number that distinguishes between two plastic cards with the same card number in the event of the card being re-issued.
     *
     * @return $this
     */
    public function setCardReissuedNumber($cardReissuedNumber)
    {
        $this->container['cardReissuedNumber'] = $cardReissuedNumber;

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


