<?php
/**
 * TransactionErrorResponse
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
 * The version of the OpenAPI document: 6.13.0.20200810.001
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
 * TransactionErrorResponse Class Doc Comment
 *
 * @category Class
 * @description Transaction response with error field included.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransactionErrorResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionErrorResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'clientRequestId' => 'string',
        'apiTraceId' => 'string',
        'responseType' => '\FirstData\FirstApi\Client\Model\ResponseType',
        'ipgTransactionId' => 'string',
        'orderId' => 'string',
        'transactionType' => '\FirstData\FirstApi\Client\Model\TransactionType',
        'paymentToken' => '\FirstData\FirstApi\Client\Model\PaymentTokenDetails',
        'transactionOrigin' => '\FirstData\FirstApi\Client\Model\TransactionOrigin',
        'paymentMethodDetails' => '\FirstData\FirstApi\Client\Model\PaymentMethodDetails',
        'country' => 'string',
        'terminalId' => 'string',
        'merchantId' => 'string',
        'merchantTransactionId' => 'string',
        'transactionTime' => 'int',
        'approvedAmount' => '\FirstData\FirstApi\Client\Model\Amount',
        'transactionStatus' => 'string',
        'transactionState' => 'string',
        'secure3dResponse' => '\FirstData\FirstApi\Client\Model\Secure3dResponse',
        'redirectURL' => 'string',
        'authenticationResponse' => '\FirstData\FirstApi\Client\Model\Secure3DAuthenticationResponse',
        'schemeTransactionId' => 'string',
        'processor' => '\FirstData\FirstApi\Client\Model\ProcessorData',
        'additionalDetails' => '\FirstData\FirstApi\Client\Model\AdditionalTransactionDetails',
        'accountUpdaterResponse' => '\FirstData\FirstApi\Client\Model\AccountUpdaterResponse',
        'achResponse' => '\FirstData\FirstApi\Client\Model\AchResponse',
        'currencyConversionResponse' => '\FirstData\FirstApi\Client\Model\CurrencyConversionResponse',
        'error' => '\FirstData\FirstApi\Client\Model\Error'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'clientRequestId' => null,
        'apiTraceId' => null,
        'responseType' => null,
        'ipgTransactionId' => null,
        'orderId' => null,
        'transactionType' => null,
        'paymentToken' => null,
        'transactionOrigin' => null,
        'paymentMethodDetails' => null,
        'country' => null,
        'terminalId' => null,
        'merchantId' => null,
        'merchantTransactionId' => null,
        'transactionTime' => 'int64',
        'approvedAmount' => null,
        'transactionStatus' => null,
        'transactionState' => null,
        'secure3dResponse' => null,
        'redirectURL' => null,
        'authenticationResponse' => null,
        'schemeTransactionId' => null,
        'processor' => null,
        'additionalDetails' => null,
        'accountUpdaterResponse' => null,
        'achResponse' => null,
        'currencyConversionResponse' => null,
        'error' => null
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
        'clientRequestId' => 'clientRequestId',
        'apiTraceId' => 'apiTraceId',
        'responseType' => 'responseType',
        'ipgTransactionId' => 'ipgTransactionId',
        'orderId' => 'orderId',
        'transactionType' => 'transactionType',
        'paymentToken' => 'paymentToken',
        'transactionOrigin' => 'transactionOrigin',
        'paymentMethodDetails' => 'paymentMethodDetails',
        'country' => 'country',
        'terminalId' => 'terminalId',
        'merchantId' => 'merchantId',
        'merchantTransactionId' => 'merchantTransactionId',
        'transactionTime' => 'transactionTime',
        'approvedAmount' => 'approvedAmount',
        'transactionStatus' => 'transactionStatus',
        'transactionState' => 'transactionState',
        'secure3dResponse' => 'secure3dResponse',
        'redirectURL' => 'redirectURL',
        'authenticationResponse' => 'authenticationResponse',
        'schemeTransactionId' => 'schemeTransactionId',
        'processor' => 'processor',
        'additionalDetails' => 'additionalDetails',
        'accountUpdaterResponse' => 'accountUpdaterResponse',
        'achResponse' => 'achResponse',
        'currencyConversionResponse' => 'currencyConversionResponse',
        'error' => 'error'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clientRequestId' => 'setClientRequestId',
        'apiTraceId' => 'setApiTraceId',
        'responseType' => 'setResponseType',
        'ipgTransactionId' => 'setIpgTransactionId',
        'orderId' => 'setOrderId',
        'transactionType' => 'setTransactionType',
        'paymentToken' => 'setPaymentToken',
        'transactionOrigin' => 'setTransactionOrigin',
        'paymentMethodDetails' => 'setPaymentMethodDetails',
        'country' => 'setCountry',
        'terminalId' => 'setTerminalId',
        'merchantId' => 'setMerchantId',
        'merchantTransactionId' => 'setMerchantTransactionId',
        'transactionTime' => 'setTransactionTime',
        'approvedAmount' => 'setApprovedAmount',
        'transactionStatus' => 'setTransactionStatus',
        'transactionState' => 'setTransactionState',
        'secure3dResponse' => 'setSecure3dResponse',
        'redirectURL' => 'setRedirectURL',
        'authenticationResponse' => 'setAuthenticationResponse',
        'schemeTransactionId' => 'setSchemeTransactionId',
        'processor' => 'setProcessor',
        'additionalDetails' => 'setAdditionalDetails',
        'accountUpdaterResponse' => 'setAccountUpdaterResponse',
        'achResponse' => 'setAchResponse',
        'currencyConversionResponse' => 'setCurrencyConversionResponse',
        'error' => 'setError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clientRequestId' => 'getClientRequestId',
        'apiTraceId' => 'getApiTraceId',
        'responseType' => 'getResponseType',
        'ipgTransactionId' => 'getIpgTransactionId',
        'orderId' => 'getOrderId',
        'transactionType' => 'getTransactionType',
        'paymentToken' => 'getPaymentToken',
        'transactionOrigin' => 'getTransactionOrigin',
        'paymentMethodDetails' => 'getPaymentMethodDetails',
        'country' => 'getCountry',
        'terminalId' => 'getTerminalId',
        'merchantId' => 'getMerchantId',
        'merchantTransactionId' => 'getMerchantTransactionId',
        'transactionTime' => 'getTransactionTime',
        'approvedAmount' => 'getApprovedAmount',
        'transactionStatus' => 'getTransactionStatus',
        'transactionState' => 'getTransactionState',
        'secure3dResponse' => 'getSecure3dResponse',
        'redirectURL' => 'getRedirectURL',
        'authenticationResponse' => 'getAuthenticationResponse',
        'schemeTransactionId' => 'getSchemeTransactionId',
        'processor' => 'getProcessor',
        'additionalDetails' => 'getAdditionalDetails',
        'accountUpdaterResponse' => 'getAccountUpdaterResponse',
        'achResponse' => 'getAchResponse',
        'currencyConversionResponse' => 'getCurrencyConversionResponse',
        'error' => 'getError'
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

    const TRANSACTION_STATUS_APPROVED = 'APPROVED';
    const TRANSACTION_STATUS_WAITING = 'WAITING';
    const TRANSACTION_STATUS_VALIDATION_FAILED = 'VALIDATION_FAILED';
    const TRANSACTION_STATUS_PROCESSING_FAILED = 'PROCESSING_FAILED';
    const TRANSACTION_STATUS_DECLINED = 'DECLINED';
    const TRANSACTION_STATE_AUTHORIZED = 'AUTHORIZED';
    const TRANSACTION_STATE_CAPTURED = 'CAPTURED';
    const TRANSACTION_STATE_DECLINED = 'DECLINED';
    const TRANSACTION_STATE_CHECKED = 'CHECKED';
    const TRANSACTION_STATE_COMPLETED_GET = 'COMPLETED_GET';
    const TRANSACTION_STATE_INITIALIZED = 'INITIALIZED';
    const TRANSACTION_STATE_PENDING = 'PENDING';
    const TRANSACTION_STATE_READY = 'READY';
    const TRANSACTION_STATE_TEMPLATE = 'TEMPLATE';
    const TRANSACTION_STATE_SETTLED = 'SETTLED';
    const TRANSACTION_STATE_VOIDED = 'VOIDED';
    const TRANSACTION_STATE_WAITING = 'WAITING';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionStatusAllowableValues()
    {
        return [
            self::TRANSACTION_STATUS_APPROVED,
            self::TRANSACTION_STATUS_WAITING,
            self::TRANSACTION_STATUS_VALIDATION_FAILED,
            self::TRANSACTION_STATUS_PROCESSING_FAILED,
            self::TRANSACTION_STATUS_DECLINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionStateAllowableValues()
    {
        return [
            self::TRANSACTION_STATE_AUTHORIZED,
            self::TRANSACTION_STATE_CAPTURED,
            self::TRANSACTION_STATE_DECLINED,
            self::TRANSACTION_STATE_CHECKED,
            self::TRANSACTION_STATE_COMPLETED_GET,
            self::TRANSACTION_STATE_INITIALIZED,
            self::TRANSACTION_STATE_PENDING,
            self::TRANSACTION_STATE_READY,
            self::TRANSACTION_STATE_TEMPLATE,
            self::TRANSACTION_STATE_SETTLED,
            self::TRANSACTION_STATE_VOIDED,
            self::TRANSACTION_STATE_WAITING,
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
        $this->container['clientRequestId'] = isset($data['clientRequestId']) ? $data['clientRequestId'] : null;
        $this->container['apiTraceId'] = isset($data['apiTraceId']) ? $data['apiTraceId'] : null;
        $this->container['responseType'] = isset($data['responseType']) ? $data['responseType'] : null;
        $this->container['ipgTransactionId'] = isset($data['ipgTransactionId']) ? $data['ipgTransactionId'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['transactionType'] = isset($data['transactionType']) ? $data['transactionType'] : null;
        $this->container['paymentToken'] = isset($data['paymentToken']) ? $data['paymentToken'] : null;
        $this->container['transactionOrigin'] = isset($data['transactionOrigin']) ? $data['transactionOrigin'] : null;
        $this->container['paymentMethodDetails'] = isset($data['paymentMethodDetails']) ? $data['paymentMethodDetails'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['terminalId'] = isset($data['terminalId']) ? $data['terminalId'] : null;
        $this->container['merchantId'] = isset($data['merchantId']) ? $data['merchantId'] : null;
        $this->container['merchantTransactionId'] = isset($data['merchantTransactionId']) ? $data['merchantTransactionId'] : null;
        $this->container['transactionTime'] = isset($data['transactionTime']) ? $data['transactionTime'] : null;
        $this->container['approvedAmount'] = isset($data['approvedAmount']) ? $data['approvedAmount'] : null;
        $this->container['transactionStatus'] = isset($data['transactionStatus']) ? $data['transactionStatus'] : null;
        $this->container['transactionState'] = isset($data['transactionState']) ? $data['transactionState'] : null;
        $this->container['secure3dResponse'] = isset($data['secure3dResponse']) ? $data['secure3dResponse'] : null;
        $this->container['redirectURL'] = isset($data['redirectURL']) ? $data['redirectURL'] : null;
        $this->container['authenticationResponse'] = isset($data['authenticationResponse']) ? $data['authenticationResponse'] : null;
        $this->container['schemeTransactionId'] = isset($data['schemeTransactionId']) ? $data['schemeTransactionId'] : null;
        $this->container['processor'] = isset($data['processor']) ? $data['processor'] : null;
        $this->container['additionalDetails'] = isset($data['additionalDetails']) ? $data['additionalDetails'] : null;
        $this->container['accountUpdaterResponse'] = isset($data['accountUpdaterResponse']) ? $data['accountUpdaterResponse'] : null;
        $this->container['achResponse'] = isset($data['achResponse']) ? $data['achResponse'] : null;
        $this->container['currencyConversionResponse'] = isset($data['currencyConversionResponse']) ? $data['currencyConversionResponse'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['merchantId']) && (mb_strlen($this->container['merchantId']) > 30)) {
            $invalidProperties[] = "invalid value for 'merchantId', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['merchantTransactionId']) && (mb_strlen($this->container['merchantTransactionId']) > 40)) {
            $invalidProperties[] = "invalid value for 'merchantTransactionId', the character length must be smaller than or equal to 40.";
        }

        $allowedValues = $this->getTransactionStatusAllowableValues();
        if (!is_null($this->container['transactionStatus']) && !in_array($this->container['transactionStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transactionStatus', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTransactionStateAllowableValues();
        if (!is_null($this->container['transactionState']) && !in_array($this->container['transactionState'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transactionState', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['schemeTransactionId']) && (mb_strlen($this->container['schemeTransactionId']) > 40)) {
            $invalidProperties[] = "invalid value for 'schemeTransactionId', the character length must be smaller than or equal to 40.";
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
     * @param string|null $clientRequestId Echoes back the value in the request header for tracking.
     *
     * @return $this
     */
    public function setClientRequestId($clientRequestId)
    {
        $this->container['clientRequestId'] = $clientRequestId;

        return $this;
    }

    /**
     * Gets apiTraceId
     *
     * @return string|null
     */
    public function getApiTraceId()
    {
        return $this->container['apiTraceId'];
    }

    /**
     * Sets apiTraceId
     *
     * @param string|null $apiTraceId Request identifier in API, can be used to request logs from the support team.
     *
     * @return $this
     */
    public function setApiTraceId($apiTraceId)
    {
        $this->container['apiTraceId'] = $apiTraceId;

        return $this;
    }

    /**
     * Gets responseType
     *
     * @return \FirstData\FirstApi\Client\Model\ResponseType|null
     */
    public function getResponseType()
    {
        return $this->container['responseType'];
    }

    /**
     * Sets responseType
     *
     * @param \FirstData\FirstApi\Client\Model\ResponseType|null $responseType responseType
     *
     * @return $this
     */
    public function setResponseType($responseType)
    {
        $this->container['responseType'] = $responseType;

        return $this;
    }

    /**
     * Gets ipgTransactionId
     *
     * @return string|null
     */
    public function getIpgTransactionId()
    {
        return $this->container['ipgTransactionId'];
    }

    /**
     * Sets ipgTransactionId
     *
     * @param string|null $ipgTransactionId The response transaction ID.
     *
     * @return $this
     */
    public function setIpgTransactionId($ipgTransactionId)
    {
        $this->container['ipgTransactionId'] = $ipgTransactionId;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string|null $orderId Client order ID if supplied by client, otherwise the order ID.
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets transactionType
     *
     * @return \FirstData\FirstApi\Client\Model\TransactionType|null
     */
    public function getTransactionType()
    {
        return $this->container['transactionType'];
    }

    /**
     * Sets transactionType
     *
     * @param \FirstData\FirstApi\Client\Model\TransactionType|null $transactionType transactionType
     *
     * @return $this
     */
    public function setTransactionType($transactionType)
    {
        $this->container['transactionType'] = $transactionType;

        return $this;
    }

    /**
     * Gets paymentToken
     *
     * @return \FirstData\FirstApi\Client\Model\PaymentTokenDetails|null
     */
    public function getPaymentToken()
    {
        return $this->container['paymentToken'];
    }

    /**
     * Sets paymentToken
     *
     * @param \FirstData\FirstApi\Client\Model\PaymentTokenDetails|null $paymentToken paymentToken
     *
     * @return $this
     */
    public function setPaymentToken($paymentToken)
    {
        $this->container['paymentToken'] = $paymentToken;

        return $this;
    }

    /**
     * Gets transactionOrigin
     *
     * @return \FirstData\FirstApi\Client\Model\TransactionOrigin|null
     */
    public function getTransactionOrigin()
    {
        return $this->container['transactionOrigin'];
    }

    /**
     * Sets transactionOrigin
     *
     * @param \FirstData\FirstApi\Client\Model\TransactionOrigin|null $transactionOrigin transactionOrigin
     *
     * @return $this
     */
    public function setTransactionOrigin($transactionOrigin)
    {
        $this->container['transactionOrigin'] = $transactionOrigin;

        return $this;
    }

    /**
     * Gets paymentMethodDetails
     *
     * @return \FirstData\FirstApi\Client\Model\PaymentMethodDetails|null
     */
    public function getPaymentMethodDetails()
    {
        return $this->container['paymentMethodDetails'];
    }

    /**
     * Sets paymentMethodDetails
     *
     * @param \FirstData\FirstApi\Client\Model\PaymentMethodDetails|null $paymentMethodDetails paymentMethodDetails
     *
     * @return $this
     */
    public function setPaymentMethodDetails($paymentMethodDetails)
    {
        $this->container['paymentMethodDetails'] = $paymentMethodDetails;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country Country of the card issuer.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets terminalId
     *
     * @return string|null
     */
    public function getTerminalId()
    {
        return $this->container['terminalId'];
    }

    /**
     * Sets terminalId
     *
     * @param string|null $terminalId The terminal that is processing the transaction.
     *
     * @return $this
     */
    public function setTerminalId($terminalId)
    {
        $this->container['terminalId'] = $terminalId;

        return $this;
    }

    /**
     * Gets merchantId
     *
     * @return string|null
     */
    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    /**
     * Sets merchantId
     *
     * @param string|null $merchantId The unique (on Acquirer level) mechant ID. Usually this value has been chosen from the merchant itself and will be used in communication with the endpoint.
     *
     * @return $this
     */
    public function setMerchantId($merchantId)
    {
        if (!is_null($merchantId) && (mb_strlen($merchantId) > 30)) {
            throw new \InvalidArgumentException('invalid length for $merchantId when calling TransactionErrorResponse., must be smaller than or equal to 30.');
        }

        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    /**
     * Gets merchantTransactionId
     *
     * @return string|null
     */
    public function getMerchantTransactionId()
    {
        return $this->container['merchantTransactionId'];
    }

    /**
     * Sets merchantTransactionId
     *
     * @param string|null $merchantTransactionId The unique merchant transaction ID from the request header, if supplied.
     *
     * @return $this
     */
    public function setMerchantTransactionId($merchantTransactionId)
    {
        if (!is_null($merchantTransactionId) && (mb_strlen($merchantTransactionId) > 40)) {
            throw new \InvalidArgumentException('invalid length for $merchantTransactionId when calling TransactionErrorResponse., must be smaller than or equal to 40.');
        }

        $this->container['merchantTransactionId'] = $merchantTransactionId;

        return $this;
    }

    /**
     * Gets transactionTime
     *
     * @return int|null
     */
    public function getTransactionTime()
    {
        return $this->container['transactionTime'];
    }

    /**
     * Sets transactionTime
     *
     * @param int|null $transactionTime The transaction time in seconds since epoch.
     *
     * @return $this
     */
    public function setTransactionTime($transactionTime)
    {
        $this->container['transactionTime'] = $transactionTime;

        return $this;
    }

    /**
     * Gets approvedAmount
     *
     * @return \FirstData\FirstApi\Client\Model\Amount|null
     */
    public function getApprovedAmount()
    {
        return $this->container['approvedAmount'];
    }

    /**
     * Sets approvedAmount
     *
     * @param \FirstData\FirstApi\Client\Model\Amount|null $approvedAmount approvedAmount
     *
     * @return $this
     */
    public function setApprovedAmount($approvedAmount)
    {
        $this->container['approvedAmount'] = $approvedAmount;

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
     * @param string|null $transactionStatus Represents the status of a transaction immediately following the original processing request. This value is not stored for the transaction and is only available in the response when the transaction is processed. TransactionStatus is not returned on either the transaction inquiry or on the order inquiry.
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
     * Gets transactionState
     *
     * @return string|null
     */
    public function getTransactionState()
    {
        return $this->container['transactionState'];
    }

    /**
     * Sets transactionState
     *
     * @param string|null $transactionState Shows the state of the current transaction.
     *
     * @return $this
     */
    public function setTransactionState($transactionState)
    {
        $allowedValues = $this->getTransactionStateAllowableValues();
        if (!is_null($transactionState) && !in_array($transactionState, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transactionState', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transactionState'] = $transactionState;

        return $this;
    }

    /**
     * Gets secure3dResponse
     *
     * @return \FirstData\FirstApi\Client\Model\Secure3dResponse|null
     */
    public function getSecure3dResponse()
    {
        return $this->container['secure3dResponse'];
    }

    /**
     * Sets secure3dResponse
     *
     * @param \FirstData\FirstApi\Client\Model\Secure3dResponse|null $secure3dResponse secure3dResponse
     *
     * @return $this
     */
    public function setSecure3dResponse($secure3dResponse)
    {
        $this->container['secure3dResponse'] = $secure3dResponse;

        return $this;
    }

    /**
     * Gets redirectURL
     *
     * @return string|null
     */
    public function getRedirectURL()
    {
        return $this->container['redirectURL'];
    }

    /**
     * Sets redirectURL
     *
     * @param string|null $redirectURL The endpoint redirection URL.
     *
     * @return $this
     */
    public function setRedirectURL($redirectURL)
    {
        $this->container['redirectURL'] = $redirectURL;

        return $this;
    }

    /**
     * Gets authenticationResponse
     *
     * @return \FirstData\FirstApi\Client\Model\Secure3DAuthenticationResponse|null
     */
    public function getAuthenticationResponse()
    {
        return $this->container['authenticationResponse'];
    }

    /**
     * Sets authenticationResponse
     *
     * @param \FirstData\FirstApi\Client\Model\Secure3DAuthenticationResponse|null $authenticationResponse authenticationResponse
     *
     * @return $this
     */
    public function setAuthenticationResponse($authenticationResponse)
    {
        $this->container['authenticationResponse'] = $authenticationResponse;

        return $this;
    }

    /**
     * Gets schemeTransactionId
     *
     * @return string|null
     */
    public function getSchemeTransactionId()
    {
        return $this->container['schemeTransactionId'];
    }

    /**
     * Sets schemeTransactionId
     *
     * @param string|null $schemeTransactionId The transaction ID received from schemes for the initial transaction of card on file flows.
     *
     * @return $this
     */
    public function setSchemeTransactionId($schemeTransactionId)
    {
        if (!is_null($schemeTransactionId) && (mb_strlen($schemeTransactionId) > 40)) {
            throw new \InvalidArgumentException('invalid length for $schemeTransactionId when calling TransactionErrorResponse., must be smaller than or equal to 40.');
        }

        $this->container['schemeTransactionId'] = $schemeTransactionId;

        return $this;
    }

    /**
     * Gets processor
     *
     * @return \FirstData\FirstApi\Client\Model\ProcessorData|null
     */
    public function getProcessor()
    {
        return $this->container['processor'];
    }

    /**
     * Sets processor
     *
     * @param \FirstData\FirstApi\Client\Model\ProcessorData|null $processor processor
     *
     * @return $this
     */
    public function setProcessor($processor)
    {
        $this->container['processor'] = $processor;

        return $this;
    }

    /**
     * Gets additionalDetails
     *
     * @return \FirstData\FirstApi\Client\Model\AdditionalTransactionDetails|null
     */
    public function getAdditionalDetails()
    {
        return $this->container['additionalDetails'];
    }

    /**
     * Sets additionalDetails
     *
     * @param \FirstData\FirstApi\Client\Model\AdditionalTransactionDetails|null $additionalDetails additionalDetails
     *
     * @return $this
     */
    public function setAdditionalDetails($additionalDetails)
    {
        $this->container['additionalDetails'] = $additionalDetails;

        return $this;
    }

    /**
     * Gets accountUpdaterResponse
     *
     * @return \FirstData\FirstApi\Client\Model\AccountUpdaterResponse|null
     */
    public function getAccountUpdaterResponse()
    {
        return $this->container['accountUpdaterResponse'];
    }

    /**
     * Sets accountUpdaterResponse
     *
     * @param \FirstData\FirstApi\Client\Model\AccountUpdaterResponse|null $accountUpdaterResponse accountUpdaterResponse
     *
     * @return $this
     */
    public function setAccountUpdaterResponse($accountUpdaterResponse)
    {
        $this->container['accountUpdaterResponse'] = $accountUpdaterResponse;

        return $this;
    }

    /**
     * Gets achResponse
     *
     * @return \FirstData\FirstApi\Client\Model\AchResponse|null
     */
    public function getAchResponse()
    {
        return $this->container['achResponse'];
    }

    /**
     * Sets achResponse
     *
     * @param \FirstData\FirstApi\Client\Model\AchResponse|null $achResponse achResponse
     *
     * @return $this
     */
    public function setAchResponse($achResponse)
    {
        $this->container['achResponse'] = $achResponse;

        return $this;
    }

    /**
     * Gets currencyConversionResponse
     *
     * @return \FirstData\FirstApi\Client\Model\CurrencyConversionResponse|null
     */
    public function getCurrencyConversionResponse()
    {
        return $this->container['currencyConversionResponse'];
    }

    /**
     * Sets currencyConversionResponse
     *
     * @param \FirstData\FirstApi\Client\Model\CurrencyConversionResponse|null $currencyConversionResponse currencyConversionResponse
     *
     * @return $this
     */
    public function setCurrencyConversionResponse($currencyConversionResponse)
    {
        $this->container['currencyConversionResponse'] = $currencyConversionResponse;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \FirstData\FirstApi\Client\Model\Error|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \FirstData\FirstApi\Client\Model\Error|null $error error
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

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


