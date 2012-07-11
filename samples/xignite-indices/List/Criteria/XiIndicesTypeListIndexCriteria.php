<?php
/**
 * Class file for XiIndicesTypeListIndexCriteria
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeListIndexCriteria
 * @date 08/07/2012
 */
class XiIndicesTypeListIndexCriteria extends XiIndicesWsdlClass
{
	/**
	 * The CriteriaType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeIndexCriteriaTypes
	 */
	public $CriteriaType;
	/**
	 * Constructor
	 * @param XiIndicesTypeIndexCriteriaTypes CriteriaType
	 * @return XiIndicesTypeListIndexCriteria
	 */
	public function __construct($_CriteriaType)
	{
		parent::__construct(array('CriteriaType'=>$_CriteriaType));
	}
	/**
	 * Set CriteriaType
	 * @param IndexCriteriaTypes CriteriaType
	 * @return IndexCriteriaTypes
	 */
	public function setCriteriaType($_CriteriaType)
	{
		return ($this->CriteriaType = XiIndicesTypeIndexCriteriaTypes::valueIsValid($_CriteriaType)?$_CriteriaType:null);
	}
	/**
	 * Get CriteriaType
	 * @return XiIndicesTypeIndexCriteriaTypes
	 */
	public function getCriteriaType()
	{
		return $this->CriteriaType;
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