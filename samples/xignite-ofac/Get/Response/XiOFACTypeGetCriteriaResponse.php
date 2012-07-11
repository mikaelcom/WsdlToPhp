<?php
/**
 * Class file for XiOFACTypeGetCriteriaResponse
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeGetCriteriaResponse
 * @date 08/07/2012
 */
class XiOFACTypeGetCriteriaResponse extends XiOFACWsdlClass
{
	/**
	 * The GetCriteriaResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeCriteria
	 */
	public $GetCriteriaResult;
	/**
	 * Constructor
	 * @param XiOFACTypeCriteria GetCriteriaResult
	 * @return XiOFACTypeGetCriteriaResponse
	 */
	public function __construct($_GetCriteriaResult = null)
	{
		parent::__construct(array('GetCriteriaResult'=>$_GetCriteriaResult));
	}
	/**
	 * Set GetCriteriaResult
	 * @param Criteria GetCriteriaResult
	 * @return Criteria
	 */
	public function setGetCriteriaResult($_GetCriteriaResult)
	{
		return ($this->GetCriteriaResult = $_GetCriteriaResult);
	}
	/**
	 * Get GetCriteriaResult
	 * @return XiOFACTypeCriteria
	 */
	public function getGetCriteriaResult()
	{
		return $this->GetCriteriaResult;
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