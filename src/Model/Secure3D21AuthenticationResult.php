<?php
/**
 * Secure3D21AuthenticationResult
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
use \FirstData\FirstApi\Client\ObjectSerializer;

/**
 * Secure3D21AuthenticationResult Class Doc Comment
 *
 * @category Class
 * @description Submit the result of the authentication managed outside of the gateway for a 3-D Secure 2.x scheme. For more convenient usage without implementing 3-D Secure yourself see \&quot;authenticationRequest\&quot; section. DEPRECATED - use Secure3DAuthenticationResult instead
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Secure3D21AuthenticationResult extends AuthenticationResult 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Secure3D21AuthenticationResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cavv' => 'string',
        'xid' => 'string',
        'transactionId' => 'string',
        'authenticationResponse' => 'string',
        'transactionStatus' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'cavv' => null,
        'xid' => null,
        'transactionId' => null,
        'authenticationResponse' => null,
        'transactionStatus' => null
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
        'cavv' => 'cavv',
        'xid' => 'xid',
        'transactionId' => 'transactionId',
        'authenticationResponse' => 'authenticationResponse',
        'transactionStatus' => 'transactionStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cavv' => 'setCavv',
        'xid' => 'setXid',
        'transactionId' => 'setTransactionId',
        'authenticationResponse' => 'setAuthenticationResponse',
        'transactionStatus' => 'setTransactionStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cavv' => 'getCavv',
        'xid' => 'getXid',
        'transactionId' => 'getTransactionId',
        'authenticationResponse' => 'getAuthenticationResponse',
        'transactionStatus' => 'getTransactionStatus'
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

    const AUTHENTICATION_RESPONSE_A = 'A';
    const AUTHENTICATION_RESPONSE_N = 'N';
    const AUTHENTICATION_RESPONSE_U = 'U';
    const AUTHENTICATION_RESPONSE_Y = 'Y';
    const AUTHENTICATION_RESPONSE_C = 'C';
    const AUTHENTICATION_RESPONSE_R = 'R';
    const TRANSACTION_STATUS_A = 'A';
    const TRANSACTION_STATUS_N = 'N';
    const TRANSACTION_STATUS_U = 'U';
    const TRANSACTION_STATUS_Y = 'Y';
    const TRANSACTION_STATUS_C = 'C';
    const TRANSACTION_STATUS_R = 'R';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthenticationResponseAllowableValues()
    {
        return [
            self::AUTHENTICATION_RESPONSE_A,
            self::AUTHENTICATION_RESPONSE_N,
            self::AUTHENTICATION_RESPONSE_U,
            self::AUTHENTICATION_RESPONSE_Y,
            self::AUTHENTICATION_RESPONSE_C,
            self::AUTHENTICATION_RESPONSE_R,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionStatusAllowableValues()
    {
        return [
            self::TRANSACTION_STATUS_A,
            self::TRANSACTION_STATUS_N,
            self::TRANSACTION_STATUS_U,
            self::TRANSACTION_STATUS_Y,
            self::TRANSACTION_STATUS_C,
            self::TRANSACTION_STATUS_R,
        ];
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

        $this->container['cavv'] = isset($data['cavv']) ? $data['cavv'] : null;
        $this->container['xid'] = isset($data['xid']) ? $data['xid'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['authenticationResponse'] = isset($data['authenticationResponse']) ? $data['authenticationResponse'] : 'Y';
        $this->container['transactionStatus'] = isset($data['transactionStatus']) ? $data['transactionStatus'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if (!is_null($this->container['cavv']) && (mb_strlen($this->container['cavv']) > 32)) {
            $invalidProperties[] = "invalid value for 'cavv', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['cavv']) && (mb_strlen($this->container['cavv']) < 20)) {
            $invalidProperties[] = "invalid value for 'cavv', the character length must be bigger than or equal to 20.";
        }

        if (!is_null($this->container['xid']) && (mb_strlen($this->container['xid']) > 32)) {
            $invalidProperties[] = "invalid value for 'xid', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['xid']) && (mb_strlen($this->container['xid']) < 20)) {
            $invalidProperties[] = "invalid value for 'xid', the character length must be bigger than or equal to 20.";
        }

        $allowedValues = $this->getAuthenticationResponseAllowableValues();
        if (!is_null($this->container['authenticationResponse']) && !in_array($this->container['authenticationResponse'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'authenticationResponse', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTransactionStatusAllowableValues();
        if (!is_null($this->container['transactionStatus']) && !in_array($this->container['transactionStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transactionStatus', must be one of '%s'",
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets cavv
     *
     * @return string|null
     */
    public function getCavv()
    {
        return $this->container['cavv'];
    }

    /**
     * Sets cavv
     *
     * @param string|null $cavv The Cardholder Authentication Verification Value (CAVV) is a cryptographic value derived by the issuer during payment authentication that can provide evidence of the results of payment authentication during an online purchase.
     *
     * @return $this
     */
    public function setCavv($cavv)
    {
        if (!is_null($cavv) && (mb_strlen($cavv) > 32)) {
            throw new \InvalidArgumentException('invalid length for $cavv when calling Secure3D21AuthenticationResult., must be smaller than or equal to 32.');
        }
        if (!is_null($cavv) && (mb_strlen($cavv) < 20)) {
            throw new \InvalidArgumentException('invalid length for $cavv when calling Secure3D21AuthenticationResult., must be bigger than or equal to 20.');
        }

        $this->container['cavv'] = $cavv;

        return $this;
    }

    /**
     * Gets xid
     *
     * @return string|null
     */
    public function getXid()
    {
        return $this->container['xid'];
    }

    /**
     * Sets xid
     *
     * @param string|null $xid The transaction identifier (XID) is a unique tracking number set by the merchant.
     *
     * @return $this
     */
    public function setXid($xid)
    {
        if (!is_null($xid) && (mb_strlen($xid) > 32)) {
            throw new \InvalidArgumentException('invalid length for $xid when calling Secure3D21AuthenticationResult., must be smaller than or equal to 32.');
        }
        if (!is_null($xid) && (mb_strlen($xid) < 20)) {
            throw new \InvalidArgumentException('invalid length for $xid when calling Secure3D21AuthenticationResult., must be bigger than or equal to 20.');
        }

        $this->container['xid'] = $xid;

        return $this;
    }

    /**
     * Gets transactionId
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     *
     * @param string|null $transactionId The response transaction UUID. Only applicable to MasterCard.
     *
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets authenticationResponse
     *
     * @return string|null
     */
    public function getAuthenticationResponse()
    {
        return $this->container['authenticationResponse'];
    }

    /**
     * Sets authenticationResponse
     *
     * @param string|null $authenticationResponse The result of authentication attempt returned by the 3D Secure authentication process (PaRes).
     *
     * @return $this
     */
    public function setAuthenticationResponse($authenticationResponse)
    {
        $allowedValues = $this->getAuthenticationResponseAllowableValues();
        if (!is_null($authenticationResponse) && !in_array($authenticationResponse, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'authenticationResponse', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['authenticationResponse'] = $authenticationResponse;

        return $this;
    }

    /**
     * Gets transactionStatus
     *
     * @return string|null
     */
    public function getTransactionStatus()
    {
        return $this->container['transactionStatus'];
    }

    /**
     * Sets transactionStatus
     *
     * @param string|null $transactionStatus The transaction status as returned by the 3D Secure authentication process.
     *
     * @return $this
     */
    public function setTransactionStatus($transactionStatus)
    {
        $allowedValues = $this->getTransactionStatusAllowableValues();
        if (!is_null($transactionStatus) && !in_array($transactionStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transactionStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transactionStatus'] = $transactionStatus;

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


