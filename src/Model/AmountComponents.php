<?php
/**
 * AmountComponents
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
 * The version of the OpenAPI document: 21.2.0.20210406.001
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
 * AmountComponents Class Doc Comment
 *
 * @category Class
 * @description Transaction amounts with multiple components.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AmountComponents implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AmountComponents';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'subtotal' => 'float',
        'vatAmount' => 'float',
        'localTax' => 'float',
        'shipping' => 'float',
        'cashback' => 'float',
        'tip' => 'float',
        'surcharge' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'subtotal' => null,
        'vatAmount' => null,
        'localTax' => null,
        'shipping' => null,
        'cashback' => null,
        'tip' => null,
        'surcharge' => null
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
        'subtotal' => 'subtotal',
        'vatAmount' => 'vatAmount',
        'localTax' => 'localTax',
        'shipping' => 'shipping',
        'cashback' => 'cashback',
        'tip' => 'tip',
        'surcharge' => 'surcharge'
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
        'surcharge' => 'setSurcharge'
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
        'surcharge' => 'getSurcharge'
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
        $this->container['subtotal'] = isset($data['subtotal']) ? $data['subtotal'] : null;
        $this->container['vatAmount'] = isset($data['vatAmount']) ? $data['vatAmount'] : null;
        $this->container['localTax'] = isset($data['localTax']) ? $data['localTax'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['cashback'] = isset($data['cashback']) ? $data['cashback'] : null;
        $this->container['tip'] = isset($data['tip']) ? $data['tip'] : null;
        $this->container['surcharge'] = isset($data['surcharge']) ? $data['surcharge'] : null;
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
     * Gets subtotal
     *
     * @return float|null
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param float|null $subtotal Subtotal amount.
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
     * @return float|null
     */
    public function getVatAmount()
    {
        return $this->container['vatAmount'];
    }

    /**
     * Sets vatAmount
     *
     * @param float|null $vatAmount Value-added tax amount.
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
     * @return float|null
     */
    public function getLocalTax()
    {
        return $this->container['localTax'];
    }

    /**
     * Sets localTax
     *
     * @param float|null $localTax Local tax amount.
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
     * @return float|null
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param float|null $shipping Shipping amount.
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
     * @return float|null
     */
    public function getCashback()
    {
        return $this->container['cashback'];
    }

    /**
     * Sets cashback
     *
     * @param float|null $cashback Cashback amount.
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
     * @return float|null
     */
    public function getTip()
    {
        return $this->container['tip'];
    }

    /**
     * Sets tip
     *
     * @param float|null $tip Tip amount.
     *
     * @return $this
     */
    public function setTip($tip)
    {
        $this->container['tip'] = $tip;

        return $this;
    }

    /**
     * Gets surcharge
     *
     * @return float|null
     */
    public function getSurcharge()
    {
        return $this->container['surcharge'];
    }

    /**
     * Sets surcharge
     *
     * @param float|null $surcharge Surcharge amount.
     *
     * @return $this
     */
    public function setSurcharge($surcharge)
    {
        $this->container['surcharge'] = $surcharge;

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


