<?php
/**
 * Class file for PayPalTypeBAUpdateResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBAUpdateResponseType
 * @date 14/07/2012
 */
class PayPalTypeBAUpdateResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The BAUpdateResponseDetails
	 * @var PayPalTypeBAUpdateResponseDetailsType
	 */
	public $BAUpdateResponseDetails;
	/**
	 * Constructor
	 * @param PayPalTypeBAUpdateResponseDetailsType BAUpdateResponseDetails
	 * @return PayPalTypeBAUpdateResponseType
	 */
	public function __construct($_BAUpdateResponseDetails = null)
	{
		PayPalWsdlClass::__construct(array('BAUpdateResponseDetails'=>$_BAUpdateResponseDetails));
	}
	/**
	 * Set BAUpdateResponseDetails
	 * @param BAUpdateResponseDetailsType BAUpdateResponseDetails
	 * @return BAUpdateResponseDetailsType
	 */
	public function setBAUpdateResponseDetails($_BAUpdateResponseDetails)
	{
		return ($this->BAUpdateResponseDetails = $_BAUpdateResponseDetails);
	}
	/**
	 * Get BAUpdateResponseDetails
	 * @return PayPalTypeBAUpdateResponseDetailsType
	 */
	public function getBAUpdateResponseDetails()
	{
		return $this->BAUpdateResponseDetails;
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