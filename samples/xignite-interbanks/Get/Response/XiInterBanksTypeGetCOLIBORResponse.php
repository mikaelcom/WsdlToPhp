<?php
/**
 * Class file for XiInterBanksTypeGetCOLIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetCOLIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetCOLIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetCOLIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeCOLIBORRate
	 */
	public $GetCOLIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeCOLIBORRate GetCOLIBORResult
	 * @return XiInterBanksTypeGetCOLIBORResponse
	 */
	public function __construct($_GetCOLIBORResult = null)
	{
		parent::__construct(array('GetCOLIBORResult'=>$_GetCOLIBORResult));
	}
	/**
	 * Set GetCOLIBORResult
	 * @param COLIBORRate GetCOLIBORResult
	 * @return COLIBORRate
	 */
	public function setGetCOLIBORResult($_GetCOLIBORResult)
	{
		return ($this->GetCOLIBORResult = $_GetCOLIBORResult);
	}
	/**
	 * Get GetCOLIBORResult
	 * @return XiInterBanksTypeCOLIBORRate
	 */
	public function getGetCOLIBORResult()
	{
		return $this->GetCOLIBORResult;
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