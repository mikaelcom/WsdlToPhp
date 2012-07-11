<?php
/**
 * Class file for XiInterBanksTypeGetMOSIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetMOSIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetMOSIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetMOSIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeMOSIBORRate
	 */
	public $GetMOSIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeMOSIBORRate GetMOSIBORResult
	 * @return XiInterBanksTypeGetMOSIBORResponse
	 */
	public function __construct($_GetMOSIBORResult = null)
	{
		parent::__construct(array('GetMOSIBORResult'=>$_GetMOSIBORResult));
	}
	/**
	 * Set GetMOSIBORResult
	 * @param MOSIBORRate GetMOSIBORResult
	 * @return MOSIBORRate
	 */
	public function setGetMOSIBORResult($_GetMOSIBORResult)
	{
		return ($this->GetMOSIBORResult = $_GetMOSIBORResult);
	}
	/**
	 * Get GetMOSIBORResult
	 * @return XiInterBanksTypeMOSIBORRate
	 */
	public function getGetMOSIBORResult()
	{
		return $this->GetMOSIBORResult;
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