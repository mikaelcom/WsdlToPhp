<?php
/**
 * Class file for XiInterBanksTypeGetLatestLIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetLatestLIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetLatestLIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetLatestLIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeInterestRate
	 */
	public $GetLatestLIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeInterestRate GetLatestLIBORResult
	 * @return XiInterBanksTypeGetLatestLIBORResponse
	 */
	public function __construct($_GetLatestLIBORResult = null)
	{
		parent::__construct(array('GetLatestLIBORResult'=>$_GetLatestLIBORResult));
	}
	/**
	 * Set GetLatestLIBORResult
	 * @param InterestRate GetLatestLIBORResult
	 * @return InterestRate
	 */
	public function setGetLatestLIBORResult($_GetLatestLIBORResult)
	{
		return ($this->GetLatestLIBORResult = $_GetLatestLIBORResult);
	}
	/**
	 * Get GetLatestLIBORResult
	 * @return XiInterBanksTypeInterestRate
	 */
	public function getGetLatestLIBORResult()
	{
		return $this->GetLatestLIBORResult;
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