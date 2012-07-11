<?php
/**
 * Class file for SOLeadEnhancementTypeEnhanceResidentialLeadResponse
 * @date 06/07/2012
 */
/**
 * Class SOLeadEnhancementTypeEnhanceResidentialLeadResponse
 * @date 06/07/2012
 */
class SOLeadEnhancementTypeEnhanceResidentialLeadResponse extends SOLeadEnhancementWsdlClass
{
	/**
	 * The EnhanceResidentialLeadResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOLeadEnhancementTypeLead
	 */
	public $EnhanceResidentialLeadResult;
	/**
	 * Constructor
	 * @param SOLeadEnhancementTypeLead EnhanceResidentialLeadResult
	 * @return SOLeadEnhancementTypeEnhanceResidentialLeadResponse
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
	 * @return SOLeadEnhancementTypeLead
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