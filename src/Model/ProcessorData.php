<?php
/**
 * ProcessorData
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
 * OpenAPI spec version: 6.6.0.20190329.001
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
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
 * ProcessorData Class Doc Comment
 *
 * @category Class
 * @description Model for processor data.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProcessorData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProcessorData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'referenceNumber' => 'string',
        'authorizationCode' => 'string',
        'responseCode' => 'string',
        'network' => 'string',
        'associationResponseCode' => 'string',
        'responseMessage' => 'string',
        'avsResponse' => '\FirstData\FirstApi\Client\Model\AVSResponse',
        'securityCodeResponse' => 'string',
        'merchantAdviceCodeIndicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'referenceNumber' => null,
        'authorizationCode' => null,
        'responseCode' => null,
        'network' => null,
        'associationResponseCode' => null,
        'responseMessage' => null,
        'avsResponse' => null,
        'securityCodeResponse' => null,
        'merchantAdviceCodeIndicator' => null
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
        'referenceNumber' => 'referenceNumber',
        'authorizationCode' => 'authorizationCode',
        'responseCode' => 'responseCode',
        'network' => 'network',
        'associationResponseCode' => 'associationResponseCode',
        'responseMessage' => 'responseMessage',
        'avsResponse' => 'avsResponse',
        'securityCodeResponse' => 'securityCodeResponse',
        'merchantAdviceCodeIndicator' => 'merchantAdviceCodeIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'referenceNumber' => 'setReferenceNumber',
        'authorizationCode' => 'setAuthorizationCode',
        'responseCode' => 'setResponseCode',
        'network' => 'setNetwork',
        'associationResponseCode' => 'setAssociationResponseCode',
        'responseMessage' => 'setResponseMessage',
        'avsResponse' => 'setAvsResponse',
        'securityCodeResponse' => 'setSecurityCodeResponse',
        'merchantAdviceCodeIndicator' => 'setMerchantAdviceCodeIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'referenceNumber' => 'getReferenceNumber',
        'authorizationCode' => 'getAuthorizationCode',
        'responseCode' => 'getResponseCode',
        'network' => 'getNetwork',
        'associationResponseCode' => 'getAssociationResponseCode',
        'responseMessage' => 'getResponseMessage',
        'avsResponse' => 'getAvsResponse',
        'securityCodeResponse' => 'getSecurityCodeResponse',
        'merchantAdviceCodeIndicator' => 'getMerchantAdviceCodeIndicator'
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

    const SECURITY_CODE_RESPONSE_MATCHED = 'MATCHED';
    const SECURITY_CODE_RESPONSE_NOT_MATCHED = 'NOT_MATCHED';
    const SECURITY_CODE_RESPONSE_NOT_PROCESSED = 'NOT_PROCESSED';
    const SECURITY_CODE_RESPONSE_NOT_PRESENT = 'NOT_PRESENT';
    const SECURITY_CODE_RESPONSE_NOT_CERTIFIED = 'NOT_CERTIFIED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSecurityCodeResponseAllowableValues()
    {
        return [
            self::SECURITY_CODE_RESPONSE_MATCHED,
            self::SECURITY_CODE_RESPONSE_NOT_MATCHED,
            self::SECURITY_CODE_RESPONSE_NOT_PROCESSED,
            self::SECURITY_CODE_RESPONSE_NOT_PRESENT,
            self::SECURITY_CODE_RESPONSE_NOT_CERTIFIED,
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
        $this->container['referenceNumber'] = isset($data['referenceNumber']) ? $data['referenceNumber'] : null;
        $this->container['authorizationCode'] = isset($data['authorizationCode']) ? $data['authorizationCode'] : null;
        $this->container['responseCode'] = isset($data['responseCode']) ? $data['responseCode'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['associationResponseCode'] = isset($data['associationResponseCode']) ? $data['associationResponseCode'] : null;
        $this->container['responseMessage'] = isset($data['responseMessage']) ? $data['responseMessage'] : null;
        $this->container['avsResponse'] = isset($data['avsResponse']) ? $data['avsResponse'] : null;
        $this->container['securityCodeResponse'] = isset($data['securityCodeResponse']) ? $data['securityCodeResponse'] : null;
        $this->container['merchantAdviceCodeIndicator'] = isset($data['merchantAdviceCodeIndicator']) ? $data['merchantAdviceCodeIndicator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSecurityCodeResponseAllowableValues();
        if (!is_null($this->container['securityCodeResponse']) && !in_array($this->container['securityCodeResponse'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'securityCodeResponse', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['merchantAdviceCodeIndicator']) && !preg_match("/[0-9]{2}/", $this->container['merchantAdviceCodeIndicator'])) {
            $invalidProperties[] = "invalid value for 'merchantAdviceCodeIndicator', must be conform to the pattern /[0-9]{2}/.";
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
     * Gets referenceNumber
     *
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->container['referenceNumber'];
    }

    /**
     * Sets referenceNumber
     *
     * @param string|null $referenceNumber Reference transaction ID.
     *
     * @return $this
     */
    public function setReferenceNumber($referenceNumber)
    {
        $this->container['referenceNumber'] = $referenceNumber;

        return $this;
    }

    /**
     * Gets authorizationCode
     *
     * @return string|null
     */
    public function getAuthorizationCode()
    {
        return $this->container['authorizationCode'];
    }

    /**
     * Sets authorizationCode
     *
     * @param string|null $authorizationCode Code returned to confirm transaction.
     *
     * @return $this
     */
    public function setAuthorizationCode($authorizationCode)
    {
        $this->container['authorizationCode'] = $authorizationCode;

        return $this;
    }

    /**
     * Gets responseCode
     *
     * @return string|null
     */
    public function getResponseCode()
    {
        return $this->container['responseCode'];
    }

    /**
     * Sets responseCode
     *
     * @param string|null $responseCode Response code from endpoints.
     *
     * @return $this
     */
    public function setResponseCode($responseCode)
    {
        $this->container['responseCode'] = $responseCode;

        return $this;
    }

    /**
     * Gets network
     *
     * @return string|null
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     *
     * @param string|null $network Network used for transaction.
     *
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets associationResponseCode
     *
     * @return string|null
     */
    public function getAssociationResponseCode()
    {
        return $this->container['associationResponseCode'];
    }

    /**
     * Sets associationResponseCode
     *
     * @param string|null $associationResponseCode Raw response code from issuer.
     *
     * @return $this
     */
    public function setAssociationResponseCode($associationResponseCode)
    {
        $this->container['associationResponseCode'] = $associationResponseCode;

        return $this;
    }

    /**
     * Gets responseMessage
     *
     * @return string|null
     */
    public function getResponseMessage()
    {
        return $this->container['responseMessage'];
    }

    /**
     * Sets responseMessage
     *
     * @param string|null $responseMessage Message returned from endpoints.
     *
     * @return $this
     */
    public function setResponseMessage($responseMessage)
    {
        $this->container['responseMessage'] = $responseMessage;

        return $this;
    }

    /**
     * Gets avsResponse
     *
     * @return \FirstData\FirstApi\Client\Model\AVSResponse|null
     */
    public function getAvsResponse()
    {
        return $this->container['avsResponse'];
    }

    /**
     * Sets avsResponse
     *
     * @param \FirstData\FirstApi\Client\Model\AVSResponse|null $avsResponse avsResponse
     *
     * @return $this
     */
    public function setAvsResponse($avsResponse)
    {
        $this->container['avsResponse'] = $avsResponse;

        return $this;
    }

    /**
     * Gets securityCodeResponse
     *
     * @return string|null
     */
    public function getSecurityCodeResponse()
    {
        return $this->container['securityCodeResponse'];
    }

    /**
     * Sets securityCodeResponse
     *
     * @param string|null $securityCodeResponse Code returned for CVV.
     *
     * @return $this
     */
    public function setSecurityCodeResponse($securityCodeResponse)
    {
        $allowedValues = $this->getSecurityCodeResponseAllowableValues();
        if (!is_null($securityCodeResponse) && !in_array($securityCodeResponse, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'securityCodeResponse', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['securityCodeResponse'] = $securityCodeResponse;

        return $this;
    }

    /**
     * Gets merchantAdviceCodeIndicator
     *
     * @return string|null
     */
    public function getMerchantAdviceCodeIndicator()
    {
        return $this->container['merchantAdviceCodeIndicator'];
    }

    /**
     * Sets merchantAdviceCodeIndicator
     *
     * @param string|null $merchantAdviceCodeIndicator Code to map merchant advice code to ISO specification.
     *
     * @return $this
     */
    public function setMerchantAdviceCodeIndicator($merchantAdviceCodeIndicator)
    {

        if (!is_null($merchantAdviceCodeIndicator) && (!preg_match("/[0-9]{2}/", $merchantAdviceCodeIndicator))) {
            throw new \InvalidArgumentException("invalid value for $merchantAdviceCodeIndicator when calling ProcessorData., must conform to the pattern /[0-9]{2}/.");
        }

        $this->container['merchantAdviceCodeIndicator'] = $merchantAdviceCodeIndicator;

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


