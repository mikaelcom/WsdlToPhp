<?php
/**
 * Class file for XiFundHoldingsTypeGetIncreasedHoldersResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeGetIncreasedHoldersResponse
 * @date 08/07/2012
 */
class XiFundHoldingsTypeGetIncreasedHoldersResponse extends XiFundHoldingsWsdlClass
{
	/**
	 * The GetIncreasedHoldersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundHoldingsTypeOLSecurityHolders
	 */
	public $GetIncreasedHoldersResult;
	/**
	 * Constructor
	 * @param XiFundHoldingsTypeOLSecurityHolders GetIncreasedHoldersResult
	 * @return XiFundHoldingsTypeGetIncreasedHoldersResponse
	 */
	public function __construct($_GetIncreasedHoldersResult = null)
	{
		parent::__construct(array('GetIncreasedHoldersResult'=>$_GetIncreasedHoldersResult));
	}
	/**
	 * Set GetIncreasedHoldersResult
	 * @param OLSecurityHolders GetIncreasedHoldersResult
	 * @return OLSecurityHolders
	 */
	public function setGetIncreasedHoldersResult($_GetIncreasedHoldersResult)
	{
		return ($this->GetIncreasedHoldersResult = $_GetIncreasedHoldersResult);
	}
	/**
	 * Get GetIncreasedHoldersResult
	 * @return XiFundHoldingsTypeOLSecurityHolders
	 */
	public function getGetIncreasedHoldersResult()
	{
		return $this->GetIncreasedHoldersResult;
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