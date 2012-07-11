<?php
/**
 * Class file for XiInterBanksTypeGetCIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetCIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetCIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetCIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeCIBORRate
	 */
	public $GetCIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeCIBORRate GetCIBORResult
	 * @return XiInterBanksTypeGetCIBORResponse
	 */
	public function __construct($_GetCIBORResult = null)
	{
		parent::__construct(array('GetCIBORResult'=>$_GetCIBORResult));
	}
	/**
	 * Set GetCIBORResult
	 * @param CIBORRate GetCIBORResult
	 * @return CIBORRate
	 */
	public function setGetCIBORResult($_GetCIBORResult)
	{
		return ($this->GetCIBORResult = $_GetCIBORResult);
	}
	/**
	 * Get GetCIBORResult
	 * @return XiInterBanksTypeCIBORRate
	 */
	public function getGetCIBORResult()
	{
		return $this->GetCIBORResult;
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