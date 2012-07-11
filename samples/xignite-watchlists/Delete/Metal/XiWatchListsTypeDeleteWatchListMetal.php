<?php
/**
 * Class file for XiWatchListsTypeDeleteWatchListMetal
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeDeleteWatchListMetal
 * @date 08/07/2012
 */
class XiWatchListsTypeDeleteWatchListMetal extends XiWatchListsWsdlClass
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
	 * The LondonFixing
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiWatchListsTypeLondonFixing
	 */
	public $LondonFixing;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiWatchListsTypeFixingCurrencyTypes
	 */
	public $Currency;
	/**
	 * Constructor
	 * @param string Username
	 * @param string Password
	 * @param string WatchList
	 * @param XiWatchListsTypeLondonFixing LondonFixing
	 * @param XiWatchListsTypeFixingCurrencyTypes Currency
	 * @return XiWatchListsTypeDeleteWatchListMetal
	 */
	public function __construct($_Username = null,$_Password = null,$_WatchList = null,$_LondonFixing = null,$_Currency)
	{
		parent::__construct(array('Username'=>$_Username,'Password'=>$_Password,'WatchList'=>$_WatchList,'LondonFixing'=>$_LondonFixing,'Currency'=>$_Currency));
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
	 * Set LondonFixing
	 * @param LondonFixing LondonFixing
	 * @return LondonFixing
	 */
	public function setLondonFixing($_LondonFixing)
	{
		return ($this->LondonFixing = $_LondonFixing);
	}
	/**
	 * Get LondonFixing
	 * @return XiWatchListsTypeLondonFixing
	 */
	public function getLondonFixing()
	{
		return $this->LondonFixing;
	}
	/**
	 * Set Currency
	 * @param FixingCurrencyTypes Currency
	 * @return FixingCurrencyTypes
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiWatchListsTypeFixingCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiWatchListsTypeFixingCurrencyTypes
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