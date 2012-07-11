<?php
/**
 * Class file for XiHistoricalTypeGetAllDividendsResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetAllDividendsResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetAllDividendsResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetAllDividendsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeArrayOfSplitHistory
	 */
	public $GetAllDividendsResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeArrayOfSplitHistory GetAllDividendsResult
	 * @return XiHistoricalTypeGetAllDividendsResponse
	 */
	public function __construct($_GetAllDividendsResult = null)
	{
		parent::__construct(array('GetAllDividendsResult'=>new XiHistoricalTypeArrayOfSplitHistory($_GetAllDividendsResult)));
	}
	/**
	 * Set GetAllDividendsResult
	 * @param ArrayOfSplitHistory GetAllDividendsResult
	 * @return ArrayOfSplitHistory
	 */
	public function setGetAllDividendsResult($_GetAllDividendsResult)
	{
		return ($this->GetAllDividendsResult = $_GetAllDividendsResult);
	}
	/**
	 * Get GetAllDividendsResult
	 * @return XiHistoricalTypeArrayOfSplitHistory
	 */
	public function getGetAllDividendsResult()
	{
		return $this->GetAllDividendsResult;
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