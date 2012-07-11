<?php
/**
 * Class file for XiHistoricalTypeGetAllExtendedDividendsResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetAllExtendedDividendsResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetAllExtendedDividendsResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetAllExtendedDividendsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeExtendedDividendHistory
	 */
	public $GetAllExtendedDividendsResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeExtendedDividendHistory GetAllExtendedDividendsResult
	 * @return XiHistoricalTypeGetAllExtendedDividendsResponse
	 */
	public function __construct($_GetAllExtendedDividendsResult = null)
	{
		parent::__construct(array('GetAllExtendedDividendsResult'=>$_GetAllExtendedDividendsResult));
	}
	/**
	 * Set GetAllExtendedDividendsResult
	 * @param ExtendedDividendHistory GetAllExtendedDividendsResult
	 * @return ExtendedDividendHistory
	 */
	public function setGetAllExtendedDividendsResult($_GetAllExtendedDividendsResult)
	{
		return ($this->GetAllExtendedDividendsResult = $_GetAllExtendedDividendsResult);
	}
	/**
	 * Get GetAllExtendedDividendsResult
	 * @return XiHistoricalTypeExtendedDividendHistory
	 */
	public function getGetAllExtendedDividendsResult()
	{
		return $this->GetAllExtendedDividendsResult;
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