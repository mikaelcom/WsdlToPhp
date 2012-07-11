<?php
/**
 * Class file for XiHistoricalTypeGetAdvancesAndDeclinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetAdvancesAndDeclinesResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetAdvancesAndDeclinesResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetAdvancesAndDeclinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeAdvancesAndDeclines
	 */
	public $GetAdvancesAndDeclinesResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeAdvancesAndDeclines GetAdvancesAndDeclinesResult
	 * @return XiHistoricalTypeGetAdvancesAndDeclinesResponse
	 */
	public function __construct($_GetAdvancesAndDeclinesResult = null)
	{
		parent::__construct(array('GetAdvancesAndDeclinesResult'=>$_GetAdvancesAndDeclinesResult));
	}
	/**
	 * Set GetAdvancesAndDeclinesResult
	 * @param AdvancesAndDeclines GetAdvancesAndDeclinesResult
	 * @return AdvancesAndDeclines
	 */
	public function setGetAdvancesAndDeclinesResult($_GetAdvancesAndDeclinesResult)
	{
		return ($this->GetAdvancesAndDeclinesResult = $_GetAdvancesAndDeclinesResult);
	}
	/**
	 * Get GetAdvancesAndDeclinesResult
	 * @return XiHistoricalTypeAdvancesAndDeclines
	 */
	public function getGetAdvancesAndDeclinesResult()
	{
		return $this->GetAdvancesAndDeclinesResult;
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