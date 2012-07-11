<?php
/**
 * Class file for EbayTradingTypeGetSellingManagerAlertsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellingManagerAlertsResponseType
 * Documentation : Returns alerts for a Selling Manager user.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellingManagerAlertsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The Alert
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the list of alerts issued for Selling Manager.
	 * @var EbayTradingTypeSellingManagerAlertType
	 */
	public $Alert;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingManagerAlertType Alert
	 * @return EbayTradingTypeGetSellingManagerAlertsResponseType
	 */
	public function __construct($_Alert = null)
	{
		EbayTradingWsdlClass::__construct(array('Alert'=>$_Alert));
	}
	/**
	 * Set Alert
	 * @param SellingManagerAlertType Alert
	 * @return SellingManagerAlertType
	 */
	public function setAlert($_Alert)
	{
		return ($this->Alert = $_Alert);
	}
	/**
	 * Get Alert
	 * @return EbayTradingTypeSellingManagerAlertType
	 */
	public function getAlert()
	{
		return $this->Alert;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>