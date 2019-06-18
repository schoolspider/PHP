<?php

namespace FirstData\FirstApi\Client\Simple;

use FirstData\FirstApi\Client\ApiException;
use FirstData\FirstApi\Client\Model\CardInfoLookupRequest;
use FirstData\FirstApi\Client\Model\CardInfoLookupResponse;
use FirstData\FirstApi\Client\Model\ErrorResponse;
use InvalidArgumentException;

/**
 * Class CardInfoLookupApi
 * @package FirstData\FirstApi\Client\Simple
 */
class CardInfoLookupApi extends ApiWrapper
{
    /** @var \FirstData\FirstApi\Client\Api\CardInfoLookupApi */
    private $client;

    /**
     * CardInfoLookupApi constructor.
     * @param  ClientContext $context
     */
    public function __construct(ClientContext $context)
    {
        parent::__construct($context);
        $this->client = $this->buildClient(\FirstData\FirstApi\Client\Api\CardInfoLookupApi::class);
    }

    /**
     * Card Information lookup
     *
     * @param  CardInfoLookupRequest $payload Card information lookup payload
     * @param  string $region The region where client wants to process the transaction (optional)
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return CardInfoLookupResponse|ErrorResponse
     */
    public function cardInfoLookup(CardInfoLookupRequest $payload, $region = null)
    {
        $strPayload = $this->serialize($payload);
        $headers = $this->genHeaders($strPayload);
        return $this->client->cardInfoLookup(
            $headers->getContentType(),
            $headers->getClientRequestId(),
            $headers->getApiKey(),
            $headers->getTimestamp(),
            $payload,
            $headers->getMessageSignature(),
            $region ?? $this->getDefaultRegion()
        );
    }
}
