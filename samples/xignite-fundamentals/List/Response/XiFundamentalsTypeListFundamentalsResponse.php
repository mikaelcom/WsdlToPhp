<?php
/**
 * Class file for XiFundamentalsTypeListFundamentalsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeListFundamentalsResponse
 * @date 08/07/2012
 */
class XiFundamentalsTypeListFundamentalsResponse extends XiFundamentalsWsdlClass
{
	/**
	 * The ListFundamentalsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeArrayOfDescription
	 */
	public $ListFundamentalsResult;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeArrayOfDescription ListFundamentalsResult
	 * @return XiFundamentalsTypeListFundamentalsResponse
	 */
	public function __construct($_ListFundamentalsResult = null)
	{
		parent::__construct(array('ListFundamentalsResult'=>new XiFundamentalsTypeArrayOfDescription($_ListFundamentalsResult)));
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
	 * @return XiFundamentalsTypeArrayOfDescription
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