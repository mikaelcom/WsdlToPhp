<?php
/**
 * Class file for XiGlobalmasterTypeListIndustriesResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeListIndustriesResponse
 * @date 08/07/2012
 */
class XiGlobalmasterTypeListIndustriesResponse extends XiGlobalmasterWsdlClass
{
	/**
	 * The ListIndustriesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypePossibleValues
	 */
	public $ListIndustriesResult;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypePossibleValues ListIndustriesResult
	 * @return XiGlobalmasterTypeListIndustriesResponse
	 */
	public function __construct($_ListIndustriesResult = null)
	{
		parent::__construct(array('ListIndustriesResult'=>$_ListIndustriesResult));
	}
	/**
	 * Set ListIndustriesResult
	 * @param PossibleValues ListIndustriesResult
	 * @return PossibleValues
	 */
	public function setListIndustriesResult($_ListIndustriesResult)
	{
		return ($this->ListIndustriesResult = $_ListIndustriesResult);
	}
	/**
	 * Get ListIndustriesResult
	 * @return XiGlobalmasterTypePossibleValues
	 */
	public function getListIndustriesResult()
	{
		return $this->ListIndustriesResult;
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