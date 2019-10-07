<?php
/**
 * AirlineTravelRoute
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
 * OpenAPI spec version: 6.8.0.20190731.002
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
 * AirlineTravelRoute Class Doc Comment
 *
 * @category Class
 * @description Additional information about the route.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AirlineTravelRoute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Airline_travelRoute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'departureDate' => '\DateTime',
        'origin' => 'string',
        'destination' => 'string',
        'carrierCode' => 'string',
        'serviceClass' => 'string',
        'stopoverType' => 'string',
        'fareBasisCode' => 'string',
        'departureTax' => 'float',
        'flightNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'departureDate' => 'date',
        'origin' => null,
        'destination' => null,
        'carrierCode' => null,
        'serviceClass' => null,
        'stopoverType' => null,
        'fareBasisCode' => null,
        'departureTax' => null,
        'flightNumber' => null
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
        'departureDate' => 'departureDate',
        'origin' => 'origin',
        'destination' => 'destination',
        'carrierCode' => 'carrierCode',
        'serviceClass' => 'serviceClass',
        'stopoverType' => 'stopoverType',
        'fareBasisCode' => 'fareBasisCode',
        'departureTax' => 'departureTax',
        'flightNumber' => 'flightNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'departureDate' => 'setDepartureDate',
        'origin' => 'setOrigin',
        'destination' => 'setDestination',
        'carrierCode' => 'setCarrierCode',
        'serviceClass' => 'setServiceClass',
        'stopoverType' => 'setStopoverType',
        'fareBasisCode' => 'setFareBasisCode',
        'departureTax' => 'setDepartureTax',
        'flightNumber' => 'setFlightNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'departureDate' => 'getDepartureDate',
        'origin' => 'getOrigin',
        'destination' => 'getDestination',
        'carrierCode' => 'getCarrierCode',
        'serviceClass' => 'getServiceClass',
        'stopoverType' => 'getStopoverType',
        'fareBasisCode' => 'getFareBasisCode',
        'departureTax' => 'getDepartureTax',
        'flightNumber' => 'getFlightNumber'
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

    const STOPOVER_TYPE_DIRECT = 'DIRECT';
    const STOPOVER_TYPE_STOPOVER = 'STOPOVER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStopoverTypeAllowableValues()
    {
        return [
            self::STOPOVER_TYPE_DIRECT,
            self::STOPOVER_TYPE_STOPOVER,
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
        $this->container['departureDate'] = isset($data['departureDate']) ? $data['departureDate'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['carrierCode'] = isset($data['carrierCode']) ? $data['carrierCode'] : null;
        $this->container['serviceClass'] = isset($data['serviceClass']) ? $data['serviceClass'] : null;
        $this->container['stopoverType'] = isset($data['stopoverType']) ? $data['stopoverType'] : null;
        $this->container['fareBasisCode'] = isset($data['fareBasisCode']) ? $data['fareBasisCode'] : null;
        $this->container['departureTax'] = isset($data['departureTax']) ? $data['departureTax'] : null;
        $this->container['flightNumber'] = isset($data['flightNumber']) ? $data['flightNumber'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['origin']) && (mb_strlen($this->container['origin']) > 3)) {
            $invalidProperties[] = "invalid value for 'origin', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['destination']) && (mb_strlen($this->container['destination']) > 3)) {
            $invalidProperties[] = "invalid value for 'destination', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['carrierCode']) && (mb_strlen($this->container['carrierCode']) > 2)) {
            $invalidProperties[] = "invalid value for 'carrierCode', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['serviceClass']) && (mb_strlen($this->container['serviceClass']) > 1)) {
            $invalidProperties[] = "invalid value for 'serviceClass', the character length must be smaller than or equal to 1.";
        }

        $allowedValues = $this->getStopoverTypeAllowableValues();
        if (!is_null($this->container['stopoverType']) && !in_array($this->container['stopoverType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'stopoverType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['fareBasisCode']) && (mb_strlen($this->container['fareBasisCode']) > 2)) {
            $invalidProperties[] = "invalid value for 'fareBasisCode', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['departureTax']) && ($this->container['departureTax'] > 999999999999)) {
            $invalidProperties[] = "invalid value for 'departureTax', must be smaller than or equal to 999999999999.";
        }

        if (!is_null($this->container['flightNumber']) && (mb_strlen($this->container['flightNumber']) > 10)) {
            $invalidProperties[] = "invalid value for 'flightNumber', the character length must be smaller than or equal to 10.";
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
     * Gets departureDate
     *
     * @return \DateTime|null
     */
    public function getDepartureDate()
    {
        return $this->container['departureDate'];
    }

    /**
     * Sets departureDate
     *
     * @param \DateTime|null $departureDate Date of departure.
     *
     * @return $this
     */
    public function setDepartureDate($departureDate)
    {
        $this->container['departureDate'] = $departureDate;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return string|null
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param string|null $origin The IATA code for the departure airport.
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        if (!is_null($origin) && (mb_strlen($origin) > 3)) {
            throw new \InvalidArgumentException('invalid length for $origin when calling AirlineTravelRoute., must be smaller than or equal to 3.');
        }

        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return string|null
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param string|null $destination The IATA code for the destination. airport.
     *
     * @return $this
     */
    public function setDestination($destination)
    {
        if (!is_null($destination) && (mb_strlen($destination) > 3)) {
            throw new \InvalidArgumentException('invalid length for $destination when calling AirlineTravelRoute., must be smaller than or equal to 3.');
        }

        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets carrierCode
     *
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->container['carrierCode'];
    }

    /**
     * Sets carrierCode
     *
     * @param string|null $carrierCode The IATA code for the carrier.
     *
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        if (!is_null($carrierCode) && (mb_strlen($carrierCode) > 2)) {
            throw new \InvalidArgumentException('invalid length for $carrierCode when calling AirlineTravelRoute., must be smaller than or equal to 2.');
        }

        $this->container['carrierCode'] = $carrierCode;

        return $this;
    }

    /**
     * Gets serviceClass
     *
     * @return string|null
     */
    public function getServiceClass()
    {
        return $this->container['serviceClass'];
    }

    /**
     * Sets serviceClass
     *
     * @param string|null $serviceClass The airline code for the service class of the ticket.
     *
     * @return $this
     */
    public function setServiceClass($serviceClass)
    {
        if (!is_null($serviceClass) && (mb_strlen($serviceClass) > 1)) {
            throw new \InvalidArgumentException('invalid length for $serviceClass when calling AirlineTravelRoute., must be smaller than or equal to 1.');
        }

        $this->container['serviceClass'] = $serviceClass;

        return $this;
    }

    /**
     * Gets stopoverType
     *
     * @return string|null
     */
    public function getStopoverType()
    {
        return $this->container['stopoverType'];
    }

    /**
     * Sets stopoverType
     *
     * @param string|null $stopoverType Indicates whether the route is direct.
     *
     * @return $this
     */
    public function setStopoverType($stopoverType)
    {
        $allowedValues = $this->getStopoverTypeAllowableValues();
        if (!is_null($stopoverType) && !in_array($stopoverType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'stopoverType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['stopoverType'] = $stopoverType;

        return $this;
    }

    /**
     * Gets fareBasisCode
     *
     * @return string|null
     */
    public function getFareBasisCode()
    {
        return $this->container['fareBasisCode'];
    }

    /**
     * Sets fareBasisCode
     *
     * @param string|null $fareBasisCode The airline fare basis code.
     *
     * @return $this
     */
    public function setFareBasisCode($fareBasisCode)
    {
        if (!is_null($fareBasisCode) && (mb_strlen($fareBasisCode) > 2)) {
            throw new \InvalidArgumentException('invalid length for $fareBasisCode when calling AirlineTravelRoute., must be smaller than or equal to 2.');
        }

        $this->container['fareBasisCode'] = $fareBasisCode;

        return $this;
    }

    /**
     * Gets departureTax
     *
     * @return float|null
     */
    public function getDepartureTax()
    {
        return $this->container['departureTax'];
    }

    /**
     * Sets departureTax
     *
     * @param float|null $departureTax Fee charged by a country when a person leaves the country.
     *
     * @return $this
     */
    public function setDepartureTax($departureTax)
    {

        if (!is_null($departureTax) && ($departureTax > 999999999999)) {
            throw new \InvalidArgumentException('invalid value for $departureTax when calling AirlineTravelRoute., must be smaller than or equal to 999999999999.');
        }

        $this->container['departureTax'] = $departureTax;

        return $this;
    }

    /**
     * Gets flightNumber
     *
     * @return string|null
     */
    public function getFlightNumber()
    {
        return $this->container['flightNumber'];
    }

    /**
     * Sets flightNumber
     *
     * @param string|null $flightNumber The airline flight number associated with the ticket.
     *
     * @return $this
     */
    public function setFlightNumber($flightNumber)
    {
        if (!is_null($flightNumber) && (mb_strlen($flightNumber) > 10)) {
            throw new \InvalidArgumentException('invalid length for $flightNumber when calling AirlineTravelRoute., must be smaller than or equal to 10.');
        }

        $this->container['flightNumber'] = $flightNumber;

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

