<?php
/**
 * Class file for EbayTradingTypeMyMessagesAlertArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMyMessagesAlertArrayType
 * Documentation : To be deprecated in an upcoming release. Contained a list of alert data.
 * @date 04/07/2012
 */
class EbayTradingTypeMyMessagesAlertArrayType extends EbayTradingWsdlClass
{
	/**
	 * The Alert
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : This container will be deprecated in an upcoming release. This field formerly contained the data for one alert.
	 * @var EbayTradingTypeMyMessagesAlertType
	 */
	public $Alert;
	/**
	 * Constructor
	 * @param EbayTradingTypeMyMessagesAlertType Alert
	 * @return EbayTradingTypeMyMessagesAlertArrayType
	 */
	public function __construct($_Alert = null)
	{
		parent::__construct(array('Alert'=>$_Alert));
	}
	/**
	 * Set Alert
	 * @param MyMessagesAlertType Alert
	 * @return MyMessagesAlertType
	 */
	public function setAlert($_Alert)
	{
		return ($this->Alert = $_Alert);
	}
	/**
	 * Get Alert
	 * @return EbayTradingTypeMyMessagesAlertType
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