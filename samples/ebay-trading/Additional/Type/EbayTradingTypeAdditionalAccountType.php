<?php
/**
 * Class file for EbayTradingTypeAdditionalAccountType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAdditionalAccountType
 * Documentation : Contains the data for one additional account. An additional account is created when the user has an active account and changes country of registry (i.e., registers with the eBay site for the new country). A new account is created and the old account becomes inactive as an additional account. A user who never changes country of residency while having an account will never have any additional accounts.
 * @date 04/07/2012
 */
class EbayTradingTypeAdditionalAccountType extends EbayTradingWsdlClass
{
	/**
	 * The Balance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the current balance of the additional account.
	 * @var EbayTradingTypeAmountType
	 */
	public $Balance;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the currency in which monetary amounts for the additional account are expressed.
	 * @var EbayTradingTypeCurrencyCodeType
	 */
	public $Currency;
	/**
	 * The AccountCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the unique identifier for the additional account (the account ID).
	 * @var string
	 */
	public $AccountCode;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeAmountType Balance
	 * @param EbayTradingTypeCurrencyCodeType Currency
	 * @param string AccountCode
	 * @param DOMDocument any
	 * @return EbayTradingTypeAdditionalAccountType
	 */
	public function __construct($_Balance = null,$_Currency = null,$_AccountCode = null,$_any = null)
	{
		parent::__construct(array('Balance'=>$_Balance,'Currency'=>$_Currency,'AccountCode'=>$_AccountCode,'any'=>$_any));
	}
	/**
	 * Set Balance
	 * @param AmountType Balance
	 * @return AmountType
	 */
	public function setBalance($_Balance)
	{
		return ($this->Balance = $_Balance);
	}
	/**
	 * Get Balance
	 * @return EbayTradingTypeAmountType
	 */
	public function getBalance()
	{
		return $this->Balance;
	}
	/**
	 * Set Currency
	 * @param CurrencyCodeType Currency
	 * @return CurrencyCodeType
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = EbayTradingTypeCurrencyCodeType::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return EbayTradingTypeCurrencyCodeType
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set AccountCode
	 * @param string AccountCode
	 * @return string
	 */
	public function setAccountCode($_AccountCode)
	{
		return ($this->AccountCode = $_AccountCode);
	}
	/**
	 * Get AccountCode
	 * @return string
	 */
	public function getAccountCode()
	{
		return $this->AccountCode;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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