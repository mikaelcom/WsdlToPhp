<?php
/**
 * Class file for XiHoldingsTypeGetHistoricalHoldersResponse
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeGetHistoricalHoldersResponse
 * @date 08/07/2012
 */
class XiHoldingsTypeGetHistoricalHoldersResponse extends XiHoldingsWsdlClass
{
	/**
	 * The GetHistoricalHoldersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeSecurityHolders
	 */
	public $GetHistoricalHoldersResult;
	/**
	 * Constructor
	 * @param XiHoldingsTypeSecurityHolders GetHistoricalHoldersResult
	 * @return XiHoldingsTypeGetHistoricalHoldersResponse
	 */
	public function __construct($_GetHistoricalHoldersResult = null)
	{
		parent::__construct(array('GetHistoricalHoldersResult'=>$_GetHistoricalHoldersResult));
	}
	/**
	 * Set GetHistoricalHoldersResult
	 * @param SecurityHolders GetHistoricalHoldersResult
	 * @return SecurityHolders
	 */
	public function setGetHistoricalHoldersResult($_GetHistoricalHoldersResult)
	{
		return ($this->GetHistoricalHoldersResult = $_GetHistoricalHoldersResult);
	}
	/**
	 * Get GetHistoricalHoldersResult
	 * @return XiHoldingsTypeSecurityHolders
	 */
	public function getGetHistoricalHoldersResult()
	{
		return $this->GetHistoricalHoldersResult;
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