<?php

namespace FirstData\ApiClient\Model;

use \ArrayAccess;
use \FirstData\ApiClient\ObjectSerializer;


/**
 * Class LodgingExtraCharges
 *
 * @category Class
 * @package  FirstData\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LodgingExtraCharges implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Lodging_extraCharges';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chargeItem' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chargeItem' => null
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
        'chargeItem' => 'chargeItem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chargeItem' => 'setChargeItem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chargeItem' => 'getChargeItem'
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

    const CHARGE_ITEM_GIFT_SHOP = 'GIFT_SHOP';
    const CHARGE_ITEM_LAUNDRY = 'LAUNDRY';
    const CHARGE_ITEM_MINI_BAR = 'MINI_BAR';
    const CHARGE_ITEM_RESTAURANT = 'RESTAURANT';
    const CHARGE_ITEM_TELEPHONE = 'TELEPHONE';
    const CHARGE_ITEM_OTHER = 'OTHER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChargeItemAllowableValues()
    {
        return [
            self::CHARGE_ITEM_GIFT_SHOP,
            self::CHARGE_ITEM_LAUNDRY,
            self::CHARGE_ITEM_MINI_BAR,
            self::CHARGE_ITEM_RESTAURANT,
            self::CHARGE_ITEM_TELEPHONE,
            self::CHARGE_ITEM_OTHER
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
        $this->container['chargeItem'] = $data['chargeItem'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getChargeItemAllowableValues();
        if (null !== $this->container['chargeItem'] && !\in_array($this->container['chargeItem'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'chargeItem', must be one of '%s'",
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
     * Gets chargeItem
     *
     * @return string
     */
    public function getChargeItem()
    {
        return $this->container['chargeItem'];
    }

    /**
     * Sets chargeItem
     *
     * @param string $chargeItem chargeItem
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setChargeItem($chargeItem)
    {
        $allowedValues = $this->getChargeItemAllowableValues();
        if (null !== $chargeItem && !\in_array($chargeItem, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'chargeItem', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['chargeItem'] = $chargeItem;

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

