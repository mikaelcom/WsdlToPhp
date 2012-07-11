<?php
/**
 * Class file for XiInterBanksTypeGetTRLIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetTRLIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetTRLIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetTRLIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeTRLIBORRate
	 */
	public $GetTRLIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeTRLIBORRate GetTRLIBORResult
	 * @return XiInterBanksTypeGetTRLIBORResponse
	 */
	public function __construct($_GetTRLIBORResult = null)
	{
		parent::__construct(array('GetTRLIBORResult'=>$_GetTRLIBORResult));
	}
	/**
	 * Set GetTRLIBORResult
	 * @param TRLIBORRate GetTRLIBORResult
	 * @return TRLIBORRate
	 */
	public function setGetTRLIBORResult($_GetTRLIBORResult)
	{
		return ($this->GetTRLIBORResult = $_GetTRLIBORResult);
	}
	/**
	 * Get GetTRLIBORResult
	 * @return XiInterBanksTypeTRLIBORRate
	 */
	public function getGetTRLIBORResult()
	{
		return $this->GetTRLIBORResult;
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