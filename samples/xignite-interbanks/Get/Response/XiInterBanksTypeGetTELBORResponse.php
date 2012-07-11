<?php
/**
 * Class file for XiInterBanksTypeGetTELBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetTELBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetTELBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetTELBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeTELBORRate
	 */
	public $GetTELBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeTELBORRate GetTELBORResult
	 * @return XiInterBanksTypeGetTELBORResponse
	 */
	public function __construct($_GetTELBORResult = null)
	{
		parent::__construct(array('GetTELBORResult'=>$_GetTELBORResult));
	}
	/**
	 * Set GetTELBORResult
	 * @param TELBORRate GetTELBORResult
	 * @return TELBORRate
	 */
	public function setGetTELBORResult($_GetTELBORResult)
	{
		return ($this->GetTELBORResult = $_GetTELBORResult);
	}
	/**
	 * Get GetTELBORResult
	 * @return XiInterBanksTypeTELBORRate
	 */
	public function getGetTELBORResult()
	{
		return $this->GetTELBORResult;
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