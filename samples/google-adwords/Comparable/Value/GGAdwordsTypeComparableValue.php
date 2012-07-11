<?php
/**
 * Class file for GGAdwordsTypeComparableValue
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeComparableValue
 * Documentation : Comparable types for constructing ranges with.
 * @date 03/07/2012
 */
class GGAdwordsTypeComparableValue extends GGAdwordsWsdlClass
{
	/**
	 * The ComparableValueType
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates that this instance is a subtype of ComparableValue. Although this field is returned in the response, it is ignored on input and cannot be selected. Specify xsi:type instead.
	 * @var string
	 */
	public $ComparableValueType;
	/**
	 * Constructor
	 * @param string ComparableValueType
	 * @return GGAdwordsTypeComparableValue
	 */
	public function __construct($_ComparableValueType = null)
	{
		parent::__construct(array('ComparableValueType'=>$_ComparableValueType));
	}
	/**
	 * Set ComparableValueType
	 * @param string ComparableValueType
	 * @return string
	 */
	public function setComparableValueType($_ComparableValueType)
	{
		return ($this->ComparableValueType = $_ComparableValueType);
	}
	/**
	 * Get ComparableValueType
	 * @return string
	 */
	public function getComparableValueType()
	{
		return $this->ComparableValueType;
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