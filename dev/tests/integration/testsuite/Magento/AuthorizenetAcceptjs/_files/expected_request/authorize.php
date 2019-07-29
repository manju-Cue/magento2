<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

return [
    'createTransactionRequest' => [
        'merchantAuthentication' =>[
            'name' => 'someusername',
            'transactionKey' => 'somepassword',
        ],
        'transactionRequest' => [
            'transactionType' => 'authOnlyTransaction',
            'amount' => '110.00',
            'payment' => [
                'opaqueData' => [
                    'dataDescriptor' => 'mydescriptor',
                    'dataValue' => 'myvalue',
                ],
            ],
            'solution' => [
                'id' => 'AAA102993',
            ],
            'order' => [
                'invoiceNumber' => '100000001',
            ],
            'poNumber' => null,
            'customer' => [
                'id' => "1",
                'email' => 'admin@example.com',
            ],
            'billTo' => [
                'firstName' => 'firstname',
                'lastName' => 'lastname',
                'company' => '',
                'address' => 'street',
                'city' => 'Los Angeles',
                'state' => 'CA',
                'zip' => '11111',
                'country' => 'US',
            ],
            'shipTo' => [
                'firstName' => 'John',
                'lastName' => 'Doe',
                'company' => '',
                'address' => '6161 West Centinela Avenue',
                'city' => 'Los Angeles',
                'state' => 'CA',
                'zip' => '11111',
                'country' => 'US',
            ],
            'customerIP' => '127.0.0.1',
            'userFields' => [
                'userField' => [
                    [
                        'name' => 'transactionType',
                        'value' => 'authOnlyTransaction',
                    ],
                ],
            ],
        ],
    ],
];
