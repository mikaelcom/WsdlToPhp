<?php
/**
 * Class file for XiHoldingsTypeFivePercentHoldings
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeFivePercentHoldings
 * @date 08/07/2012
 */
class XiHoldingsTypeFivePercentHoldings extends XiHoldingsTypeCommon
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
	 * The Holdings
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeArrayOfFivePercentHolding
	 */
	public $Holdings;
	/**
	 * Constructor
	 * @param XiHoldingsTypeManager Manager
	 * @param XiHoldingsTypeArrayOfFivePercentHolding Holdings
	 * @return XiHoldingsTypeFivePercentHoldings
	 */
	public function __construct($_Manager = null,$_Holdings = null)
	{
		XiHoldingsWsdlClass::__construct(array('Manager'=>$_Manager,'Holdings'=>new XiHoldingsTypeArrayOfFivePercentHolding($_Holdings)));
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
	 * Set Holdings
	 * @param ArrayOfFivePercentHolding Holdings
	 * @return ArrayOfFivePercentHolding
	 */
	public function setHoldings($_Holdings)
	{
		return ($this->Holdings = $_Holdings);
	}
	/**
	 * Get Holdings
	 * @return XiHoldingsTypeArrayOfFivePercentHolding
	 */
	public function getHoldings()
	{
		return $this->Holdings;
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