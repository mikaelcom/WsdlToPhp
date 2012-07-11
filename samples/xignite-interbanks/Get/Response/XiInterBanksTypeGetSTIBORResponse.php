<?php
/**
 * Class file for XiInterBanksTypeGetSTIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetSTIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetSTIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetSTIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeSTIBORRate
	 */
	public $GetSTIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeSTIBORRate GetSTIBORResult
	 * @return XiInterBanksTypeGetSTIBORResponse
	 */
	public function __construct($_GetSTIBORResult = null)
	{
		parent::__construct(array('GetSTIBORResult'=>$_GetSTIBORResult));
	}
	/**
	 * Set GetSTIBORResult
	 * @param STIBORRate GetSTIBORResult
	 * @return STIBORRate
	 */
	public function setGetSTIBORResult($_GetSTIBORResult)
	{
		return ($this->GetSTIBORResult = $_GetSTIBORResult);
	}
	/**
	 * Get GetSTIBORResult
	 * @return XiInterBanksTypeSTIBORRate
	 */
	public function getGetSTIBORResult()
	{
		return $this->GetSTIBORResult;
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