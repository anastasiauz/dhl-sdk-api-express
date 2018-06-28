<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Response\RateResponse;

/**
 * The charge section.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Charge
{
    /**
     * Special service or extra charge code – this is the code you would have to use in the ShipmentRequest
     * message if you wish to add an optional Service such as Insurance.
     *
     * @var string 
     */
    private $ChargeCode;

    /**
     * Name of the Value Added Service.
     *
     * @var string 
     */
    private $ChargeType;

    /**
     * The charge amount of the line item charge.
     * 
     * @var string 
     */
    private $ChargeAmount;

    /**
     * Returns the charge code.
     *
     * @return string
     */
    public function getChargeCode()
    {
        return $this->ChargeCode;
    }

    /**
     * Returns the charge type.
     *
     * @return string
     */
    public function getChargeType()
    {
        return $this->ChargeType;
    }

    /**
     * Returns the charge amount.
     *
     * @return string
     */
    public function getChargeAmount()
    {
        return $this->ChargeAmount;
    }
}
