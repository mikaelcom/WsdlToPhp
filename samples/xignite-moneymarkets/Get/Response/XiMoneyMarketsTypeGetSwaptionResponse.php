<?php
/**
 * Class file for XiMoneyMarketsTypeGetSwaptionResponse
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeGetSwaptionResponse
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeGetSwaptionResponse extends XiMoneyMarketsWsdlClass
{
	/**
	 * The GetSwaptionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeSwaption
	 */
	public $GetSwaptionResult;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeSwaption GetSwaptionResult
	 * @return XiMoneyMarketsTypeGetSwaptionResponse
	 */
	public function __construct($_GetSwaptionResult = null)
	{
		parent::__construct(array('GetSwaptionResult'=>$_GetSwaptionResult));
	}
	/**
	 * Set GetSwaptionResult
	 * @param Swaption GetSwaptionResult
	 * @return Swaption
	 */
	public function setGetSwaptionResult($_GetSwaptionResult)
	{
		return ($this->GetSwaptionResult = $_GetSwaptionResult);
	}
	/**
	 * Get GetSwaptionResult
	 * @return XiMoneyMarketsTypeSwaption
	 */
	public function getGetSwaptionResult()
	{
		return $this->GetSwaptionResult;
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