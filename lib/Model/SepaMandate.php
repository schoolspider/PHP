<?php

namespace FirstData\ApiClient\Model;

use \ArrayAccess;
use \FirstData\ApiClient\ObjectSerializer;


/**
 * Class SepaMandate
 *
 * @category Class
 * @package  FirstData\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SepaMandate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SepaMandate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reference' => 'string',
        'url' => 'string',
        'signatureDate' => \DateTime::class,
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reference' => null,
        'url' => null,
        'signatureDate' => 'date',
        'type' => null
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
        'reference' => 'reference',
        'url' => 'url',
        'signatureDate' => 'signatureDate',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference' => 'setReference',
        'url' => 'setUrl',
        'signatureDate' => 'setSignatureDate',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference' => 'getReference',
        'url' => 'getUrl',
        'signatureDate' => 'getSignatureDate',
        'type' => 'getType'
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

    const TYPE_SINGLE = 'SINGLE';
    const TYPE_FIRST_COLLECTION = 'FIRST_COLLECTION';
    const TYPE_RECURRING_COLLECTION = 'RECURRING_COLLECTION';
    const TYPE_FINAL_COLLECTION = 'FINAL_COLLECTION';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SINGLE,
            self::TYPE_FIRST_COLLECTION,
            self::TYPE_RECURRING_COLLECTION,
            self::TYPE_FINAL_COLLECTION
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
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['signatureDate'] = isset($data['signatureDate']) ? $data['signatureDate'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'SINGLE';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null !== $this->container['reference'] && (mb_strlen($this->container['reference']) > 35)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 35.";
        }

        if (null !== $this->container['reference'] && !preg_match("/[A-Za-z0-9:?\/+(),. -]{1,35}/", $this->container['reference'])) {
            $invalidProperties[] = "invalid value for 'reference', must be conform to the pattern /[A-Za-z0-9:?\/+(),. -]{1,35}/.";
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
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference Existing mandate reference managed by a merchant. Also known as the Mandate ID.
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setReference($reference)
    {
        if (null !== $reference && (mb_strlen($reference) > 35)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling SepaMandate., must be smaller than or equal to 35.');
        }
        if (null !== $reference && (!preg_match("/[A-Za-z0-9:?\/+(),. -]{1,35}/", $reference))) {
            throw new \InvalidArgumentException("invalid value for $reference when calling SepaMandate., must conform to the pattern /[A-Za-z0-9:?\/+(),. -]{1,35}/.");
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url Valid URL pointing to the SEPA mandate (PDF / HTML format recommended)
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets signatureDate
     *
     * @return \DateTime
     */
    public function getSignatureDate()
    {
        return $this->container['signatureDate'];
    }

    /**
     * Sets signatureDate
     *
     * @param \DateTime $signatureDate Date of mandate signature
     *
     * @return $this
     */
    public function setSignatureDate($signatureDate)
    {
        $this->container['signatureDate'] = $signatureDate;

        return $this;
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
     * @param string $type Sequence type of the mandate, defaults to 'SINGLE' if not provided.
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (null !== $type && !\in_array($type, $allowedValues, true)) {
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


