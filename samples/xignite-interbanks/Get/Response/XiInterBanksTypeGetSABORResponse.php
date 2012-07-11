<?php
/**
 * Class file for XiInterBanksTypeGetSABORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetSABORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetSABORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetSABORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeSABORRate
	 */
	public $GetSABORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeSABORRate GetSABORResult
	 * @return XiInterBanksTypeGetSABORResponse
	 */
	public function __construct($_GetSABORResult = null)
	{
		parent::__construct(array('GetSABORResult'=>$_GetSABORResult));
	}
	/**
	 * Set GetSABORResult
	 * @param SABORRate GetSABORResult
	 * @return SABORRate
	 */
	public function setGetSABORResult($_GetSABORResult)
	{
		return ($this->GetSABORResult = $_GetSABORResult);
	}
	/**
	 * Get GetSABORResult
	 * @return XiInterBanksTypeSABORRate
	 */
	public function getGetSABORResult()
	{
		return $this->GetSABORResult;
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