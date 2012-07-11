<?php
/**
 * Class file for XiFundDataTypePortfolioTransaction
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypePortfolioTransaction
 * @date 08/07/2012
 */
class XiFundDataTypePortfolioTransaction extends XiFundDataWsdlClass
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
	 * The IRSNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IRSNumber;
	/**
	 * The Purchases
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Purchases;
	/**
	 * The Sales
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Sales;
	/**
	 * Constructor
	 * @param string Name
	 * @param string IRSNumber
	 * @param double Purchases
	 * @param double Sales
	 * @return XiFundDataTypePortfolioTransaction
	 */
	public function __construct($_Name = null,$_IRSNumber = null,$_Purchases,$_Sales)
	{
		parent::__construct(array('Name'=>$_Name,'IRSNumber'=>$_IRSNumber,'Purchases'=>$_Purchases,'Sales'=>$_Sales));
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
	 * Set IRSNumber
	 * @param string IRSNumber
	 * @return string
	 */
	public function setIRSNumber($_IRSNumber)
	{
		return ($this->IRSNumber = $_IRSNumber);
	}
	/**
	 * Get IRSNumber
	 * @return string
	 */
	public function getIRSNumber()
	{
		return $this->IRSNumber;
	}
	/**
	 * Set Purchases
	 * @param double Purchases
	 * @return double
	 */
	public function setPurchases($_Purchases)
	{
		return ($this->Purchases = $_Purchases);
	}
	/**
	 * Get Purchases
	 * @return double
	 */
	public function getPurchases()
	{
		return $this->Purchases;
	}
	/**
	 * Set Sales
	 * @param double Sales
	 * @return double
	 */
	public function setSales($_Sales)
	{
		return ($this->Sales = $_Sales);
	}
	/**
	 * Get Sales
	 * @return double
	 */
	public function getSales()
	{
		return $this->Sales;
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