<?php
/**
 * Class file for XiSecurityTypeGetExtendedDividendHistoryResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeGetExtendedDividendHistoryResponse
 * @date 08/07/2012
 */
class XiSecurityTypeGetExtendedDividendHistoryResponse extends XiSecurityWsdlClass
{
	/**
	 * The GetExtendedDividendHistoryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeExtendedDividendHistory
	 */
	public $GetExtendedDividendHistoryResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeExtendedDividendHistory GetExtendedDividendHistoryResult
	 * @return XiSecurityTypeGetExtendedDividendHistoryResponse
	 */
	public function __construct($_GetExtendedDividendHistoryResult = null)
	{
		parent::__construct(array('GetExtendedDividendHistoryResult'=>$_GetExtendedDividendHistoryResult));
	}
	/**
	 * Set GetExtendedDividendHistoryResult
	 * @param ExtendedDividendHistory GetExtendedDividendHistoryResult
	 * @return ExtendedDividendHistory
	 */
	public function setGetExtendedDividendHistoryResult($_GetExtendedDividendHistoryResult)
	{
		return ($this->GetExtendedDividendHistoryResult = $_GetExtendedDividendHistoryResult);
	}
	/**
	 * Get GetExtendedDividendHistoryResult
	 * @return XiSecurityTypeExtendedDividendHistory
	 */
	public function getGetExtendedDividendHistoryResult()
	{
		return $this->GetExtendedDividendHistoryResult;
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