<?php
/**
 * Class file for XiInterBanksTypeGetBRAZIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetBRAZIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetBRAZIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetBRAZIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeBRAZIBORRate
	 */
	public $GetBRAZIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeBRAZIBORRate GetBRAZIBORResult
	 * @return XiInterBanksTypeGetBRAZIBORResponse
	 */
	public function __construct($_GetBRAZIBORResult = null)
	{
		parent::__construct(array('GetBRAZIBORResult'=>$_GetBRAZIBORResult));
	}
	/**
	 * Set GetBRAZIBORResult
	 * @param BRAZIBORRate GetBRAZIBORResult
	 * @return BRAZIBORRate
	 */
	public function setGetBRAZIBORResult($_GetBRAZIBORResult)
	{
		return ($this->GetBRAZIBORResult = $_GetBRAZIBORResult);
	}
	/**
	 * Get GetBRAZIBORResult
	 * @return XiInterBanksTypeBRAZIBORRate
	 */
	public function getGetBRAZIBORResult()
	{
		return $this->GetBRAZIBORResult;
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