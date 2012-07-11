<?php
/**
 * Class file for SONcoaLiveTypeCASSInputAddress
 * @date 06/07/2012
 */
/**
 * Class SONcoaLiveTypeCASSInputAddress
 * @date 06/07/2012
 */
class SONcoaLiveTypeCASSInputAddress extends SONcoaLiveTypeRawInputAddress
{
	/**
	 * The USPSFootnotes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $USPSFootnotes;
	/**
	 * Constructor
	 * @param string USPSFootnotes
	 * @return SONcoaLiveTypeCASSInputAddress
	 */
	public function __construct($_USPSFootnotes = null)
	{
		SONcoaLiveWsdlClass::__construct(array('USPSFootnotes'=>$_USPSFootnotes));
	}
	/**
	 * Set USPSFootnotes
	 * @param string USPSFootnotes
	 * @return string
	 */
	public function setUSPSFootnotes($_USPSFootnotes)
	{
		return ($this->USPSFootnotes = $_USPSFootnotes);
	}
	/**
	 * Get USPSFootnotes
	 * @return string
	 */
	public function getUSPSFootnotes()
	{
		return $this->USPSFootnotes;
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