<?php
/**
 * Class file for XiInterBanksTypeGetEURIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetEURIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetEURIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetEURIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeEURIBORRate
	 */
	public $GetEURIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeEURIBORRate GetEURIBORResult
	 * @return XiInterBanksTypeGetEURIBORResponse
	 */
	public function __construct($_GetEURIBORResult = null)
	{
		parent::__construct(array('GetEURIBORResult'=>$_GetEURIBORResult));
	}
	/**
	 * Set GetEURIBORResult
	 * @param EURIBORRate GetEURIBORResult
	 * @return EURIBORRate
	 */
	public function setGetEURIBORResult($_GetEURIBORResult)
	{
		return ($this->GetEURIBORResult = $_GetEURIBORResult);
	}
	/**
	 * Get GetEURIBORResult
	 * @return XiInterBanksTypeEURIBORRate
	 */
	public function getGetEURIBORResult()
	{
		return $this->GetEURIBORResult;
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