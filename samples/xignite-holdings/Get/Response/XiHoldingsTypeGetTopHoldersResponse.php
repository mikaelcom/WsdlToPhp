<?php
/**
 * Class file for XiHoldingsTypeGetTopHoldersResponse
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeGetTopHoldersResponse
 * @date 08/07/2012
 */
class XiHoldingsTypeGetTopHoldersResponse extends XiHoldingsWsdlClass
{
	/**
	 * The GetTopHoldersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeSecurityHolders
	 */
	public $GetTopHoldersResult;
	/**
	 * Constructor
	 * @param XiHoldingsTypeSecurityHolders GetTopHoldersResult
	 * @return XiHoldingsTypeGetTopHoldersResponse
	 */
	public function __construct($_GetTopHoldersResult = null)
	{
		parent::__construct(array('GetTopHoldersResult'=>$_GetTopHoldersResult));
	}
	/**
	 * Set GetTopHoldersResult
	 * @param SecurityHolders GetTopHoldersResult
	 * @return SecurityHolders
	 */
	public function setGetTopHoldersResult($_GetTopHoldersResult)
	{
		return ($this->GetTopHoldersResult = $_GetTopHoldersResult);
	}
	/**
	 * Get GetTopHoldersResult
	 * @return XiHoldingsTypeSecurityHolders
	 */
	public function getGetTopHoldersResult()
	{
		return $this->GetTopHoldersResult;
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