<?php
/**
 * Class file for CdyneAddressTypeCheckAddressW2linesResponse
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressTypeCheckAddressW2linesResponse
 * @date 02/07/2012
 */
class CdyneAddressTypeCheckAddressW2linesResponse extends CdyneAddressWsdlClass
{
	/**
	 * The CheckAddressW2linesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneAddressTypeAddress
	 */
	public $CheckAddressW2linesResult;
	/**
	 * Constructor
	 * @param CdyneAddressTypeAddress CheckAddressW2linesResult
	 * @return CdyneAddressTypeCheckAddressW2linesResponse
	 */
	public function __construct($_CheckAddressW2linesResult = null)
	{
		parent::__construct(array('CheckAddressW2linesResult'=>$_CheckAddressW2linesResult));
	}
	/**
	 * Set CheckAddressW2linesResult
	 * @param Address CheckAddressW2linesResult
	 * @return Address
	 */
	public function setCheckAddressW2linesResult($_CheckAddressW2linesResult)
	{
		return ($this->CheckAddressW2linesResult = $_CheckAddressW2linesResult);
	}
	/**
	 * Get CheckAddressW2linesResult
	 * @return CdyneAddressTypeAddress
	 */
	public function getCheckAddressW2linesResult()
	{
		return $this->CheckAddressW2linesResult;
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