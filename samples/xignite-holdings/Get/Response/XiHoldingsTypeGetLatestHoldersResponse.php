<?php
/**
 * Class file for XiHoldingsTypeGetLatestHoldersResponse
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeGetLatestHoldersResponse
 * @date 08/07/2012
 */
class XiHoldingsTypeGetLatestHoldersResponse extends XiHoldingsWsdlClass
{
	/**
	 * The GetLatestHoldersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeSecurityHolders
	 */
	public $GetLatestHoldersResult;
	/**
	 * Constructor
	 * @param XiHoldingsTypeSecurityHolders GetLatestHoldersResult
	 * @return XiHoldingsTypeGetLatestHoldersResponse
	 */
	public function __construct($_GetLatestHoldersResult = null)
	{
		parent::__construct(array('GetLatestHoldersResult'=>$_GetLatestHoldersResult));
	}
	/**
	 * Set GetLatestHoldersResult
	 * @param SecurityHolders GetLatestHoldersResult
	 * @return SecurityHolders
	 */
	public function setGetLatestHoldersResult($_GetLatestHoldersResult)
	{
		return ($this->GetLatestHoldersResult = $_GetLatestHoldersResult);
	}
	/**
	 * Get GetLatestHoldersResult
	 * @return XiHoldingsTypeSecurityHolders
	 */
	public function getGetLatestHoldersResult()
	{
		return $this->GetLatestHoldersResult;
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