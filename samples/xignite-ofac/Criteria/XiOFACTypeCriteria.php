<?php
/**
 * Class file for XiOFACTypeCriteria
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeCriteria
 * @date 08/07/2012
 */
class XiOFACTypeCriteria extends XiOFACTypeCommon
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
	 * The Values
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeArrayOfString
	 */
	public $Values;
	/**
	 * Constructor
	 * @param XiOFACTypeCriteriaTypes CriteriaType
	 * @param XiOFACTypeArrayOfString Values
	 * @return XiOFACTypeCriteria
	 */
	public function __construct($_CriteriaType,$_Values = null)
	{
		XiOFACWsdlClass::__construct(array('CriteriaType'=>$_CriteriaType,'Values'=>new XiOFACTypeArrayOfString($_Values)));
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
	 * Set Values
	 * @param ArrayOfString Values
	 * @return ArrayOfString
	 */
	public function setValues($_Values)
	{
		return ($this->Values = $_Values);
	}
	/**
	 * Get Values
	 * @return XiOFACTypeArrayOfString
	 */
	public function getValues()
	{
		return $this->Values;
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