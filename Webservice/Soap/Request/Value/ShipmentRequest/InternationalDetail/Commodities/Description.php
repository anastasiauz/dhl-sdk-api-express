<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\InternationalDetail\Commodities;

use Dhl\Express\Webservice\Soap\Request\Value\AlphaNumeric;

/**
 * The description of the content of the shipment.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Description extends AlphaNumeric
{
    protected const MAX_LENGTH = 35;
}
