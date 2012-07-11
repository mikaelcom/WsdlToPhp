<?php
/**
 * Class file for XiBondMasterTypeGetBondDescriptionResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeGetBondDescriptionResponse
 * @date 08/07/2012
 */
class XiBondMasterTypeGetBondDescriptionResponse extends XiBondMasterWsdlClass
{
	/**
	 * The GetBondDescriptionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeBondDescription
	 */
	public $GetBondDescriptionResult;
	/**
	 * Constructor
	 * @param XiBondMasterTypeBondDescription GetBondDescriptionResult
	 * @return XiBondMasterTypeGetBondDescriptionResponse
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
	 * @return XiBondMasterTypeBondDescription
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