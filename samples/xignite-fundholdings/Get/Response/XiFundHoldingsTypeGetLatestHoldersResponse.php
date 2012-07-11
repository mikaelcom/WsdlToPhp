<?php
/**
 * Class file for XiFundHoldingsTypeGetLatestHoldersResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeGetLatestHoldersResponse
 * @date 08/07/2012
 */
class XiFundHoldingsTypeGetLatestHoldersResponse extends XiFundHoldingsWsdlClass
{
	/**
	 * The GetLatestHoldersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundHoldingsTypeOLSecurityHolders
	 */
	public $GetLatestHoldersResult;
	/**
	 * Constructor
	 * @param XiFundHoldingsTypeOLSecurityHolders GetLatestHoldersResult
	 * @return XiFundHoldingsTypeGetLatestHoldersResponse
	 */
	public function __construct($_GetLatestHoldersResult = null)
	{
		parent::__construct(array('GetLatestHoldersResult'=>$_GetLatestHoldersResult));
	}
	/**
	 * Set GetLatestHoldersResult
	 * @param OLSecurityHolders GetLatestHoldersResult
	 * @return OLSecurityHolders
	 */
	public function setGetLatestHoldersResult($_GetLatestHoldersResult)
	{
		return ($this->GetLatestHoldersResult = $_GetLatestHoldersResult);
	}
	/**
	 * Get GetLatestHoldersResult
	 * @return XiFundHoldingsTypeOLSecurityHolders
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