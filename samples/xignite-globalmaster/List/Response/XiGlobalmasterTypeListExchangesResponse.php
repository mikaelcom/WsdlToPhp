<?php
/**
 * Class file for XiGlobalmasterTypeListExchangesResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeListExchangesResponse
 * @date 08/07/2012
 */
class XiGlobalmasterTypeListExchangesResponse extends XiGlobalmasterWsdlClass
{
	/**
	 * The ListExchangesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypePossibleValues
	 */
	public $ListExchangesResult;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypePossibleValues ListExchangesResult
	 * @return XiGlobalmasterTypeListExchangesResponse
	 */
	public function __construct($_ListExchangesResult = null)
	{
		parent::__construct(array('ListExchangesResult'=>$_ListExchangesResult));
	}
	/**
	 * Set ListExchangesResult
	 * @param PossibleValues ListExchangesResult
	 * @return PossibleValues
	 */
	public function setListExchangesResult($_ListExchangesResult)
	{
		return ($this->ListExchangesResult = $_ListExchangesResult);
	}
	/**
	 * Get ListExchangesResult
	 * @return XiGlobalmasterTypePossibleValues
	 */
	public function getListExchangesResult()
	{
		return $this->ListExchangesResult;
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