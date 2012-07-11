<?php
/**
 * Class file for XiHoldingsTypeManagerHoldings
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeManagerHoldings
 * @date 08/07/2012
 */
class XiHoldingsTypeManagerHoldings extends XiHoldingsTypeCommon
{
	/**
	 * The Manager
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeManager
	 */
	public $Manager;
	/**
	 * The Filing
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeFiling
	 */
	public $Filing;
	/**
	 * Constructor
	 * @param XiHoldingsTypeManager Manager
	 * @param XiHoldingsTypeFiling Filing
	 * @return XiHoldingsTypeManagerHoldings
	 */
	public function __construct($_Manager = null,$_Filing = null)
	{
		XiHoldingsWsdlClass::__construct(array('Manager'=>$_Manager,'Filing'=>$_Filing));
	}
	/**
	 * Set Manager
	 * @param Manager Manager
	 * @return Manager
	 */
	public function setManager($_Manager)
	{
		return ($this->Manager = $_Manager);
	}
	/**
	 * Get Manager
	 * @return XiHoldingsTypeManager
	 */
	public function getManager()
	{
		return $this->Manager;
	}
	/**
	 * Set Filing
	 * @param Filing Filing
	 * @return Filing
	 */
	public function setFiling($_Filing)
	{
		return ($this->Filing = $_Filing);
	}
	/**
	 * Get Filing
	 * @return XiHoldingsTypeFiling
	 */
	public function getFiling()
	{
		return $this->Filing;
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