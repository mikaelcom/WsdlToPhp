<?php
/**
 * Class file for XiInterBanksTypeGetWIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetWIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetWIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetWIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeWIBORRate
	 */
	public $GetWIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeWIBORRate GetWIBORResult
	 * @return XiInterBanksTypeGetWIBORResponse
	 */
	public function __construct($_GetWIBORResult = null)
	{
		parent::__construct(array('GetWIBORResult'=>$_GetWIBORResult));
	}
	/**
	 * Set GetWIBORResult
	 * @param WIBORRate GetWIBORResult
	 * @return WIBORRate
	 */
	public function setGetWIBORResult($_GetWIBORResult)
	{
		return ($this->GetWIBORResult = $_GetWIBORResult);
	}
	/**
	 * Get GetWIBORResult
	 * @return XiInterBanksTypeWIBORRate
	 */
	public function getGetWIBORResult()
	{
		return $this->GetWIBORResult;
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