<?php
/**
 * Class file for XiNewsTypeGetStockHeadlinesFromClass
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeGetStockHeadlinesFromClass
 * @date 08/07/2012
 */
class XiNewsTypeGetStockHeadlinesFromClass extends XiNewsWsdlClass
{
	/**
	 * The Symbols
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNewsTypeArrayOfTicker
	 */
	public $Symbols;
	/**
	 * The HeadlineCount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $HeadlineCount;
	/**
	 * Constructor
	 * @param XiNewsTypeArrayOfTicker Symbols
	 * @param int HeadlineCount
	 * @return XiNewsTypeGetStockHeadlinesFromClass
	 */
	public function __construct($_Symbols = null,$_HeadlineCount)
	{
		parent::__construct(array('Symbols'=>new XiNewsTypeArrayOfTicker($_Symbols),'HeadlineCount'=>$_HeadlineCount));
	}
	/**
	 * Set Symbols
	 * @param ArrayOfTicker Symbols
	 * @return ArrayOfTicker
	 */
	public function setSymbols($_Symbols)
	{
		return ($this->Symbols = $_Symbols);
	}
	/**
	 * Get Symbols
	 * @return XiNewsTypeArrayOfTicker
	 */
	public function getSymbols()
	{
		return $this->Symbols;
	}
	/**
	 * Set HeadlineCount
	 * @param int HeadlineCount
	 * @return int
	 */
	public function setHeadlineCount($_HeadlineCount)
	{
		return ($this->HeadlineCount = $_HeadlineCount);
	}
	/**
	 * Get HeadlineCount
	 * @return int
	 */
	public function getHeadlineCount()
	{
		return $this->HeadlineCount;
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