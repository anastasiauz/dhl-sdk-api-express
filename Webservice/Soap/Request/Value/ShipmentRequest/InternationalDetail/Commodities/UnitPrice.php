<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\InternationalDetail\Commodities;

use Dhl\Express\Webservice\Soap\Request\Value\Money;

/**
 * The price per item in the shipment, e.g. 7.50 € if one of the books costs 7.50€.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class UnitPrice extends Money
{
}
