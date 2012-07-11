<?php
/**
 * Class file for XiGlobalBondMasterTypeGetBondDescriptionResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalBondMasterTypeGetBondDescriptionResponse
 * @date 08/07/2012
 */
class XiGlobalBondMasterTypeGetBondDescriptionResponse extends XiGlobalBondMasterWsdlClass
{
	/**
	 * The GetBondDescriptionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalBondMasterTypeBondDescription
	 */
	public $GetBondDescriptionResult;
	/**
	 * Constructor
	 * @param XiGlobalBondMasterTypeBondDescription GetBondDescriptionResult
	 * @return XiGlobalBondMasterTypeGetBondDescriptionResponse
	 */
	public function __construct($_GetBondDescriptionResult = null)
	{
		parent::__construct(array('GetBondDescriptionResult'=>$_GetBondDescriptionResult));
	}
	/**
	 * Set GetBondDescriptionResult
	 * @param BondDescription GetBondDescriptionResult
	 * @return BondDescription
	 */
	public function setGetBondDescriptionResult($_GetBondDescriptionResult)
	{
		return ($this->GetBondDescriptionResult = $_GetBondDescriptionResult);
	}
	/**
	 * Get GetBondDescriptionResult
	 * @return XiGlobalBondMasterTypeBondDescription
	 */
	public function getGetBondDescriptionResult()
	{
		return $this->GetBondDescriptionResult;
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