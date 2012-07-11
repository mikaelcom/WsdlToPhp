<?php
/**
 * Class file for XiFundHoldingsTypeGetTopHoldersResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeGetTopHoldersResponse
 * @date 08/07/2012
 */
class XiFundHoldingsTypeGetTopHoldersResponse extends XiFundHoldingsWsdlClass
{
	/**
	 * The GetTopHoldersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundHoldingsTypeOLSecurityHolders
	 */
	public $GetTopHoldersResult;
	/**
	 * Constructor
	 * @param XiFundHoldingsTypeOLSecurityHolders GetTopHoldersResult
	 * @return XiFundHoldingsTypeGetTopHoldersResponse
	 */
	public function __construct($_GetTopHoldersResult = null)
	{
		parent::__construct(array('GetTopHoldersResult'=>$_GetTopHoldersResult));
	}
	/**
	 * Set GetTopHoldersResult
	 * @param OLSecurityHolders GetTopHoldersResult
	 * @return OLSecurityHolders
	 */
	public function setGetTopHoldersResult($_GetTopHoldersResult)
	{
		return ($this->GetTopHoldersResult = $_GetTopHoldersResult);
	}
	/**
	 * Get GetTopHoldersResult
	 * @return XiFundHoldingsTypeOLSecurityHolders
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