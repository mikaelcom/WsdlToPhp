<?php
/**
 * Class file for XiBATSRealTimeTypeListTradedSymbols
 * @date 08/07/2012
 */
/**
 * Class XiBATSRealTimeTypeListTradedSymbols
 * @date 08/07/2012
 */
class XiBATSRealTimeTypeListTradedSymbols extends XiBATSRealTimeWsdlClass
{
	/**
	 * The NumOfDays
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $NumOfDays;
	/**
	 * The StartSymbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartSymbol;
	/**
	 * The EndSymbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndSymbol;
	/**
	 * Constructor
	 * @param int NumOfDays
	 * @param string StartSymbol
	 * @param string EndSymbol
	 * @return XiBATSRealTimeTypeListTradedSymbols
	 */
	public function __construct($_NumOfDays,$_StartSymbol = null,$_EndSymbol = null)
	{
		parent::__construct(array('NumOfDays'=>$_NumOfDays,'StartSymbol'=>$_StartSymbol,'EndSymbol'=>$_EndSymbol));
	}
	/**
	 * Set NumOfDays
	 * @param int NumOfDays
	 * @return int
	 */
	public function setNumOfDays($_NumOfDays)
	{
		return ($this->NumOfDays = $_NumOfDays);
	}
	/**
	 * Get NumOfDays
	 * @return int
	 */
	public function getNumOfDays()
	{
		return $this->NumOfDays;
	}
	/**
	 * Set StartSymbol
	 * @param string StartSymbol
	 * @return string
	 */
	public function setStartSymbol($_StartSymbol)
	{
		return ($this->StartSymbol = $_StartSymbol);
	}
	/**
	 * Get StartSymbol
	 * @return string
	 */
	public function getStartSymbol()
	{
		return $this->StartSymbol;
	}
	/**
	 * Set EndSymbol
	 * @param string EndSymbol
	 * @return string
	 */
	public function setEndSymbol($_EndSymbol)
	{
		return ($this->EndSymbol = $_EndSymbol);
	}
	/**
	 * Get EndSymbol
	 * @return string
	 */
	public function getEndSymbol()
	{
		return $this->EndSymbol;
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