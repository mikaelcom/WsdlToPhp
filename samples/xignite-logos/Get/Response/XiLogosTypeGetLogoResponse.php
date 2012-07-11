<?php
/**
 * Class file for XiLogosTypeGetLogoResponse
 * @date 08/07/2012
 */
/**
 * Class XiLogosTypeGetLogoResponse
 * @date 08/07/2012
 */
class XiLogosTypeGetLogoResponse extends XiLogosWsdlClass
{
	/**
	 * The GetLogoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiLogosTypeLogo
	 */
	public $GetLogoResult;
	/**
	 * Constructor
	 * @param XiLogosTypeLogo GetLogoResult
	 * @return XiLogosTypeGetLogoResponse
	 */
	public function __construct($_GetLogoResult = null)
	{
		parent::__construct(array('GetLogoResult'=>$_GetLogoResult));
	}
	/**
	 * Set GetLogoResult
	 * @param Logo GetLogoResult
	 * @return Logo
	 */
	public function setGetLogoResult($_GetLogoResult)
	{
		return ($this->GetLogoResult = $_GetLogoResult);
	}
	/**
	 * Get GetLogoResult
	 * @return XiLogosTypeLogo
	 */
	public function getGetLogoResult()
	{
		return $this->GetLogoResult;
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