<?php
/**
 * Class file for XiInterBanksTypeGetTALIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetTALIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetTALIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetTALIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeTALIBORRate
	 */
	public $GetTALIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeTALIBORRate GetTALIBORResult
	 * @return XiInterBanksTypeGetTALIBORResponse
	 */
	public function __construct($_GetTALIBORResult = null)
	{
		parent::__construct(array('GetTALIBORResult'=>$_GetTALIBORResult));
	}
	/**
	 * Set GetTALIBORResult
	 * @param TALIBORRate GetTALIBORResult
	 * @return TALIBORRate
	 */
	public function setGetTALIBORResult($_GetTALIBORResult)
	{
		return ($this->GetTALIBORResult = $_GetTALIBORResult);
	}
	/**
	 * Get GetTALIBORResult
	 * @return XiInterBanksTypeTALIBORRate
	 */
	public function getGetTALIBORResult()
	{
		return $this->GetTALIBORResult;
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