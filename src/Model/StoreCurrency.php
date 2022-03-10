<?php
/**
 * StoreCurrency
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
 * StoreCurrency Class Doc Comment
 *
 * @category Class
 * @description Currency details associated with a store.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StoreCurrency implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StoreCurrency';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'literalCurrencyCode' => 'string',
        'numericCurrencyCode' => 'string',
        'decimalPlaces' => 'int',
        'defaultCurrency' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'literalCurrencyCode' => null,
        'numericCurrencyCode' => null,
        'decimalPlaces' => 'int32',
        'defaultCurrency' => null
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
        'literalCurrencyCode' => 'literalCurrencyCode',
        'numericCurrencyCode' => 'numericCurrencyCode',
        'decimalPlaces' => 'decimalPlaces',
        'defaultCurrency' => 'defaultCurrency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'literalCurrencyCode' => 'setLiteralCurrencyCode',
        'numericCurrencyCode' => 'setNumericCurrencyCode',
        'decimalPlaces' => 'setDecimalPlaces',
        'defaultCurrency' => 'setDefaultCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'literalCurrencyCode' => 'getLiteralCurrencyCode',
        'numericCurrencyCode' => 'getNumericCurrencyCode',
        'decimalPlaces' => 'getDecimalPlaces',
        'defaultCurrency' => 'getDefaultCurrency'
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
        $this->container['literalCurrencyCode'] = isset($data['literalCurrencyCode']) ? $data['literalCurrencyCode'] : null;
        $this->container['numericCurrencyCode'] = isset($data['numericCurrencyCode']) ? $data['numericCurrencyCode'] : null;
        $this->container['decimalPlaces'] = isset($data['decimalPlaces']) ? $data['decimalPlaces'] : null;
        $this->container['defaultCurrency'] = isset($data['defaultCurrency']) ? $data['defaultCurrency'] : null;
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
     * Gets literalCurrencyCode
     *
     * @return string|null
     */
    public function getLiteralCurrencyCode()
    {
        return $this->container['literalCurrencyCode'];
    }

    /**
     * Sets literalCurrencyCode
     *
     * @param string|null $literalCurrencyCode This field contains the ISO alpha currency code.
     *
     * @return $this
     */
    public function setLiteralCurrencyCode($literalCurrencyCode)
    {
        $this->container['literalCurrencyCode'] = $literalCurrencyCode;

        return $this;
    }

    /**
     * Gets numericCurrencyCode
     *
     * @return string|null
     */
    public function getNumericCurrencyCode()
    {
        return $this->container['numericCurrencyCode'];
    }

    /**
     * Sets numericCurrencyCode
     *
     * @param string|null $numericCurrencyCode This field contains the ISO numeric currecy code.
     *
     * @return $this
     */
    public function setNumericCurrencyCode($numericCurrencyCode)
    {
        $this->container['numericCurrencyCode'] = $numericCurrencyCode;

        return $this;
    }

    /**
     * Gets decimalPlaces
     *
     * @return int|null
     */
    public function getDecimalPlaces()
    {
        return $this->container['decimalPlaces'];
    }

    /**
     * Sets decimalPlaces
     *
     * @param int|null $decimalPlaces This field indicates the number of decimal places required for this currency.
     *
     * @return $this
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->container['decimalPlaces'] = $decimalPlaces;

        return $this;
    }

    /**
     * Gets defaultCurrency
     *
     * @return bool|null
     */
    public function getDefaultCurrency()
    {
        return $this->container['defaultCurrency'];
    }

    /**
     * Sets defaultCurrency
     *
     * @param bool|null $defaultCurrency This field indicates if this currency is the default currency for queried store.
     *
     * @return $this
     */
    public function setDefaultCurrency($defaultCurrency)
    {
        $this->container['defaultCurrency'] = $defaultCurrency;

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

