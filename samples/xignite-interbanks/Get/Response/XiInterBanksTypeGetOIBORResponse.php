<?php
/**
 * Class file for XiInterBanksTypeGetOIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetOIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetOIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetOIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeOIBORRate
	 */
	public $GetOIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeOIBORRate GetOIBORResult
	 * @return XiInterBanksTypeGetOIBORResponse
	 */
	public function __construct($_GetOIBORResult = null)
	{
		parent::__construct(array('GetOIBORResult'=>$_GetOIBORResult));
	}
	/**
	 * Set GetOIBORResult
	 * @param OIBORRate GetOIBORResult
	 * @return OIBORRate
	 */
	public function setGetOIBORResult($_GetOIBORResult)
	{
		return ($this->GetOIBORResult = $_GetOIBORResult);
	}
	/**
	 * Get GetOIBORResult
	 * @return XiInterBanksTypeOIBORRate
	 */
	public function getGetOIBORResult()
	{
		return $this->GetOIBORResult;
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