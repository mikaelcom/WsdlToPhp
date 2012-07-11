<?php
/**
 * Class file for XiInterBanksTypeGetVILIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetVILIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetVILIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetVILIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeVILIBORRate
	 */
	public $GetVILIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeVILIBORRate GetVILIBORResult
	 * @return XiInterBanksTypeGetVILIBORResponse
	 */
	public function __construct($_GetVILIBORResult = null)
	{
		parent::__construct(array('GetVILIBORResult'=>$_GetVILIBORResult));
	}
	/**
	 * Set GetVILIBORResult
	 * @param VILIBORRate GetVILIBORResult
	 * @return VILIBORRate
	 */
	public function setGetVILIBORResult($_GetVILIBORResult)
	{
		return ($this->GetVILIBORResult = $_GetVILIBORResult);
	}
	/**
	 * Get GetVILIBORResult
	 * @return XiInterBanksTypeVILIBORRate
	 */
	public function getGetVILIBORResult()
	{
		return $this->GetVILIBORResult;
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