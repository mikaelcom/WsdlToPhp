<?php
/**
 * Class file for XiInterBanksTypeGetVNIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetVNIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetVNIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetVNIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeVNIBORRate
	 */
	public $GetVNIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeVNIBORRate GetVNIBORResult
	 * @return XiInterBanksTypeGetVNIBORResponse
	 */
	public function __construct($_GetVNIBORResult = null)
	{
		parent::__construct(array('GetVNIBORResult'=>$_GetVNIBORResult));
	}
	/**
	 * Set GetVNIBORResult
	 * @param VNIBORRate GetVNIBORResult
	 * @return VNIBORRate
	 */
	public function setGetVNIBORResult($_GetVNIBORResult)
	{
		return ($this->GetVNIBORResult = $_GetVNIBORResult);
	}
	/**
	 * Get GetVNIBORResult
	 * @return XiInterBanksTypeVNIBORRate
	 */
	public function getGetVNIBORResult()
	{
		return $this->GetVNIBORResult;
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