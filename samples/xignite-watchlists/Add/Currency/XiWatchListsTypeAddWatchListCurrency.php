<?php
/**
 * Class file for XiWatchListsTypeAddWatchListCurrency
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeAddWatchListCurrency
 * @date 08/07/2012
 */
class XiWatchListsTypeAddWatchListCurrency extends XiWatchListsWsdlClass
{
	/**
	 * The Username
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Username;
	/**
	 * The Password
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Password;
	/**
	 * The WatchList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $WatchList;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiWatchListsTypeCurrencies
	 */
	public $Currency;
	/**
	 * Constructor
	 * @param string Username
	 * @param string Password
	 * @param string WatchList
	 * @param XiWatchListsTypeCurrencies Currency
	 * @return XiWatchListsTypeAddWatchListCurrency
	 */
	public function __construct($_Username = null,$_Password = null,$_WatchList = null,$_Currency)
	{
		parent::__construct(array('Username'=>$_Username,'Password'=>$_Password,'WatchList'=>$_WatchList,'Currency'=>$_Currency));
	}
	/**
	 * Set Username
	 * @param string Username
	 * @return string
	 */
	public function setUsername($_Username)
	{
		return ($this->Username = $_Username);
	}
	/**
	 * Get Username
	 * @return string
	 */
	public function getUsername()
	{
		return $this->Username;
	}
	/**
	 * Set Password
	 * @param string Password
	 * @return string
	 */
	public function setPassword($_Password)
	{
		return ($this->Password = $_Password);
	}
	/**
	 * Get Password
	 * @return string
	 */
	public function getPassword()
	{
		return $this->Password;
	}
	/**
	 * Set WatchList
	 * @param string WatchList
	 * @return string
	 */
	public function setWatchList($_WatchList)
	{
		return ($this->WatchList = $_WatchList);
	}
	/**
	 * Get WatchList
	 * @return string
	 */
	public function getWatchList()
	{
		return $this->WatchList;
	}
	/**
	 * Set Currency
	 * @param Currencies Currency
	 * @return Currencies
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiWatchListsTypeCurrencies::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiWatchListsTypeCurrencies
	 */
	public function getCurrency()
	{
		return $this->Currency;
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