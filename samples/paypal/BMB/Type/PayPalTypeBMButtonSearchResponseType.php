<?php
/**
 * Class file for PayPalTypeBMButtonSearchResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBMButtonSearchResponseType
 * @date 14/07/2012
 */
class PayPalTypeBMButtonSearchResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The ButtonSearchResult
	 * @var PayPalTypeButtonSearchResultType
	 */
	public $ButtonSearchResult;
	/**
	 * Constructor
	 * @param PayPalTypeButtonSearchResultType ButtonSearchResult
	 * @return PayPalTypeBMButtonSearchResponseType
	 */
	public function __construct($_ButtonSearchResult = null)
	{
		PayPalWsdlClass::__construct(array('ButtonSearchResult'=>$_ButtonSearchResult));
	}
	/**
	 * Set ButtonSearchResult
	 * @param ButtonSearchResultType ButtonSearchResult
	 * @return ButtonSearchResultType
	 */
	public function setButtonSearchResult($_ButtonSearchResult)
	{
		return ($this->ButtonSearchResult = $_ButtonSearchResult);
	}
	/**
	 * Get ButtonSearchResult
	 * @return PayPalTypeButtonSearchResultType
	 */
	public function getButtonSearchResult()
	{
		return $this->ButtonSearchResult;
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