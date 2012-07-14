<?php
/**
 * Class file for PayPalTypeExternalPartnerTrackingDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeExternalPartnerTrackingDetailsType
 * Documentation : Contains elements that allow tracking for an external partner.
 * @date 14/07/2012
 */
class PayPalTypeExternalPartnerTrackingDetailsType extends PayPalWsdlClass
{
	/**
	 * The ExternalPartnerSegmentID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : PayPal will just log this string. There will NOT be any business logic around it, nor any decisions made based on the value of the string that is passed in. From a tracking/analytical perspective, PayPal would not infer any meaning to any specific value. We would just segment the traffic based on the value passed (Cart and None as an example) and track different metrics like risk/conversion etc based on these segments. The external partner would control the value of what gets passed and we take that value as is and generate data based on it. Optional
	 * @var string
	 */
	public $ExternalPartnerSegmentID;
	/**
	 * Constructor
	 * @param string ExternalPartnerSegmentID
	 * @return PayPalTypeExternalPartnerTrackingDetailsType
	 */
	public function __construct($_ExternalPartnerSegmentID = null)
	{
		parent::__construct(array('ExternalPartnerSegmentID'=>$_ExternalPartnerSegmentID));
	}
	/**
	 * Set ExternalPartnerSegmentID
	 * @param string ExternalPartnerSegmentID
	 * @return string
	 */
	public function setExternalPartnerSegmentID($_ExternalPartnerSegmentID)
	{
		return ($this->ExternalPartnerSegmentID = $_ExternalPartnerSegmentID);
	}
	/**
	 * Get ExternalPartnerSegmentID
	 * @return string
	 */
	public function getExternalPartnerSegmentID()
	{
		return $this->ExternalPartnerSegmentID;
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