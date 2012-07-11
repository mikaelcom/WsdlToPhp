<?php
/**
 * Class file for XiFundsTypeGetDividendHistoryResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetDividendHistoryResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetDividendHistoryResponse extends XiFundsWsdlClass
{
	/**
	 * The GetDividendHistoryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeDividendHistory
	 */
	public $GetDividendHistoryResult;
	/**
	 * Constructor
	 * @param XiFundsTypeDividendHistory GetDividendHistoryResult
	 * @return XiFundsTypeGetDividendHistoryResponse
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
	 * @return XiFundsTypeDividendHistory
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