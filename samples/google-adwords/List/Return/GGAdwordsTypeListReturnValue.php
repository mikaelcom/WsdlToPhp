<?php
/**
 * Class file for GGAdwordsTypeListReturnValue
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeListReturnValue
 * Documentation : Base list return value type.
 * @date 03/07/2012
 */
class GGAdwordsTypeListReturnValue extends GGAdwordsWsdlClass
{
	/**
	 * The ListReturnValueType
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates that this instance is a subtype of ListReturnValue. Although this field is returned in the response, it is ignored on input and cannot be selected. Specify xsi:type instead.
	 * @var string
	 */
	public $ListReturnValueType;
	/**
	 * Constructor
	 * @param string ListReturnValueType
	 * @return GGAdwordsTypeListReturnValue
	 */
	public function __construct($_ListReturnValueType = null)
	{
		parent::__construct(array('ListReturnValueType'=>$_ListReturnValueType));
	}
	/**
	 * Set ListReturnValueType
	 * @param string ListReturnValueType
	 * @return string
	 */
	public function setListReturnValueType($_ListReturnValueType)
	{
		return ($this->ListReturnValueType = $_ListReturnValueType);
	}
	/**
	 * Get ListReturnValueType
	 * @return string
	 */
	public function getListReturnValueType()
	{
		return $this->ListReturnValueType;
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