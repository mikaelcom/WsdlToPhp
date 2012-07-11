<?php
/**
 * Class file for XiSecurityTypeGetDividendHistoryResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeGetDividendHistoryResponse
 * @date 08/07/2012
 */
class XiSecurityTypeGetDividendHistoryResponse extends XiSecurityWsdlClass
{
	/**
	 * The GetDividendHistoryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeDividendHistory
	 */
	public $GetDividendHistoryResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeDividendHistory GetDividendHistoryResult
	 * @return XiSecurityTypeGetDividendHistoryResponse
	 */
	public function __construct($_GetDividendHistoryResult = null)
	{
		parent::__construct(array('GetDividendHistoryResult'=>$_GetDividendHistoryResult));
	}
	/**
	 * Set GetDividendHistoryResult
	 * @param DividendHistory GetDividendHistoryResult
	 * @return DividendHistory
	 */
	public function setGetDividendHistoryResult($_GetDividendHistoryResult)
	{
		return ($this->GetDividendHistoryResult = $_GetDividendHistoryResult);
	}
	/**
	 * Get GetDividendHistoryResult
	 * @return XiSecurityTypeDividendHistory
	 */
	public function getGetDividendHistoryResult()
	{
		return $this->GetDividendHistoryResult;
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