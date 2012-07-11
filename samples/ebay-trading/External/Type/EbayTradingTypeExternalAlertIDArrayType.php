<?php
/**
 * Class file for EbayTradingTypeExternalAlertIDArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeExternalAlertIDArrayType
 * @date 04/07/2012
 */
class EbayTradingTypeExternalAlertIDArrayType extends EbayTradingWsdlClass
{
	/**
	 * The ExternalAlertID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $ExternalAlertID;
	/**
	 * Constructor
	 * @param string ExternalAlertID
	 * @return EbayTradingTypeExternalAlertIDArrayType
	 */
	public function __construct($_ExternalAlertID = null)
	{
		parent::__construct(array('ExternalAlertID'=>$_ExternalAlertID));
	}
	/**
	 * Set ExternalAlertID
	 * @param string ExternalAlertID
	 * @return string
	 */
	public function setExternalAlertID($_ExternalAlertID)
	{
		return ($this->ExternalAlertID = $_ExternalAlertID);
	}
	/**
	 * Get ExternalAlertID
	 * @return string
	 */
	public function getExternalAlertID()
	{
		return $this->ExternalAlertID;
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