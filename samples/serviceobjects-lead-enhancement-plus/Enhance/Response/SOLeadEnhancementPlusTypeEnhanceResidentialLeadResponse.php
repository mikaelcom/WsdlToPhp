<?php
/**
 * Class file for SOLeadEnhancementPlusTypeEnhanceResidentialLeadResponse
 * @date 06/07/2012
 */
/**
 * Class SOLeadEnhancementPlusTypeEnhanceResidentialLeadResponse
 * @date 06/07/2012
 */
class SOLeadEnhancementPlusTypeEnhanceResidentialLeadResponse extends SOLeadEnhancementPlusWsdlClass
{
	/**
	 * The EnhanceResidentialLeadResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOLeadEnhancementPlusTypeLead
	 */
	public $EnhanceResidentialLeadResult;
	/**
	 * Constructor
	 * @param SOLeadEnhancementPlusTypeLead EnhanceResidentialLeadResult
	 * @return SOLeadEnhancementPlusTypeEnhanceResidentialLeadResponse
	 */
	public function __construct($_EnhanceResidentialLeadResult = null)
	{
		parent::__construct(array('EnhanceResidentialLeadResult'=>$_EnhanceResidentialLeadResult));
	}
	/**
	 * Set EnhanceResidentialLeadResult
	 * @param Lead EnhanceResidentialLeadResult
	 * @return Lead
	 */
	public function setEnhanceResidentialLeadResult($_EnhanceResidentialLeadResult)
	{
		return ($this->EnhanceResidentialLeadResult = $_EnhanceResidentialLeadResult);
	}
	/**
	 * Get EnhanceResidentialLeadResult
	 * @return SOLeadEnhancementPlusTypeLead
	 */
	public function getEnhanceResidentialLeadResult()
	{
		return $this->EnhanceResidentialLeadResult;
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