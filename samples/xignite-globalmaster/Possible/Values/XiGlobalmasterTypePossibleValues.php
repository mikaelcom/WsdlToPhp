<?php
/**
 * Class file for XiGlobalmasterTypePossibleValues
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypePossibleValues
 * @date 08/07/2012
 */
class XiGlobalmasterTypePossibleValues extends XiGlobalmasterTypeAbstractPublicWebServiceObj
{
	/**
	 * The PossibleValuesOf
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PossibleValuesOf;
	/**
	 * The Values
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfPossibleValue
	 */
	public $Values;
	/**
	 * Constructor
	 * @param string PossibleValuesOf
	 * @param XiGlobalmasterTypeArrayOfPossibleValue Values
	 * @return XiGlobalmasterTypePossibleValues
	 */
	public function __construct($_PossibleValuesOf = null,$_Values = null)
	{
		XiGlobalmasterWsdlClass::__construct(array('PossibleValuesOf'=>$_PossibleValuesOf,'Values'=>new XiGlobalmasterTypeArrayOfPossibleValue($_Values)));
	}
	/**
	 * Set PossibleValuesOf
	 * @param string PossibleValuesOf
	 * @return string
	 */
	public function setPossibleValuesOf($_PossibleValuesOf)
	{
		return ($this->PossibleValuesOf = $_PossibleValuesOf);
	}
	/**
	 * Get PossibleValuesOf
	 * @return string
	 */
	public function getPossibleValuesOf()
	{
		return $this->PossibleValuesOf;
	}
	/**
	 * Set Values
	 * @param ArrayOfPossibleValue Values
	 * @return ArrayOfPossibleValue
	 */
	public function setValues($_Values)
	{
		return ($this->Values = $_Values);
	}
	/**
	 * Get Values
	 * @return XiGlobalmasterTypeArrayOfPossibleValue
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