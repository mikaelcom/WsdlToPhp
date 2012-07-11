<?php
/**
 * Class file for XiInterBanksTypeGetBUBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetBUBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetBUBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetBUBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeBUBORRate
	 */
	public $GetBUBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeBUBORRate GetBUBORResult
	 * @return XiInterBanksTypeGetBUBORResponse
	 */
	public function __construct($_GetBUBORResult = null)
	{
		parent::__construct(array('GetBUBORResult'=>$_GetBUBORResult));
	}
	/**
	 * Set GetBUBORResult
	 * @param BUBORRate GetBUBORResult
	 * @return BUBORRate
	 */
	public function setGetBUBORResult($_GetBUBORResult)
	{
		return ($this->GetBUBORResult = $_GetBUBORResult);
	}
	/**
	 * Get GetBUBORResult
	 * @return XiInterBanksTypeBUBORRate
	 */
	public function getGetBUBORResult()
	{
		return $this->GetBUBORResult;
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