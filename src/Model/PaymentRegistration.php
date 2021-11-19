<?php
/**
 * PaymentRegistration
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
 * PaymentRegistration Class Doc Comment
 *
 * @category Class
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentRegistration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentRegistration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchantRef' => 'string',
        'transactionType' => 'string',
        'customer' => '\FirstData\FirstApi\Client\Model\Customer',
        'merchant' => '\FirstData\FirstApi\Client\Model\Merchant',
        'device' => '\FirstData\FirstApi\Client\Model\FraudRegistrationDevice',
        'userDefined' => 'object',
        'originalTransactionType' => 'string',
        'issuerResponse' => '\FirstData\FirstApi\Client\Model\IssuerResponse',
        'verificationAvs' => '\FirstData\FirstApi\Client\Model\VerificationAvs',
        'verification3ds' => '\FirstData\FirstApi\Client\Model\Verification3ds',
        'verificationCvv' => '\FirstData\FirstApi\Client\Model\VerificationCvv',
        'registrationMethod' => '\FirstData\FirstApi\Client\Model\RegistrationMethod'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'merchantRef' => null,
        'transactionType' => null,
        'customer' => null,
        'merchant' => null,
        'device' => null,
        'userDefined' => null,
        'originalTransactionType' => null,
        'issuerResponse' => null,
        'verificationAvs' => null,
        'verification3ds' => null,
        'verificationCvv' => null,
        'registrationMethod' => null
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
        'merchantRef' => 'merchantRef',
        'transactionType' => 'transactionType',
        'customer' => 'customer',
        'merchant' => 'merchant',
        'device' => 'device',
        'userDefined' => 'userDefined',
        'originalTransactionType' => 'originalTransactionType',
        'issuerResponse' => 'issuerResponse',
        'verificationAvs' => 'verificationAvs',
        'verification3ds' => 'verification3ds',
        'verificationCvv' => 'verificationCvv',
        'registrationMethod' => 'registrationMethod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchantRef' => 'setMerchantRef',
        'transactionType' => 'setTransactionType',
        'customer' => 'setCustomer',
        'merchant' => 'setMerchant',
        'device' => 'setDevice',
        'userDefined' => 'setUserDefined',
        'originalTransactionType' => 'setOriginalTransactionType',
        'issuerResponse' => 'setIssuerResponse',
        'verificationAvs' => 'setVerificationAvs',
        'verification3ds' => 'setVerification3ds',
        'verificationCvv' => 'setVerificationCvv',
        'registrationMethod' => 'setRegistrationMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchantRef' => 'getMerchantRef',
        'transactionType' => 'getTransactionType',
        'customer' => 'getCustomer',
        'merchant' => 'getMerchant',
        'device' => 'getDevice',
        'userDefined' => 'getUserDefined',
        'originalTransactionType' => 'getOriginalTransactionType',
        'issuerResponse' => 'getIssuerResponse',
        'verificationAvs' => 'getVerificationAvs',
        'verification3ds' => 'getVerification3ds',
        'verificationCvv' => 'getVerificationCvv',
        'registrationMethod' => 'getRegistrationMethod'
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
        $this->container['merchantRef'] = isset($data['merchantRef']) ? $data['merchantRef'] : null;
        $this->container['transactionType'] = isset($data['transactionType']) ? $data['transactionType'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['device'] = isset($data['device']) ? $data['device'] : null;
        $this->container['userDefined'] = isset($data['userDefined']) ? $data['userDefined'] : null;
        $this->container['originalTransactionType'] = isset($data['originalTransactionType']) ? $data['originalTransactionType'] : null;
        $this->container['issuerResponse'] = isset($data['issuerResponse']) ? $data['issuerResponse'] : null;
        $this->container['verificationAvs'] = isset($data['verificationAvs']) ? $data['verificationAvs'] : null;
        $this->container['verification3ds'] = isset($data['verification3ds']) ? $data['verification3ds'] : null;
        $this->container['verificationCvv'] = isset($data['verificationCvv']) ? $data['verificationCvv'] : null;
        $this->container['registrationMethod'] = isset($data['registrationMethod']) ? $data['registrationMethod'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['transactionType'] === null) {
            $invalidProperties[] = "'transactionType' can't be null";
        }
        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
        if ($this->container['merchant'] === null) {
            $invalidProperties[] = "'merchant' can't be null";
        }
        if ($this->container['originalTransactionType'] === null) {
            $invalidProperties[] = "'originalTransactionType' can't be null";
        }
        if ($this->container['registrationMethod'] === null) {
            $invalidProperties[] = "'registrationMethod' can't be null";
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
     * Gets merchantRef
     *
     * @return string|null
     */
    public function getMerchantRef()
    {
        return $this->container['merchantRef'];
    }

    /**
     * Sets merchantRef
     *
     * @param string|null $merchantRef Merchant reference code. Used by FirstAPI and reflected in settlement records and webhook notifications. Typically, the merchantRef field is the purchase order number or unique sequence value associated to a given transaction.
     *
     * @return $this
     */
    public function setMerchantRef($merchantRef)
    {
        $this->container['merchantRef'] = $merchantRef;

        return $this;
    }

    /**
     * Gets transactionType
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transactionType'];
    }

    /**
     * Sets transactionType
     *
     * @param string $transactionType Type of transaction merchant wants to process.
     *
     * @return $this
     */
    public function setTransactionType($transactionType)
    {
        $this->container['transactionType'] = $transactionType;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \FirstData\FirstApi\Client\Model\Customer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \FirstData\FirstApi\Client\Model\Customer $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets merchant
     *
     * @return \FirstData\FirstApi\Client\Model\Merchant
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     *
     * @param \FirstData\FirstApi\Client\Model\Merchant $merchant merchant
     *
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets device
     *
     * @return \FirstData\FirstApi\Client\Model\FraudRegistrationDevice|null
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param \FirstData\FirstApi\Client\Model\FraudRegistrationDevice|null $device device
     *
     * @return $this
     */
    public function setDevice($device)
    {
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets userDefined
     *
     * @return object|null
     */
    public function getUserDefined()
    {
        return $this->container['userDefined'];
    }

    /**
     * Sets userDefined
     *
     * @param object|null $userDefined A JSON object that can carry any additional information that might be helpful for fraud detection.
     *
     * @return $this
     */
    public function setUserDefined($userDefined)
    {
        $this->container['userDefined'] = $userDefined;

        return $this;
    }

    /**
     * Gets originalTransactionType
     *
     * @return string
     */
    public function getOriginalTransactionType()
    {
        return $this->container['originalTransactionType'];
    }

    /**
     * Sets originalTransactionType
     *
     * @param string $originalTransactionType Defines the type of the original transaction that is being evaluated for the Fraud Score.
     *
     * @return $this
     */
    public function setOriginalTransactionType($originalTransactionType)
    {
        $this->container['originalTransactionType'] = $originalTransactionType;

        return $this;
    }

    /**
     * Gets issuerResponse
     *
     * @return \FirstData\FirstApi\Client\Model\IssuerResponse|null
     */
    public function getIssuerResponse()
    {
        return $this->container['issuerResponse'];
    }

    /**
     * Sets issuerResponse
     *
     * @param \FirstData\FirstApi\Client\Model\IssuerResponse|null $issuerResponse issuerResponse
     *
     * @return $this
     */
    public function setIssuerResponse($issuerResponse)
    {
        $this->container['issuerResponse'] = $issuerResponse;

        return $this;
    }

    /**
     * Gets verificationAvs
     *
     * @return \FirstData\FirstApi\Client\Model\VerificationAvs|null
     */
    public function getVerificationAvs()
    {
        return $this->container['verificationAvs'];
    }

    /**
     * Sets verificationAvs
     *
     * @param \FirstData\FirstApi\Client\Model\VerificationAvs|null $verificationAvs verificationAvs
     *
     * @return $this
     */
    public function setVerificationAvs($verificationAvs)
    {
        $this->container['verificationAvs'] = $verificationAvs;

        return $this;
    }

    /**
     * Gets verification3ds
     *
     * @return \FirstData\FirstApi\Client\Model\Verification3ds|null
     */
    public function getVerification3ds()
    {
        return $this->container['verification3ds'];
    }

    /**
     * Sets verification3ds
     *
     * @param \FirstData\FirstApi\Client\Model\Verification3ds|null $verification3ds verification3ds
     *
     * @return $this
     */
    public function setVerification3ds($verification3ds)
    {
        $this->container['verification3ds'] = $verification3ds;

        return $this;
    }

    /**
     * Gets verificationCvv
     *
     * @return \FirstData\FirstApi\Client\Model\VerificationCvv|null
     */
    public function getVerificationCvv()
    {
        return $this->container['verificationCvv'];
    }

    /**
     * Sets verificationCvv
     *
     * @param \FirstData\FirstApi\Client\Model\VerificationCvv|null $verificationCvv verificationCvv
     *
     * @return $this
     */
    public function setVerificationCvv($verificationCvv)
    {
        $this->container['verificationCvv'] = $verificationCvv;

        return $this;
    }

    /**
     * Gets registrationMethod
     *
     * @return \FirstData\FirstApi\Client\Model\RegistrationMethod
     */
    public function getRegistrationMethod()
    {
        return $this->container['registrationMethod'];
    }

    /**
     * Sets registrationMethod
     *
     * @param \FirstData\FirstApi\Client\Model\RegistrationMethod $registrationMethod registrationMethod
     *
     * @return $this
     */
    public function setRegistrationMethod($registrationMethod)
    {
        $this->container['registrationMethod'] = $registrationMethod;

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


