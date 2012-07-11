<?php
/**
 * Class file for XiHoldingsTypeHolder
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeHolder
 * @date 08/07/2012
 */
class XiHoldingsTypeHolder extends XiHoldingsTypeCommon
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
	 * The Holding
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeHolding
	 */
	public $Holding;
	/**
	 * Constructor
	 * @param XiHoldingsTypeManager Manager
	 * @param XiHoldingsTypeFiling Filing
	 * @param XiHoldingsTypeHolding Holding
	 * @return XiHoldingsTypeHolder
	 */
	public function __construct($_Manager = null,$_Filing = null,$_Holding = null)
	{
		XiHoldingsWsdlClass::__construct(array('Manager'=>$_Manager,'Filing'=>$_Filing,'Holding'=>$_Holding));
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
	 * Set Holding
	 * @param Holding Holding
	 * @return Holding
	 */
	public function setHolding($_Holding)
	{
		return ($this->Holding = $_Holding);
	}
	/**
	 * Get Holding
	 * @return XiHoldingsTypeHolding
	 */
	public function getHolding()
	{
		return $this->Holding;
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