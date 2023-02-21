<?php

namespace Payriff\Traits;

trait CreateOrderHelper
{
    public function createOrder(
        float|int $amount,
        string $currencyType = 'AZN',
        string $language = 'AZ',
        ?string $description = null,
        ?string $approveURL = null,
        ?string $cancelURL = null,
        ?string $declineURL = null
    ): array|bool {
        $response =  $this->sendRequest('createOrder', [
            "amount" => $amount,
            "approveURL"=> $approveURL,
            "cancelURL" => $cancelURL,
            "currencyType" => $currencyType,
            "declineURL" => $declineURL,
            "description" => $description,
            "language" => $language
        ]);

        if ($response['code'] === $this::SUCCESS) {
            return $response;
        }

        return false;
    }
}