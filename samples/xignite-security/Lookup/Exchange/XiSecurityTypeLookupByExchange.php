<?php
/**
 * Class file for XiSecurityTypeLookupByExchange
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeLookupByExchange
 * @date 08/07/2012
 */
class XiSecurityTypeLookupByExchange extends XiSecurityWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Exchange;
	/**
	 * Constructor
	 * @param string Name
	 * @param string Exchange
	 * @return XiSecurityTypeLookupByExchange
	 */
	public function __construct($_Name = null,$_Exchange = null)
	{
		parent::__construct(array('Name'=>$_Name,'Exchange'=>$_Exchange));
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
	 * Set Exchange
	 * @param string Exchange
	 * @return string
	 */
	public function setExchange($_Exchange)
	{
		return ($this->Exchange = $_Exchange);
	}
	/**
	 * Get Exchange
	 * @return string
	 */
	public function getExchange()
	{
		return $this->Exchange;
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