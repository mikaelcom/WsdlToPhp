<?php
/**
 * Class file for XiInterBanksTypeGetMIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetMIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetMIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetMIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeMIBORRate
	 */
	public $GetMIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeMIBORRate GetMIBORResult
	 * @return XiInterBanksTypeGetMIBORResponse
	 */
	public function __construct($_GetMIBORResult = null)
	{
		parent::__construct(array('GetMIBORResult'=>$_GetMIBORResult));
	}
	/**
	 * Set GetMIBORResult
	 * @param MIBORRate GetMIBORResult
	 * @return MIBORRate
	 */
	public function setGetMIBORResult($_GetMIBORResult)
	{
		return ($this->GetMIBORResult = $_GetMIBORResult);
	}
	/**
	 * Get GetMIBORResult
	 * @return XiInterBanksTypeMIBORRate
	 */
	public function getGetMIBORResult()
	{
		return $this->GetMIBORResult;
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