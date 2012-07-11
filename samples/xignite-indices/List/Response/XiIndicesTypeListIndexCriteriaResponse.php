<?php
/**
 * Class file for XiIndicesTypeListIndexCriteriaResponse
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeListIndexCriteriaResponse
 * @date 08/07/2012
 */
class XiIndicesTypeListIndexCriteriaResponse extends XiIndicesWsdlClass
{
	/**
	 * The ListIndexCriteriaResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeArrayOfCriteria
	 */
	public $ListIndexCriteriaResult;
	/**
	 * Constructor
	 * @param XiIndicesTypeArrayOfCriteria ListIndexCriteriaResult
	 * @return XiIndicesTypeListIndexCriteriaResponse
	 */
	public function __construct($_ListIndexCriteriaResult = null)
	{
		parent::__construct(array('ListIndexCriteriaResult'=>new XiIndicesTypeArrayOfCriteria($_ListIndexCriteriaResult)));
	}
	/**
	 * Set ListIndexCriteriaResult
	 * @param ArrayOfCriteria ListIndexCriteriaResult
	 * @return ArrayOfCriteria
	 */
	public function setListIndexCriteriaResult($_ListIndexCriteriaResult)
	{
		return ($this->ListIndexCriteriaResult = $_ListIndexCriteriaResult);
	}
	/**
	 * Get ListIndexCriteriaResult
	 * @return XiIndicesTypeArrayOfCriteria
	 */
	public function getListIndexCriteriaResult()
	{
		return $this->ListIndexCriteriaResult;
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