<?php
/**
 * Class file for PayPalTypeDoCaptureResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoCaptureResponseType
 * @date 14/07/2012
 */
class PayPalTypeDoCaptureResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The DoCaptureResponseDetails
	 * @var PayPalTypeDoCaptureResponseDetailsType
	 */
	public $DoCaptureResponseDetails;
	/**
	 * Constructor
	 * @param PayPalTypeDoCaptureResponseDetailsType DoCaptureResponseDetails
	 * @return PayPalTypeDoCaptureResponseType
	 */
	public function __construct($_DoCaptureResponseDetails = null)
	{
		PayPalWsdlClass::__construct(array('DoCaptureResponseDetails'=>$_DoCaptureResponseDetails));
	}
	/**
	 * Set DoCaptureResponseDetails
	 * @param DoCaptureResponseDetailsType DoCaptureResponseDetails
	 * @return DoCaptureResponseDetailsType
	 */
	public function setDoCaptureResponseDetails($_DoCaptureResponseDetails)
	{
		return ($this->DoCaptureResponseDetails = $_DoCaptureResponseDetails);
	}
	/**
	 * Get DoCaptureResponseDetails
	 * @return PayPalTypeDoCaptureResponseDetailsType
	 */
	public function getDoCaptureResponseDetails()
	{
		return $this->DoCaptureResponseDetails;
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