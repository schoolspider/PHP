<?php
/**
 * Secure3D21AuthenticationRequest
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
 * Secure3D21AuthenticationRequest Class Doc Comment
 *
 * @category Class
 * @description Request authentication of the payment card using the 3DS 2.x URL redirect scheme. DEPRECATED - use Secure3DAuthenticationRequest instead
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Secure3D21AuthenticationRequest extends AuthenticationRequest 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Secure3D21AuthenticationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'termURL' => 'string',
        'methodNotificationURL' => 'string',
        'challengeIndicator' => 'string',
        'challengeWindowSize' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'termURL' => null,
        'methodNotificationURL' => null,
        'challengeIndicator' => null,
        'challengeWindowSize' => null
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
        'termURL' => 'termURL',
        'methodNotificationURL' => 'methodNotificationURL',
        'challengeIndicator' => 'challengeIndicator',
        'challengeWindowSize' => 'challengeWindowSize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'termURL' => 'setTermURL',
        'methodNotificationURL' => 'setMethodNotificationURL',
        'challengeIndicator' => 'setChallengeIndicator',
        'challengeWindowSize' => 'setChallengeWindowSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'termURL' => 'getTermURL',
        'methodNotificationURL' => 'getMethodNotificationURL',
        'challengeIndicator' => 'getChallengeIndicator',
        'challengeWindowSize' => 'getChallengeWindowSize'
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

    const CHALLENGE_INDICATOR__01 = '01';
    const CHALLENGE_INDICATOR__02 = '02';
    const CHALLENGE_INDICATOR__03 = '03';
    const CHALLENGE_INDICATOR__04 = '04';
    const CHALLENGE_WINDOW_SIZE__01 = '01';
    const CHALLENGE_WINDOW_SIZE__02 = '02';
    const CHALLENGE_WINDOW_SIZE__03 = '03';
    const CHALLENGE_WINDOW_SIZE__04 = '04';
    const CHALLENGE_WINDOW_SIZE__05 = '05';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChallengeIndicatorAllowableValues()
    {
        return [
            self::CHALLENGE_INDICATOR__01,
            self::CHALLENGE_INDICATOR__02,
            self::CHALLENGE_INDICATOR__03,
            self::CHALLENGE_INDICATOR__04,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChallengeWindowSizeAllowableValues()
    {
        return [
            self::CHALLENGE_WINDOW_SIZE__01,
            self::CHALLENGE_WINDOW_SIZE__02,
            self::CHALLENGE_WINDOW_SIZE__03,
            self::CHALLENGE_WINDOW_SIZE__04,
            self::CHALLENGE_WINDOW_SIZE__05,
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

        $this->container['termURL'] = isset($data['termURL']) ? $data['termURL'] : null;
        $this->container['methodNotificationURL'] = isset($data['methodNotificationURL']) ? $data['methodNotificationURL'] : null;
        $this->container['challengeIndicator'] = isset($data['challengeIndicator']) ? $data['challengeIndicator'] : '01';
        $this->container['challengeWindowSize'] = isset($data['challengeWindowSize']) ? $data['challengeWindowSize'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getChallengeIndicatorAllowableValues();
        if (!is_null($this->container['challengeIndicator']) && !in_array($this->container['challengeIndicator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'challengeIndicator', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getChallengeWindowSizeAllowableValues();
        if (!is_null($this->container['challengeWindowSize']) && !in_array($this->container['challengeWindowSize'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'challengeWindowSize', must be one of '%s'",
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
     * Gets termURL
     *
     * @return string|null
     */
    public function getTermURL()
    {
        return $this->container['termURL'];
    }

    /**
     * Sets termURL
     *
     * @param string|null $termURL The result of the authentication will be sent to this URL. If not provided, a term URL will be dynamically generated. Note this must be a valid URL (special characters should be URL-encoded).
     *
     * @return $this
     */
    public function setTermURL($termURL)
    {
        $this->container['termURL'] = $termURL;

        return $this;
    }

    /**
     * Gets methodNotificationURL
     *
     * @return string|null
     */
    public function getMethodNotificationURL()
    {
        return $this->container['methodNotificationURL'];
    }

    /**
     * Sets methodNotificationURL
     *
     * @param string|null $methodNotificationURL The 3DS method iframe and transaction ID will be sent here. Note this must be a valid URL (special characters should be URL-encoded).
     *
     * @return $this
     */
    public function setMethodNotificationURL($methodNotificationURL)
    {
        $this->container['methodNotificationURL'] = $methodNotificationURL;

        return $this;
    }

    /**
     * Gets challengeIndicator
     *
     * @return string|null
     */
    public function getChallengeIndicator()
    {
        return $this->container['challengeIndicator'];
    }

    /**
     * Sets challengeIndicator
     *
     * @param string|null $challengeIndicator Indicates whether or not a challenge should be performed. 01 = No preference (You have no preference whether a challenge should be performed. This is the default value) 02 = No challenge requested (You prefer that no challenge should be performed) 03 = Challenge requested: 3DS Requestor Preference (You prefer that a challenge should be performed) 04 = Challenge requested: Mandate (There are local or regional mandates that mean that a challenge must be performed)
     *
     * @return $this
     */
    public function setChallengeIndicator($challengeIndicator)
    {
        $allowedValues = $this->getChallengeIndicatorAllowableValues();
        if (!is_null($challengeIndicator) && !in_array($challengeIndicator, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'challengeIndicator', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['challengeIndicator'] = $challengeIndicator;

        return $this;
    }

    /**
     * Gets challengeWindowSize
     *
     * @return string|null
     */
    public function getChallengeWindowSize()
    {
        return $this->container['challengeWindowSize'];
    }

    /**
     * Sets challengeWindowSize
     *
     * @param string|null $challengeWindowSize Defines the size of the challenge window displayed to customers during authentication. 01 = 250 x 400 02 = 390 x 400 03 = 500 x 600 04 = 600 x 400 05 = Full screen
     *
     * @return $this
     */
    public function setChallengeWindowSize($challengeWindowSize)
    {
        $allowedValues = $this->getChallengeWindowSizeAllowableValues();
        if (!is_null($challengeWindowSize) && !in_array($challengeWindowSize, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'challengeWindowSize', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['challengeWindowSize'] = $challengeWindowSize;

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


