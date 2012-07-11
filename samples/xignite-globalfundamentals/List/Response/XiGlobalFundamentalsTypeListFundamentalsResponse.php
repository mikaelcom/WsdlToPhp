<?php
/**
 * Class file for XiGlobalFundamentalsTypeListFundamentalsResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeListFundamentalsResponse
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeListFundamentalsResponse extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The ListFundamentalsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeArrayOfDescription
	 */
	public $ListFundamentalsResult;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeArrayOfDescription ListFundamentalsResult
	 * @return XiGlobalFundamentalsTypeListFundamentalsResponse
	 */
	public function __construct($_ListFundamentalsResult = null)
	{
		parent::__construct(array('ListFundamentalsResult'=>new XiGlobalFundamentalsTypeArrayOfDescription($_ListFundamentalsResult)));
	}
	/**
	 * Set ListFundamentalsResult
	 * @param ArrayOfDescription ListFundamentalsResult
	 * @return ArrayOfDescription
	 */
	public function setListFundamentalsResult($_ListFundamentalsResult)
	{
		return ($this->ListFundamentalsResult = $_ListFundamentalsResult);
	}
	/**
	 * Get ListFundamentalsResult
	 * @return XiGlobalFundamentalsTypeArrayOfDescription
	 */
	public function getListFundamentalsResult()
	{
		return $this->ListFundamentalsResult;
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