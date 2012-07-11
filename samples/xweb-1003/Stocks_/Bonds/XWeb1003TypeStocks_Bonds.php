<?php
/**
 * Class file for XWeb1003TypeStocks_Bonds
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeStocks_Bonds
 * @date 09/07/2012
 */
class XWeb1003TypeStocks_Bonds extends XWeb1003WsdlClass
{
	/**
	 * The Account
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 3
	 * @var XWeb1003TypeStocksBondsAccountType
	 */
	public $Account;
	/**
	 * Constructor
	 * @param XWeb1003TypeStocksBondsAccountType Account
	 * @return XWeb1003TypeStocks_Bonds
	 */
	public function __construct($_Account = null)
	{
		parent::__construct(array('Account'=>$_Account));
	}
	/**
	 * Set Account
	 * @param StocksBondsAccountType Account
	 * @return StocksBondsAccountType
	 */
	public function setAccount($_Account)
	{
		return ($this->Account = $_Account);
	}
	/**
	 * Get Account
	 * @return XWeb1003TypeStocksBondsAccountType
	 */
	public function getAccount()
	{
		return $this->Account;
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