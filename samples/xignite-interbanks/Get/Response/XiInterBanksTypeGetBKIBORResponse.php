<?php
/**
 * Class file for XiInterBanksTypeGetBKIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetBKIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetBKIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetBKIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeBKIBORRate
	 */
	public $GetBKIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeBKIBORRate GetBKIBORResult
	 * @return XiInterBanksTypeGetBKIBORResponse
	 */
	public function __construct($_GetBKIBORResult = null)
	{
		parent::__construct(array('GetBKIBORResult'=>$_GetBKIBORResult));
	}
	/**
	 * Set GetBKIBORResult
	 * @param BKIBORRate GetBKIBORResult
	 * @return BKIBORRate
	 */
	public function setGetBKIBORResult($_GetBKIBORResult)
	{
		return ($this->GetBKIBORResult = $_GetBKIBORResult);
	}
	/**
	 * Get GetBKIBORResult
	 * @return XiInterBanksTypeBKIBORRate
	 */
	public function getGetBKIBORResult()
	{
		return $this->GetBKIBORResult;
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