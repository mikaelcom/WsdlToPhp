<?php
/**
 * Class file for XiHistoricalTypeGetAllSplitsResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetAllSplitsResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetAllSplitsResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetAllSplitsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeArrayOfSplitHistory
	 */
	public $GetAllSplitsResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeArrayOfSplitHistory GetAllSplitsResult
	 * @return XiHistoricalTypeGetAllSplitsResponse
	 */
	public function __construct($_GetAllSplitsResult = null)
	{
		parent::__construct(array('GetAllSplitsResult'=>new XiHistoricalTypeArrayOfSplitHistory($_GetAllSplitsResult)));
	}
	/**
	 * Set GetAllSplitsResult
	 * @param ArrayOfSplitHistory GetAllSplitsResult
	 * @return ArrayOfSplitHistory
	 */
	public function setGetAllSplitsResult($_GetAllSplitsResult)
	{
		return ($this->GetAllSplitsResult = $_GetAllSplitsResult);
	}
	/**
	 * Get GetAllSplitsResult
	 * @return XiHistoricalTypeArrayOfSplitHistory
	 */
	public function getGetAllSplitsResult()
	{
		return $this->GetAllSplitsResult;
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