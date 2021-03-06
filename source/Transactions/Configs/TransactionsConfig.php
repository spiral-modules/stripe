<?php

namespace Spiral\Transactions\Configs;

use Spiral\Core\InjectableConfig;
use Spiral\Transactions\Gateways\Stripe\StripeGateway;

class TransactionsConfig extends InjectableConfig
{
    const CONFIG = 'modules/transactions';

    protected $config = [
        'gateways' => [
            StripeGateway::class => [
                'name'        => 'stripe',
                'environment' => '',
                'options'     => [
                    //required
                    'api_key'         => '',
                    //optional
                    'idempotency_key' => '',
                    'stripe_account'  => '',
                    'stripe_version'  => '',
                ]
            ]
        ]
    ];

    public function gatewayOptions(string $gateway): array
    {
        return $this->config['gateways'][$gateway]['options'];
    }

    public function gatewayName(string $gateway): string
    {
        return $this->gatewayOption($gateway, 'name');
    }

    public function gatewayOption(string $gateway, string $option): string
    {
        return $this->config['gateways'][$gateway][$option];
    }
}