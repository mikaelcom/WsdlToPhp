<?php
/**
 * Class file for XiSecurityTypeLookupByExchanges
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeLookupByExchanges
 * @date 08/07/2012
 */
class XiSecurityTypeLookupByExchanges extends XiSecurityWsdlClass
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
	 * The Exchanges
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Exchanges;
	/**
	 * Constructor
	 * @param string Name
	 * @param string Exchanges
	 * @return XiSecurityTypeLookupByExchanges
	 */
	public function __construct($_Name = null,$_Exchanges = null)
	{
		parent::__construct(array('Name'=>$_Name,'Exchanges'=>$_Exchanges));
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
	 * Set Exchanges
	 * @param string Exchanges
	 * @return string
	 */
	public function setExchanges($_Exchanges)
	{
		return ($this->Exchanges = $_Exchanges);
	}
	/**
	 * Get Exchanges
	 * @return string
	 */
	public function getExchanges()
	{
		return $this->Exchanges;
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