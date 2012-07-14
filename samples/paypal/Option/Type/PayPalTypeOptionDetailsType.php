<?php
/**
 * Class file for PayPalTypeOptionDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeOptionDetailsType
 * @date 14/07/2012
 */
class PayPalTypeOptionDetailsType extends PayPalWsdlClass
{
	/**
	 * The OptionName
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Option Name. Optional
	 * @var string
	 */
	public $OptionName;
	/**
	 * The OptionSelectionDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 100
	 * @var PayPalTypeOptionSelectionDetailsType
	 */
	public $OptionSelectionDetails;
	/**
	 * Constructor
	 * @param string OptionName
	 * @param PayPalTypeOptionSelectionDetailsType OptionSelectionDetails
	 * @return PayPalTypeOptionDetailsType
	 */
	public function __construct($_OptionName,$_OptionSelectionDetails = null)
	{
		parent::__construct(array('OptionName'=>$_OptionName,'OptionSelectionDetails'=>$_OptionSelectionDetails));
	}
	/**
	 * Set OptionName
	 * @param string OptionName
	 * @return string
	 */
	public function setOptionName($_OptionName)
	{
		return ($this->OptionName = $_OptionName);
	}
	/**
	 * Get OptionName
	 * @return string
	 */
	public function getOptionName()
	{
		return $this->OptionName;
	}
	/**
	 * Set OptionSelectionDetails
	 * @param OptionSelectionDetailsType OptionSelectionDetails
	 * @return OptionSelectionDetailsType
	 */
	public function setOptionSelectionDetails($_OptionSelectionDetails)
	{
		return ($this->OptionSelectionDetails = $_OptionSelectionDetails);
	}
	/**
	 * Get OptionSelectionDetails
	 * @return PayPalTypeOptionSelectionDetailsType
	 */
	public function getOptionSelectionDetails()
	{
		return $this->OptionSelectionDetails;
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