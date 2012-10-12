<?php
/**
 * Class file for ConeSearchTypeArrayOfChoice1
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeArrayOfChoice1
 * @date 13/10/2012
 */
class ConeSearchTypeArrayOfChoice1 extends ConeSearchWsdlClass
{
	/**
	 * The COOSYS
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypeCOOSYS
	 */
	public $COOSYS;
	/**
	 * The PARAM
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypePARAM
	 */
	public $PARAM;
	/**
	 * Constructor
	 * @param ConeSearchTypeCOOSYS COOSYS
	 * @param ConeSearchTypePARAM PARAM
	 * @return ConeSearchTypeArrayOfChoice1
	 */
	public function __construct($_COOSYS = null,$_PARAM = null)
	{
		parent::__construct(array('COOSYS'=>$_COOSYS,'PARAM'=>$_PARAM));
	}
	/**
	 * Set COOSYS
	 * @param COOSYS COOSYS
	 * @return COOSYS
	 */
	public function setCOOSYS($_COOSYS)
	{
		return ($this->COOSYS = $_COOSYS);
	}
	/**
	 * Get COOSYS
	 * @return ConeSearchTypeCOOSYS
	 */
	public function getCOOSYS()
	{
		return $this->COOSYS;
	}
	/**
	 * Set PARAM
	 * @param PARAM PARAM
	 * @return PARAM
	 */
	public function setPARAM($_PARAM)
	{
		return ($this->PARAM = $_PARAM);
	}
	/**
	 * Get PARAM
	 * @return ConeSearchTypePARAM
	 */
	public function getPARAM()
	{
		return $this->PARAM;
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