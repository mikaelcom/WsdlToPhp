<?php
/**
 * Class file for CdyneAddressTypeAdvancedStandardizationResponse
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressTypeAdvancedStandardizationResponse
 * @date 02/07/2012
 */
class CdyneAddressTypeAdvancedStandardizationResponse extends CdyneAddressWsdlClass
{
	/**
	 * The AdvancedStandardizationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneAddressTypeArrayOfAnyType
	 */
	public $AdvancedStandardizationResult;
	/**
	 * Constructor
	 * @param CdyneAddressTypeArrayOfAnyType AdvancedStandardizationResult
	 * @return CdyneAddressTypeAdvancedStandardizationResponse
	 */
	public function __construct($_AdvancedStandardizationResult = null)
	{
		parent::__construct(array('AdvancedStandardizationResult'=>new CdyneAddressTypeArrayOfAnyType($_AdvancedStandardizationResult)));
	}
	/**
	 * Set AdvancedStandardizationResult
	 * @param ArrayOfAnyType AdvancedStandardizationResult
	 * @return ArrayOfAnyType
	 */
	public function setAdvancedStandardizationResult($_AdvancedStandardizationResult)
	{
		return ($this->AdvancedStandardizationResult = $_AdvancedStandardizationResult);
	}
	/**
	 * Get AdvancedStandardizationResult
	 * @return CdyneAddressTypeArrayOfAnyType
	 */
	public function getAdvancedStandardizationResult()
	{
		return $this->AdvancedStandardizationResult;
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