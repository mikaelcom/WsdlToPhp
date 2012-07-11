<?php
/**
 * Class file for XiInterBanksTypeGetTURKIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetTURKIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetTURKIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetTURKIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeTURKIBORRate
	 */
	public $GetTURKIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeTURKIBORRate GetTURKIBORResult
	 * @return XiInterBanksTypeGetTURKIBORResponse
	 */
	public function __construct($_GetTURKIBORResult = null)
	{
		parent::__construct(array('GetTURKIBORResult'=>$_GetTURKIBORResult));
	}
	/**
	 * Set GetTURKIBORResult
	 * @param TURKIBORRate GetTURKIBORResult
	 * @return TURKIBORRate
	 */
	public function setGetTURKIBORResult($_GetTURKIBORResult)
	{
		return ($this->GetTURKIBORResult = $_GetTURKIBORResult);
	}
	/**
	 * Get GetTURKIBORResult
	 * @return XiInterBanksTypeTURKIBORRate
	 */
	public function getGetTURKIBORResult()
	{
		return $this->GetTURKIBORResult;
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