<?php
/**
 * Class file for PayPalTypeDisplayControlDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDisplayControlDetailsType
 * Documentation : Contains elements that allows customization of display (user interface) elements.
 * @date 14/07/2012
 */
class PayPalTypeDisplayControlDetailsType extends PayPalWsdlClass
{
	/**
	 * The InContextPaymentButtonImage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Optional URL to pay button image for the inline checkout flow. Currently applicable only to the inline checkout flow when the FlowControlDetails/InlineReturnURL is present.
	 * @var string
	 */
	public $InContextPaymentButtonImage;
	/**
	 * Constructor
	 * @param string InContextPaymentButtonImage
	 * @return PayPalTypeDisplayControlDetailsType
	 */
	public function __construct($_InContextPaymentButtonImage = null)
	{
		parent::__construct(array('InContextPaymentButtonImage'=>$_InContextPaymentButtonImage));
	}
	/**
	 * Set InContextPaymentButtonImage
	 * @param string InContextPaymentButtonImage
	 * @return string
	 */
	public function setInContextPaymentButtonImage($_InContextPaymentButtonImage)
	{
		return ($this->InContextPaymentButtonImage = $_InContextPaymentButtonImage);
	}
	/**
	 * Get InContextPaymentButtonImage
	 * @return string
	 */
	public function getInContextPaymentButtonImage()
	{
		return $this->InContextPaymentButtonImage;
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