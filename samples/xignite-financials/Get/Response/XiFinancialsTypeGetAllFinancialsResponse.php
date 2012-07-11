<?php
/**
 * Class file for XiFinancialsTypeGetAllFinancialsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetAllFinancialsResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetAllFinancialsResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetAllFinancialsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeFinancials
	 */
	public $GetAllFinancialsResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeFinancials GetAllFinancialsResult
	 * @return XiFinancialsTypeGetAllFinancialsResponse
	 */
	public function __construct($_GetAllFinancialsResult = null)
	{
		parent::__construct(array('GetAllFinancialsResult'=>$_GetAllFinancialsResult));
	}
	/**
	 * Set GetAllFinancialsResult
	 * @param Financials GetAllFinancialsResult
	 * @return Financials
	 */
	public function setGetAllFinancialsResult($_GetAllFinancialsResult)
	{
		return ($this->GetAllFinancialsResult = $_GetAllFinancialsResult);
	}
	/**
	 * Get GetAllFinancialsResult
	 * @return XiFinancialsTypeFinancials
	 */
	public function getGetAllFinancialsResult()
	{
		return $this->GetAllFinancialsResult;
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