<?php

namespace FirstData\ApiClient\Model;

use \ArrayAccess;
use \FirstData\ApiClient\ObjectSerializer;


/**
 * Class AmountComponents
 *
 * @category Class
 * @package  FirstData\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AmountComponents implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AmountComponents';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'subtotal' => 'float',
        'vatAmount' => 'float',
        'localTax' => 'float',
        'shipping' => 'float',
        'cashback' => 'float',
        'tip' => 'float',
        'convenienceFee' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'subtotal' => null,
        'vatAmount' => null,
        'localTax' => null,
        'shipping' => null,
        'cashback' => null,
        'tip' => null,
        'convenienceFee' => null
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
        'subtotal' => 'subtotal',
        'vatAmount' => 'vatAmount',
        'localTax' => 'localTax',
        'shipping' => 'shipping',
        'cashback' => 'cashback',
        'tip' => 'tip',
        'convenienceFee' => 'convenienceFee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subtotal' => 'setSubtotal',
        'vatAmount' => 'setVatAmount',
        'localTax' => 'setLocalTax',
        'shipping' => 'setShipping',
        'cashback' => 'setCashback',
        'tip' => 'setTip',
        'convenienceFee' => 'setConvenienceFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subtotal' => 'getSubtotal',
        'vatAmount' => 'getVatAmount',
        'localTax' => 'getLocalTax',
        'shipping' => 'getShipping',
        'cashback' => 'getCashback',
        'tip' => 'getTip',
        'convenienceFee' => 'getConvenienceFee'
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
        $this->container['subtotal'] = isset($data['subtotal']) ? $data['subtotal'] : null;
        $this->container['vatAmount'] = isset($data['vatAmount']) ? $data['vatAmount'] : null;
        $this->container['localTax'] = isset($data['localTax']) ? $data['localTax'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['cashback'] = isset($data['cashback']) ? $data['cashback'] : null;
        $this->container['tip'] = isset($data['tip']) ? $data['tip'] : null;
        $this->container['convenienceFee'] = isset($data['convenienceFee']) ? $data['convenienceFee'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        return [];
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
     * Gets subtotal
     *
     * @return float
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param float $subtotal subtotal
     *
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets vatAmount
     *
     * @return float
     */
    public function getVatAmount()
    {
        return $this->container['vatAmount'];
    }

    /**
     * Sets vatAmount
     *
     * @param float $vatAmount vatAmount
     *
     * @return $this
     */
    public function setVatAmount($vatAmount)
    {
        $this->container['vatAmount'] = $vatAmount;

        return $this;
    }

    /**
     * Gets localTax
     *
     * @return float
     */
    public function getLocalTax()
    {
        return $this->container['localTax'];
    }

    /**
     * Sets localTax
     *
     * @param float $localTax localTax
     *
     * @return $this
     */
    public function setLocalTax($localTax)
    {
        $this->container['localTax'] = $localTax;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return float
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param float $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets cashback
     *
     * @return float
     */
    public function getCashback()
    {
        return $this->container['cashback'];
    }

    /**
     * Sets cashback
     *
     * @param float $cashback cashback
     *
     * @return $this
     */
    public function setCashback($cashback)
    {
        $this->container['cashback'] = $cashback;

        return $this;
    }

    /**
     * Gets tip
     *
     * @return float
     */
    public function getTip()
    {
        return $this->container['tip'];
    }

    /**
     * Sets tip
     *
     * @param float $tip tip
     *
     * @return $this
     */
    public function setTip($tip)
    {
        $this->container['tip'] = $tip;

        return $this;
    }

    /**
     * Gets convenienceFee
     *
     * @return float
     */
    public function getConvenienceFee()
    {
        return $this->container['convenienceFee'];
    }

    /**
     * Sets convenienceFee
     *
     * @param float $convenienceFee convenienceFee
     *
     * @return $this
     */
    public function setConvenienceFee($convenienceFee)
    {
        $this->container['convenienceFee'] = $convenienceFee;

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


