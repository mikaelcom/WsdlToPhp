<?php
/**
 * Class file for XiScreenerTypeListCriteriaResponse
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeListCriteriaResponse
 * @date 08/07/2012
 */
class XiScreenerTypeListCriteriaResponse extends XiScreenerWsdlClass
{
	/**
	 * The ListCriteriaResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeCriteriaList
	 */
	public $ListCriteriaResult;
	/**
	 * Constructor
	 * @param XiScreenerTypeCriteriaList ListCriteriaResult
	 * @return XiScreenerTypeListCriteriaResponse
	 */
	public function __construct($_ListCriteriaResult = null)
	{
		parent::__construct(array('ListCriteriaResult'=>$_ListCriteriaResult));
	}
	/**
	 * Set ListCriteriaResult
	 * @param CriteriaList ListCriteriaResult
	 * @return CriteriaList
	 */
	public function setListCriteriaResult($_ListCriteriaResult)
	{
		return ($this->ListCriteriaResult = $_ListCriteriaResult);
	}
	/**
	 * Get ListCriteriaResult
	 * @return XiScreenerTypeCriteriaList
	 */
	public function getListCriteriaResult()
	{
		return $this->ListCriteriaResult;
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