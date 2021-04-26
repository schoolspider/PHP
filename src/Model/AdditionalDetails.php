<?php
/**
 * AdditionalDetails
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
 * AdditionalDetails Class Doc Comment
 *
 * @category Class
 * @description Merchant supplied tracking numbers.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdditionalDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdditionalDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'comments' => 'string',
        'invoiceNumber' => 'string',
        'purchaseOrderNumber' => 'string',
        'operatorId' => 'string',
        'salesSystemId' => 'string',
        'ipgDeferredAuth' => 'bool',
        'highRiskPurchaseIndicator' => 'bool',
        'receipts' => '\FirstData\FirstApi\Client\Model\ReceiptRequestInfo[]',
        'scaExemptionType' => 'string',
        'scaVisaMerchantID' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'comments' => null,
        'invoiceNumber' => null,
        'purchaseOrderNumber' => null,
        'operatorId' => null,
        'salesSystemId' => null,
        'ipgDeferredAuth' => null,
        'highRiskPurchaseIndicator' => null,
        'receipts' => null,
        'scaExemptionType' => null,
        'scaVisaMerchantID' => null
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
        'comments' => 'comments',
        'invoiceNumber' => 'invoiceNumber',
        'purchaseOrderNumber' => 'purchaseOrderNumber',
        'operatorId' => 'operatorId',
        'salesSystemId' => 'salesSystemId',
        'ipgDeferredAuth' => 'ipgDeferredAuth',
        'highRiskPurchaseIndicator' => 'highRiskPurchaseIndicator',
        'receipts' => 'receipts',
        'scaExemptionType' => 'scaExemptionType',
        'scaVisaMerchantID' => 'scaVisaMerchantID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comments' => 'setComments',
        'invoiceNumber' => 'setInvoiceNumber',
        'purchaseOrderNumber' => 'setPurchaseOrderNumber',
        'operatorId' => 'setOperatorId',
        'salesSystemId' => 'setSalesSystemId',
        'ipgDeferredAuth' => 'setIpgDeferredAuth',
        'highRiskPurchaseIndicator' => 'setHighRiskPurchaseIndicator',
        'receipts' => 'setReceipts',
        'scaExemptionType' => 'setScaExemptionType',
        'scaVisaMerchantID' => 'setScaVisaMerchantID'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comments' => 'getComments',
        'invoiceNumber' => 'getInvoiceNumber',
        'purchaseOrderNumber' => 'getPurchaseOrderNumber',
        'operatorId' => 'getOperatorId',
        'salesSystemId' => 'getSalesSystemId',
        'ipgDeferredAuth' => 'getIpgDeferredAuth',
        'highRiskPurchaseIndicator' => 'getHighRiskPurchaseIndicator',
        'receipts' => 'getReceipts',
        'scaExemptionType' => 'getScaExemptionType',
        'scaVisaMerchantID' => 'getScaVisaMerchantID'
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

    const SCA_EXEMPTION_TYPE_LOW_VALUE_EXEMPTION = 'Low Value Exemption';
    const SCA_EXEMPTION_TYPE_TRA_EXEMPTION = 'TRA Exemption';
    const SCA_EXEMPTION_TYPE_TRUSTED_MERCHANT_EXEMPTION = 'Trusted Merchant Exemption';
    const SCA_EXEMPTION_TYPE_SCP_EXEMPTION = 'SCP Exemption';
    const SCA_EXEMPTION_TYPE_DELEGATED_AUTHENTICATION = 'Delegated Authentication';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getScaExemptionTypeAllowableValues()
    {
        return [
            self::SCA_EXEMPTION_TYPE_LOW_VALUE_EXEMPTION,
            self::SCA_EXEMPTION_TYPE_TRA_EXEMPTION,
            self::SCA_EXEMPTION_TYPE_TRUSTED_MERCHANT_EXEMPTION,
            self::SCA_EXEMPTION_TYPE_SCP_EXEMPTION,
            self::SCA_EXEMPTION_TYPE_DELEGATED_AUTHENTICATION,
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
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['invoiceNumber'] = isset($data['invoiceNumber']) ? $data['invoiceNumber'] : null;
        $this->container['purchaseOrderNumber'] = isset($data['purchaseOrderNumber']) ? $data['purchaseOrderNumber'] : null;
        $this->container['operatorId'] = isset($data['operatorId']) ? $data['operatorId'] : null;
        $this->container['salesSystemId'] = isset($data['salesSystemId']) ? $data['salesSystemId'] : null;
        $this->container['ipgDeferredAuth'] = isset($data['ipgDeferredAuth']) ? $data['ipgDeferredAuth'] : null;
        $this->container['highRiskPurchaseIndicator'] = isset($data['highRiskPurchaseIndicator']) ? $data['highRiskPurchaseIndicator'] : null;
        $this->container['receipts'] = isset($data['receipts']) ? $data['receipts'] : null;
        $this->container['scaExemptionType'] = isset($data['scaExemptionType']) ? $data['scaExemptionType'] : null;
        $this->container['scaVisaMerchantID'] = isset($data['scaVisaMerchantID']) ? $data['scaVisaMerchantID'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['comments']) && (mb_strlen($this->container['comments']) > 1024)) {
            $invalidProperties[] = "invalid value for 'comments', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['invoiceNumber']) && (mb_strlen($this->container['invoiceNumber']) > 48)) {
            $invalidProperties[] = "invalid value for 'invoiceNumber', the character length must be smaller than or equal to 48.";
        }

        if (!is_null($this->container['purchaseOrderNumber']) && (mb_strlen($this->container['purchaseOrderNumber']) > 128)) {
            $invalidProperties[] = "invalid value for 'purchaseOrderNumber', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['operatorId']) && (mb_strlen($this->container['operatorId']) > 35)) {
            $invalidProperties[] = "invalid value for 'operatorId', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['operatorId']) && !preg_match("/^\\S$|^\\S.*\\S$/", $this->container['operatorId'])) {
            $invalidProperties[] = "invalid value for 'operatorId', must be conform to the pattern /^\\S$|^\\S.*\\S$/.";
        }

        if (!is_null($this->container['salesSystemId']) && (mb_strlen($this->container['salesSystemId']) > 50)) {
            $invalidProperties[] = "invalid value for 'salesSystemId', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['salesSystemId']) && !preg_match("/^\\S$|^\\S.*\\S$/", $this->container['salesSystemId'])) {
            $invalidProperties[] = "invalid value for 'salesSystemId', must be conform to the pattern /^\\S$|^\\S.*\\S$/.";
        }

        $allowedValues = $this->getScaExemptionTypeAllowableValues();
        if (!is_null($this->container['scaExemptionType']) && !in_array($this->container['scaExemptionType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'scaExemptionType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['scaVisaMerchantID']) && (mb_strlen($this->container['scaVisaMerchantID']) > 8)) {
            $invalidProperties[] = "invalid value for 'scaVisaMerchantID', the character length must be smaller than or equal to 8.";
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
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments Comments for the payment.
     *
     * @return $this
     */
    public function setComments($comments)
    {
        if (!is_null($comments) && (mb_strlen($comments) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $comments when calling AdditionalDetails., must be smaller than or equal to 1024.');
        }

        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets invoiceNumber
     *
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoiceNumber'];
    }

    /**
     * Sets invoiceNumber
     *
     * @param string|null $invoiceNumber Invoice number.
     *
     * @return $this
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        if (!is_null($invoiceNumber) && (mb_strlen($invoiceNumber) > 48)) {
            throw new \InvalidArgumentException('invalid length for $invoiceNumber when calling AdditionalDetails., must be smaller than or equal to 48.');
        }

        $this->container['invoiceNumber'] = $invoiceNumber;

        return $this;
    }

    /**
     * Gets purchaseOrderNumber
     *
     * @return string|null
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchaseOrderNumber'];
    }

    /**
     * Sets purchaseOrderNumber
     *
     * @param string|null $purchaseOrderNumber Purchase order number.
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        if (!is_null($purchaseOrderNumber) && (mb_strlen($purchaseOrderNumber) > 128)) {
            throw new \InvalidArgumentException('invalid length for $purchaseOrderNumber when calling AdditionalDetails., must be smaller than or equal to 128.');
        }

        $this->container['purchaseOrderNumber'] = $purchaseOrderNumber;

        return $this;
    }

    /**
     * Gets operatorId
     *
     * @return string|null
     */
    public function getOperatorId()
    {
        return $this->container['operatorId'];
    }

    /**
     * Sets operatorId
     *
     * @param string|null $operatorId The operator ID.
     *
     * @return $this
     */
    public function setOperatorId($operatorId)
    {
        if (!is_null($operatorId) && (mb_strlen($operatorId) > 35)) {
            throw new \InvalidArgumentException('invalid length for $operatorId when calling AdditionalDetails., must be smaller than or equal to 35.');
        }
        if (!is_null($operatorId) && (!preg_match("/^\\S$|^\\S.*\\S$/", $operatorId))) {
            throw new \InvalidArgumentException("invalid value for $operatorId when calling AdditionalDetails., must conform to the pattern /^\\S$|^\\S.*\\S$/.");
        }

        $this->container['operatorId'] = $operatorId;

        return $this;
    }

    /**
     * Gets salesSystemId
     *
     * @return string|null
     */
    public function getSalesSystemId()
    {
        return $this->container['salesSystemId'];
    }

    /**
     * Sets salesSystemId
     *
     * @param string|null $salesSystemId The sales system ID.
     *
     * @return $this
     */
    public function setSalesSystemId($salesSystemId)
    {
        if (!is_null($salesSystemId) && (mb_strlen($salesSystemId) > 50)) {
            throw new \InvalidArgumentException('invalid length for $salesSystemId when calling AdditionalDetails., must be smaller than or equal to 50.');
        }
        if (!is_null($salesSystemId) && (!preg_match("/^\\S$|^\\S.*\\S$/", $salesSystemId))) {
            throw new \InvalidArgumentException("invalid value for $salesSystemId when calling AdditionalDetails., must conform to the pattern /^\\S$|^\\S.*\\S$/.");
        }

        $this->container['salesSystemId'] = $salesSystemId;

        return $this;
    }

    /**
     * Gets ipgDeferredAuth
     *
     * @return bool|null
     */
    public function getIpgDeferredAuth()
    {
        return $this->container['ipgDeferredAuth'];
    }

    /**
     * Sets ipgDeferredAuth
     *
     * @param bool|null $ipgDeferredAuth Indicates if the particular transaction is a deferred authorization.
     *
     * @return $this
     */
    public function setIpgDeferredAuth($ipgDeferredAuth)
    {
        $this->container['ipgDeferredAuth'] = $ipgDeferredAuth;

        return $this;
    }

    /**
     * Gets highRiskPurchaseIndicator
     *
     * @return bool|null
     */
    public function getHighRiskPurchaseIndicator()
    {
        return $this->container['highRiskPurchaseIndicator'];
    }

    /**
     * Sets highRiskPurchaseIndicator
     *
     * @param bool|null $highRiskPurchaseIndicator this is highRiskPurchaseIndicator.
     *
     * @return $this
     */
    public function setHighRiskPurchaseIndicator($highRiskPurchaseIndicator)
    {
        $this->container['highRiskPurchaseIndicator'] = $highRiskPurchaseIndicator;

        return $this;
    }

    /**
     * Gets receipts
     *
     * @return \FirstData\FirstApi\Client\Model\ReceiptRequestInfo[]|null
     */
    public function getReceipts()
    {
        return $this->container['receipts'];
    }

    /**
     * Sets receipts
     *
     * @param \FirstData\FirstApi\Client\Model\ReceiptRequestInfo[]|null $receipts Provides request information that is necessary to generate receipts.
     *
     * @return $this
     */
    public function setReceipts($receipts)
    {
        $this->container['receipts'] = $receipts;

        return $this;
    }

    /**
     * Gets scaExemptionType
     *
     * @return string|null
     */
    public function getScaExemptionType()
    {
        return $this->container['scaExemptionType'];
    }

    /**
     * Sets scaExemptionType
     *
     * @param string|null $scaExemptionType Strong customer authentication exemption type indicator.
     *
     * @return $this
     */
    public function setScaExemptionType($scaExemptionType)
    {
        $allowedValues = $this->getScaExemptionTypeAllowableValues();
        if (!is_null($scaExemptionType) && !in_array($scaExemptionType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'scaExemptionType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['scaExemptionType'] = $scaExemptionType;

        return $this;
    }

    /**
     * Gets scaVisaMerchantID
     *
     * @return string|null
     */
    public function getScaVisaMerchantID()
    {
        return $this->container['scaVisaMerchantID'];
    }

    /**
     * Sets scaVisaMerchantID
     *
     * @param string|null $scaVisaMerchantID Eight-character Visa merchant identifier (VMID) assigned by Visa, required for trusted merchant and delegated authentication.
     *
     * @return $this
     */
    public function setScaVisaMerchantID($scaVisaMerchantID)
    {
        if (!is_null($scaVisaMerchantID) && (mb_strlen($scaVisaMerchantID) > 8)) {
            throw new \InvalidArgumentException('invalid length for $scaVisaMerchantID when calling AdditionalDetails., must be smaller than or equal to 8.');
        }

        $this->container['scaVisaMerchantID'] = $scaVisaMerchantID;

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


