<?php
/**
 * Class file for XiMetalsTypeGetLastBasePriceResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetLastBasePriceResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetLastBasePriceResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetLastBasePriceResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeBaseMetalPrice
	 */
	public $GetLastBasePriceResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeBaseMetalPrice GetLastBasePriceResult
	 * @return XiMetalsTypeGetLastBasePriceResponse
	 */
	public function __construct($_GetLastBasePriceResult = null)
	{
		parent::__construct(array('GetLastBasePriceResult'=>$_GetLastBasePriceResult));
	}
	/**
	 * Set GetLastBasePriceResult
	 * @param BaseMetalPrice GetLastBasePriceResult
	 * @return BaseMetalPrice
	 */
	public function setGetLastBasePriceResult($_GetLastBasePriceResult)
	{
		return ($this->GetLastBasePriceResult = $_GetLastBasePriceResult);
	}
	/**
	 * Get GetLastBasePriceResult
	 * @return XiMetalsTypeBaseMetalPrice
	 */
	public function getGetLastBasePriceResult()
	{
		return $this->GetLastBasePriceResult;
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