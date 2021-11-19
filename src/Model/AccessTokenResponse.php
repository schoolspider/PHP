<?php
/**
 * AccessTokenResponse
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
 * AccessTokenResponse Class Doc Comment
 *
 * @category Class
 * @description Access token generation response.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccessTokenResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccessTokenResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tokenId' => 'string',
        'status' => 'string',
        'issuedOn' => 'string',
        'expiresInSeconds' => 'string',
        'publicKeyBase64' => 'string',
        'algorithm' => 'string',
        'clientRequestId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'tokenId' => null,
        'status' => null,
        'issuedOn' => null,
        'expiresInSeconds' => null,
        'publicKeyBase64' => null,
        'algorithm' => null,
        'clientRequestId' => null
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
        'tokenId' => 'tokenId',
        'status' => 'status',
        'issuedOn' => 'issuedOn',
        'expiresInSeconds' => 'expiresInSeconds',
        'publicKeyBase64' => 'publicKeyBase64',
        'algorithm' => 'algorithm',
        'clientRequestId' => 'clientRequestId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tokenId' => 'setTokenId',
        'status' => 'setStatus',
        'issuedOn' => 'setIssuedOn',
        'expiresInSeconds' => 'setExpiresInSeconds',
        'publicKeyBase64' => 'setPublicKeyBase64',
        'algorithm' => 'setAlgorithm',
        'clientRequestId' => 'setClientRequestId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tokenId' => 'getTokenId',
        'status' => 'getStatus',
        'issuedOn' => 'getIssuedOn',
        'expiresInSeconds' => 'getExpiresInSeconds',
        'publicKeyBase64' => 'getPublicKeyBase64',
        'algorithm' => 'getAlgorithm',
        'clientRequestId' => 'getClientRequestId'
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
        $this->container['tokenId'] = isset($data['tokenId']) ? $data['tokenId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['issuedOn'] = isset($data['issuedOn']) ? $data['issuedOn'] : null;
        $this->container['expiresInSeconds'] = isset($data['expiresInSeconds']) ? $data['expiresInSeconds'] : null;
        $this->container['publicKeyBase64'] = isset($data['publicKeyBase64']) ? $data['publicKeyBase64'] : null;
        $this->container['algorithm'] = isset($data['algorithm']) ? $data['algorithm'] : null;
        $this->container['clientRequestId'] = isset($data['clientRequestId']) ? $data['clientRequestId'] : null;
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
     * Gets tokenId
     *
     * @return string|null
     */
    public function getTokenId()
    {
        return $this->container['tokenId'];
    }

    /**
     * Sets tokenId
     *
     * @param string|null $tokenId Access token for authentication.
     *
     * @return $this
     */
    public function setTokenId($tokenId)
    {
        $this->container['tokenId'] = $tokenId;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The token status.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets issuedOn
     *
     * @return string|null
     */
    public function getIssuedOn()
    {
        return $this->container['issuedOn'];
    }

    /**
     * Sets issuedOn
     *
     * @param string|null $issuedOn Access token issued time in milliseconds.
     *
     * @return $this
     */
    public function setIssuedOn($issuedOn)
    {
        $this->container['issuedOn'] = $issuedOn;

        return $this;
    }

    /**
     * Gets expiresInSeconds
     *
     * @return string|null
     */
    public function getExpiresInSeconds()
    {
        return $this->container['expiresInSeconds'];
    }

    /**
     * Sets expiresInSeconds
     *
     * @param string|null $expiresInSeconds Access token expiration time.
     *
     * @return $this
     */
    public function setExpiresInSeconds($expiresInSeconds)
    {
        $this->container['expiresInSeconds'] = $expiresInSeconds;

        return $this;
    }

    /**
     * Gets publicKeyBase64
     *
     * @return string|null
     */
    public function getPublicKeyBase64()
    {
        return $this->container['publicKeyBase64'];
    }

    /**
     * Sets publicKeyBase64
     *
     * @param string|null $publicKeyBase64 Public key to encrypt data.
     *
     * @return $this
     */
    public function setPublicKeyBase64($publicKeyBase64)
    {
        $this->container['publicKeyBase64'] = $publicKeyBase64;

        return $this;
    }

    /**
     * Gets algorithm
     *
     * @return string|null
     */
    public function getAlgorithm()
    {
        return $this->container['algorithm'];
    }

    /**
     * Sets algorithm
     *
     * @param string|null $algorithm Encyption algorithym. One way ECDH 256 bit key.
     *
     * @return $this
     */
    public function setAlgorithm($algorithm)
    {
        $this->container['algorithm'] = $algorithm;

        return $this;
    }

    /**
     * Gets clientRequestId
     *
     * @return string|null
     */
    public function getClientRequestId()
    {
        return $this->container['clientRequestId'];
    }

    /**
     * Sets clientRequestId
     *
     * @param string|null $clientRequestId Echoes back the value from the request header for tracking.
     *
     * @return $this
     */
    public function setClientRequestId($clientRequestId)
    {
        $this->container['clientRequestId'] = $clientRequestId;

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


