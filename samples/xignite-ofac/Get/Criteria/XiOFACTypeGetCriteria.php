<?php
/**
 * Class file for XiOFACTypeGetCriteria
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeGetCriteria
 * @date 08/07/2012
 */
class XiOFACTypeGetCriteria extends XiOFACWsdlClass
{
	/**
	 * The CriteriaType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeCriteriaTypes
	 */
	public $CriteriaType;
	/**
	 * Constructor
	 * @param XiOFACTypeCriteriaTypes CriteriaType
	 * @return XiOFACTypeGetCriteria
	 */
	public function __construct($_CriteriaType)
	{
		parent::__construct(array('CriteriaType'=>$_CriteriaType));
	}
	/**
	 * Set CriteriaType
	 * @param CriteriaTypes CriteriaType
	 * @return CriteriaTypes
	 */
	public function setCriteriaType($_CriteriaType)
	{
		return ($this->CriteriaType = XiOFACTypeCriteriaTypes::valueIsValid($_CriteriaType)?$_CriteriaType:null);
	}
	/**
	 * Get CriteriaType
	 * @return XiOFACTypeCriteriaTypes
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