<?php
/**
 * Class file for PayPalTypeBMLOfferInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBMLOfferInfoType
 * Documentation : BMLOfferInfoType Specific information for BML.
 * @date 14/07/2012
 */
class PayPalTypeBMLOfferInfoType extends PayPalWsdlClass
{
	/**
	 * The OfferTrackingID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identification for merchant/buyer/offer combo.
	 * @var string
	 */
	public $OfferTrackingID;
	/**
	 * Constructor
	 * @param string OfferTrackingID
	 * @return PayPalTypeBMLOfferInfoType
	 */
	public function __construct($_OfferTrackingID = null)
	{
		parent::__construct(array('OfferTrackingID'=>$_OfferTrackingID));
	}
	/**
	 * Set OfferTrackingID
	 * @param string OfferTrackingID
	 * @return string
	 */
	public function setOfferTrackingID($_OfferTrackingID)
	{
		return ($this->OfferTrackingID = $_OfferTrackingID);
	}
	/**
	 * Get OfferTrackingID
	 * @return string
	 */
	public function getOfferTrackingID()
	{
		return $this->OfferTrackingID;
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