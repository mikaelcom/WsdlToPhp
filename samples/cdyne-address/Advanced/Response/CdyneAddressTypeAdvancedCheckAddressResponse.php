<?php
/**
 * Class file for CdyneAddressTypeAdvancedCheckAddressResponse
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressTypeAdvancedCheckAddressResponse
 * @date 02/07/2012
 */
class CdyneAddressTypeAdvancedCheckAddressResponse extends CdyneAddressWsdlClass
{
	/**
	 * The AdvancedCheckAddressResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneAddressTypeArrayOfAnyType
	 */
	public $AdvancedCheckAddressResult;
	/**
	 * Constructor
	 * @param CdyneAddressTypeArrayOfAnyType AdvancedCheckAddressResult
	 * @return CdyneAddressTypeAdvancedCheckAddressResponse
	 */
	public function __construct($_AdvancedCheckAddressResult = null)
	{
		parent::__construct(array('AdvancedCheckAddressResult'=>new CdyneAddressTypeArrayOfAnyType($_AdvancedCheckAddressResult)));
	}
	/**
	 * Set AdvancedCheckAddressResult
	 * @param ArrayOfAnyType AdvancedCheckAddressResult
	 * @return ArrayOfAnyType
	 */
	public function setAdvancedCheckAddressResult($_AdvancedCheckAddressResult)
	{
		return ($this->AdvancedCheckAddressResult = $_AdvancedCheckAddressResult);
	}
	/**
	 * Get AdvancedCheckAddressResult
	 * @return CdyneAddressTypeArrayOfAnyType
	 */
	public function getAdvancedCheckAddressResult()
	{
		return $this->AdvancedCheckAddressResult;
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