<?php
/**
 * Class file for CdyneAddressTypeBarcodeFontURLResponse
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressTypeBarcodeFontURLResponse
 * @date 02/07/2012
 */
class CdyneAddressTypeBarcodeFontURLResponse extends CdyneAddressWsdlClass
{
	/**
	 * The BarcodeFontURLResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BarcodeFontURLResult;
	/**
	 * Constructor
	 * @param string BarcodeFontURLResult
	 * @return CdyneAddressTypeBarcodeFontURLResponse
	 */
	public function __construct($_BarcodeFontURLResult = null)
	{
		parent::__construct(array('BarcodeFontURLResult'=>$_BarcodeFontURLResult));
	}
	/**
	 * Set BarcodeFontURLResult
	 * @param string BarcodeFontURLResult
	 * @return string
	 */
	public function setBarcodeFontURLResult($_BarcodeFontURLResult)
	{
		return ($this->BarcodeFontURLResult = $_BarcodeFontURLResult);
	}
	/**
	 * Get BarcodeFontURLResult
	 * @return string
	 */
	public function getBarcodeFontURLResult()
	{
		return $this->BarcodeFontURLResult;
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