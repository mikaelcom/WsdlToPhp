<?php
/**
 * Class file for XiInterBanksTypeGetLIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetLIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetLIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetLIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeLIBORRate
	 */
	public $GetLIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeLIBORRate GetLIBORResult
	 * @return XiInterBanksTypeGetLIBORResponse
	 */
	public function __construct($_GetLIBORResult = null)
	{
		parent::__construct(array('GetLIBORResult'=>$_GetLIBORResult));
	}
	/**
	 * Set GetLIBORResult
	 * @param LIBORRate GetLIBORResult
	 * @return LIBORRate
	 */
	public function setGetLIBORResult($_GetLIBORResult)
	{
		return ($this->GetLIBORResult = $_GetLIBORResult);
	}
	/**
	 * Get GetLIBORResult
	 * @return XiInterBanksTypeLIBORRate
	 */
	public function getGetLIBORResult()
	{
		return $this->GetLIBORResult;
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