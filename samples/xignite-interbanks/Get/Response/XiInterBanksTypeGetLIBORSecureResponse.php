<?php
/**
 * Class file for XiInterBanksTypeGetLIBORSecureResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetLIBORSecureResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetLIBORSecureResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetLIBORSecureResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeLIBORRate
	 */
	public $GetLIBORSecureResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeLIBORRate GetLIBORSecureResult
	 * @return XiInterBanksTypeGetLIBORSecureResponse
	 */
	public function __construct($_GetLIBORSecureResult = null)
	{
		parent::__construct(array('GetLIBORSecureResult'=>$_GetLIBORSecureResult));
	}
	/**
	 * Set GetLIBORSecureResult
	 * @param LIBORRate GetLIBORSecureResult
	 * @return LIBORRate
	 */
	public function setGetLIBORSecureResult($_GetLIBORSecureResult)
	{
		return ($this->GetLIBORSecureResult = $_GetLIBORSecureResult);
	}
	/**
	 * Get GetLIBORSecureResult
	 * @return XiInterBanksTypeLIBORRate
	 */
	public function getGetLIBORSecureResult()
	{
		return $this->GetLIBORSecureResult;
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