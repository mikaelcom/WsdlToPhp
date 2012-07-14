<?php
/**
 * Class file for PayPalTypeFlowControlDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeFlowControlDetailsType
 * Documentation : An optional set of values related to flow-specific details.
 * @date 14/07/2012
 */
class PayPalTypeFlowControlDetailsType extends PayPalWsdlClass
{
	/**
	 * The ErrorURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The URL to redirect to for an unpayable transaction. This field is currently used only for the inline checkout flow.
	 * @var string
	 */
	public $ErrorURL;
	/**
	 * The InContextReturnURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The URL to redirect to after a user clicks the "Pay" or "Continue" button on the merchant's site. This field is currently used only for the inline checkout flow.
	 * @var string
	 */
	public $InContextReturnURL;
	/**
	 * Constructor
	 * @param string ErrorURL
	 * @param string InContextReturnURL
	 * @return PayPalTypeFlowControlDetailsType
	 */
	public function __construct($_ErrorURL = null,$_InContextReturnURL = null)
	{
		parent::__construct(array('ErrorURL'=>$_ErrorURL,'InContextReturnURL'=>$_InContextReturnURL));
	}
	/**
	 * Set ErrorURL
	 * @param string ErrorURL
	 * @return string
	 */
	public function setErrorURL($_ErrorURL)
	{
		return ($this->ErrorURL = $_ErrorURL);
	}
	/**
	 * Get ErrorURL
	 * @return string
	 */
	public function getErrorURL()
	{
		return $this->ErrorURL;
	}
	/**
	 * Set InContextReturnURL
	 * @param string InContextReturnURL
	 * @return string
	 */
	public function setInContextReturnURL($_InContextReturnURL)
	{
		return ($this->InContextReturnURL = $_InContextReturnURL);
	}
	/**
	 * Get InContextReturnURL
	 * @return string
	 */
	public function getInContextReturnURL()
	{
		return $this->InContextReturnURL;
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