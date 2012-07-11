<?php
/**
 * Class file for XiEarningsCalendarTypeSymbol
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeSymbol
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeSymbol extends XiEarningsCalendarWsdlClass
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Issue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Issue;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string Name
	 * @param string Issue
	 * @return XiEarningsCalendarTypeSymbol
	 */
	public function __construct($_Symbol = null,$_Name = null,$_Issue = null)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'Name'=>$_Name,'Issue'=>$_Issue));
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Issue
	 * @param string Issue
	 * @return string
	 */
	public function setIssue($_Issue)
	{
		return ($this->Issue = $_Issue);
	}
	/**
	 * Get Issue
	 * @return string
	 */
	public function getIssue()
	{
		return $this->Issue;
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