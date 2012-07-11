<?php
/**
 * Class file for XiFundHoldingsTypeListFunds
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeListFunds
 * @date 08/07/2012
 */
class XiFundHoldingsTypeListFunds extends XiFundHoldingsWsdlClass
{
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
	 * @param string StartSymbol
	 * @param string EndSymbol
	 * @return XiFundHoldingsTypeListFunds
	 */
	public function __construct($_StartSymbol = null,$_EndSymbol = null)
	{
		parent::__construct(array('StartSymbol'=>$_StartSymbol,'EndSymbol'=>$_EndSymbol));
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