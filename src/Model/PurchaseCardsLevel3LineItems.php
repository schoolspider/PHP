<?php
/**
 * PurchaseCardsLevel3LineItems
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
 * PurchaseCardsLevel3LineItems Class Doc Comment
 *
 * @category Class
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PurchaseCardsLevel3LineItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PurchaseCards_Level3_lineItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'commodityCode' => 'string',
        'productCode' => 'string',
        'description' => 'string',
        'quantity' => 'int',
        'unitMeasure' => 'string',
        'unitPrice' => 'float',
        'vatAmountAndRate' => '\FirstData\FirstApi\Client\Model\AdditionalAmountRate',
        'discountAmountAndRate' => '\FirstData\FirstApi\Client\Model\AdditionalAmountRate',
        'lineItemTotal' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'commodityCode' => null,
        'productCode' => null,
        'description' => null,
        'quantity' => null,
        'unitMeasure' => null,
        'unitPrice' => null,
        'vatAmountAndRate' => null,
        'discountAmountAndRate' => null,
        'lineItemTotal' => null
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
        'commodityCode' => 'commodityCode',
        'productCode' => 'productCode',
        'description' => 'description',
        'quantity' => 'quantity',
        'unitMeasure' => 'unitMeasure',
        'unitPrice' => 'unitPrice',
        'vatAmountAndRate' => 'vatAmountAndRate',
        'discountAmountAndRate' => 'discountAmountAndRate',
        'lineItemTotal' => 'lineItemTotal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'commodityCode' => 'setCommodityCode',
        'productCode' => 'setProductCode',
        'description' => 'setDescription',
        'quantity' => 'setQuantity',
        'unitMeasure' => 'setUnitMeasure',
        'unitPrice' => 'setUnitPrice',
        'vatAmountAndRate' => 'setVatAmountAndRate',
        'discountAmountAndRate' => 'setDiscountAmountAndRate',
        'lineItemTotal' => 'setLineItemTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'commodityCode' => 'getCommodityCode',
        'productCode' => 'getProductCode',
        'description' => 'getDescription',
        'quantity' => 'getQuantity',
        'unitMeasure' => 'getUnitMeasure',
        'unitPrice' => 'getUnitPrice',
        'vatAmountAndRate' => 'getVatAmountAndRate',
        'discountAmountAndRate' => 'getDiscountAmountAndRate',
        'lineItemTotal' => 'getLineItemTotal'
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
        $this->container['commodityCode'] = isset($data['commodityCode']) ? $data['commodityCode'] : null;
        $this->container['productCode'] = isset($data['productCode']) ? $data['productCode'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unitMeasure'] = isset($data['unitMeasure']) ? $data['unitMeasure'] : null;
        $this->container['unitPrice'] = isset($data['unitPrice']) ? $data['unitPrice'] : null;
        $this->container['vatAmountAndRate'] = isset($data['vatAmountAndRate']) ? $data['vatAmountAndRate'] : null;
        $this->container['discountAmountAndRate'] = isset($data['discountAmountAndRate']) ? $data['discountAmountAndRate'] : null;
        $this->container['lineItemTotal'] = isset($data['lineItemTotal']) ? $data['lineItemTotal'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['commodityCode']) && (mb_strlen($this->container['commodityCode']) > 4)) {
            $invalidProperties[] = "invalid value for 'commodityCode', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['productCode']) && (mb_strlen($this->container['productCode']) > 20)) {
            $invalidProperties[] = "invalid value for 'productCode', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 30)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['quantity']) && ($this->container['quantity'] < 1)) {
            $invalidProperties[] = "invalid value for 'quantity', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['unitMeasure']) && (mb_strlen($this->container['unitMeasure']) > 3)) {
            $invalidProperties[] = "invalid value for 'unitMeasure', the character length must be smaller than or equal to 3.";
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
     * Gets commodityCode
     *
     * @return string|null
     */
    public function getCommodityCode()
    {
        return $this->container['commodityCode'];
    }

    /**
     * Sets commodityCode
     *
     * @param string|null $commodityCode The commodity code used to classify the item purchased.
     *
     * @return $this
     */
    public function setCommodityCode($commodityCode)
    {
        if (!is_null($commodityCode) && (mb_strlen($commodityCode) > 4)) {
            throw new \InvalidArgumentException('invalid length for $commodityCode when calling PurchaseCardsLevel3LineItems., must be smaller than or equal to 4.');
        }

        $this->container['commodityCode'] = $commodityCode;

        return $this;
    }

    /**
     * Gets productCode
     *
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    /**
     * Sets productCode
     *
     * @param string|null $productCode Merchant product identifier/the Universal Product Code (UPC) of the item purchased.
     *
     * @return $this
     */
    public function setProductCode($productCode)
    {
        if (!is_null($productCode) && (mb_strlen($productCode) > 20)) {
            throw new \InvalidArgumentException('invalid length for $productCode when calling PurchaseCardsLevel3LineItems., must be smaller than or equal to 20.');
        }

        $this->container['productCode'] = $productCode;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The description.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 30)) {
            throw new \InvalidArgumentException('invalid length for $description when calling PurchaseCardsLevel3LineItems., must be smaller than or equal to 30.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The quantity.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {

        if (!is_null($quantity) && ($quantity < 1)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling PurchaseCardsLevel3LineItems., must be bigger than or equal to 1.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unitMeasure
     *
     * @return string|null
     */
    public function getUnitMeasure()
    {
        return $this->container['unitMeasure'];
    }

    /**
     * Sets unitMeasure
     *
     * @param string|null $unitMeasure The unit of measure.
     *
     * @return $this
     */
    public function setUnitMeasure($unitMeasure)
    {
        if (!is_null($unitMeasure) && (mb_strlen($unitMeasure) > 3)) {
            throw new \InvalidArgumentException('invalid length for $unitMeasure when calling PurchaseCardsLevel3LineItems., must be smaller than or equal to 3.');
        }

        $this->container['unitMeasure'] = $unitMeasure;

        return $this;
    }

    /**
     * Gets unitPrice
     *
     * @return float|null
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     *
     * @param float|null $unitPrice Rate amount in 3 decimal 12 bytes total digit.
     *
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets vatAmountAndRate
     *
     * @return \FirstData\FirstApi\Client\Model\AdditionalAmountRate|null
     */
    public function getVatAmountAndRate()
    {
        return $this->container['vatAmountAndRate'];
    }

    /**
     * Sets vatAmountAndRate
     *
     * @param \FirstData\FirstApi\Client\Model\AdditionalAmountRate|null $vatAmountAndRate vatAmountAndRate
     *
     * @return $this
     */
    public function setVatAmountAndRate($vatAmountAndRate)
    {
        $this->container['vatAmountAndRate'] = $vatAmountAndRate;

        return $this;
    }

    /**
     * Gets discountAmountAndRate
     *
     * @return \FirstData\FirstApi\Client\Model\AdditionalAmountRate|null
     */
    public function getDiscountAmountAndRate()
    {
        return $this->container['discountAmountAndRate'];
    }

    /**
     * Sets discountAmountAndRate
     *
     * @param \FirstData\FirstApi\Client\Model\AdditionalAmountRate|null $discountAmountAndRate discountAmountAndRate
     *
     * @return $this
     */
    public function setDiscountAmountAndRate($discountAmountAndRate)
    {
        $this->container['discountAmountAndRate'] = $discountAmountAndRate;

        return $this;
    }

    /**
     * Gets lineItemTotal
     *
     * @return float|null
     */
    public function getLineItemTotal()
    {
        return $this->container['lineItemTotal'];
    }

    /**
     * Sets lineItemTotal
     *
     * @param float|null $lineItemTotal Rate amount in 3 decimal 12 bytes total digit.
     *
     * @return $this
     */
    public function setLineItemTotal($lineItemTotal)
    {
        $this->container['lineItemTotal'] = $lineItemTotal;

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


