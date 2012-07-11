<?php
/**
 * Class file for XiSecurityTypeGetDividendHistoriesResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeGetDividendHistoriesResponse
 * @date 08/07/2012
 */
class XiSecurityTypeGetDividendHistoriesResponse extends XiSecurityWsdlClass
{
	/**
	 * The GetDividendHistoriesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeArrayOfDividendHistory
	 */
	public $GetDividendHistoriesResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeArrayOfDividendHistory GetDividendHistoriesResult
	 * @return XiSecurityTypeGetDividendHistoriesResponse
	 */
	public function __construct($_GetDividendHistoriesResult = null)
	{
		parent::__construct(array('GetDividendHistoriesResult'=>new XiSecurityTypeArrayOfDividendHistory($_GetDividendHistoriesResult)));
	}
	/**
	 * Set GetDividendHistoriesResult
	 * @param ArrayOfDividendHistory GetDividendHistoriesResult
	 * @return ArrayOfDividendHistory
	 */
	public function setGetDividendHistoriesResult($_GetDividendHistoriesResult)
	{
		return ($this->GetDividendHistoriesResult = $_GetDividendHistoriesResult);
	}
	/**
	 * Get GetDividendHistoriesResult
	 * @return XiSecurityTypeArrayOfDividendHistory
	 */
	public function getGetDividendHistoriesResult()
	{
		return $this->GetDividendHistoriesResult;
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