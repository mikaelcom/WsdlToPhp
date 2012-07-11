<?php
/**
 * Class file for XiInterBanksTypeGetREIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetREIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetREIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetREIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeREIBORRate
	 */
	public $GetREIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeREIBORRate GetREIBORResult
	 * @return XiInterBanksTypeGetREIBORResponse
	 */
	public function __construct($_GetREIBORResult = null)
	{
		parent::__construct(array('GetREIBORResult'=>$_GetREIBORResult));
	}
	/**
	 * Set GetREIBORResult
	 * @param REIBORRate GetREIBORResult
	 * @return REIBORRate
	 */
	public function setGetREIBORResult($_GetREIBORResult)
	{
		return ($this->GetREIBORResult = $_GetREIBORResult);
	}
	/**
	 * Get GetREIBORResult
	 * @return XiInterBanksTypeREIBORRate
	 */
	public function getGetREIBORResult()
	{
		return $this->GetREIBORResult;
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