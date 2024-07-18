<?php
/**
 * This file is part of the Billbee API package.
 *
 * Copyright 2017 - 2020 by Billbee GmbH
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 *
 * Created by Julian Finkler <julian@mintware.de>
 */

namespace BillbeeDe\BillbeeAPI\Model;

use MintWare\DMM\DataField;

class ShippingProvider
{
    /**
     * @var int
     * @DataField(name="id", type="int")
     */
    public $id;

    /**
     * @var string
     * @DataField(name="name", type="string")
     */
    public $name = '';

    /**
     * @var string
     * @DataField(name="products", type="BillbeeDe\BillbeeAPI\Model\ShippingProduct[]")
     */
    public $products = '';
}
