<?php
/**
 * Class file for XiInterBanksTypeGetRIGIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetRIGIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetRIGIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetRIGIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeRIGIBORRate
	 */
	public $GetRIGIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRIGIBORRate GetRIGIBORResult
	 * @return XiInterBanksTypeGetRIGIBORResponse
	 */
	public function __construct($_GetRIGIBORResult = null)
	{
		parent::__construct(array('GetRIGIBORResult'=>$_GetRIGIBORResult));
	}
	/**
	 * Set GetRIGIBORResult
	 * @param RIGIBORRate GetRIGIBORResult
	 * @return RIGIBORRate
	 */
	public function setGetRIGIBORResult($_GetRIGIBORResult)
	{
		return ($this->GetRIGIBORResult = $_GetRIGIBORResult);
	}
	/**
	 * Get GetRIGIBORResult
	 * @return XiInterBanksTypeRIGIBORRate
	 */
	public function getGetRIGIBORResult()
	{
		return $this->GetRIGIBORResult;
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