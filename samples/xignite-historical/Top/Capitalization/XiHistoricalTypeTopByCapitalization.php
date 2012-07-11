<?php
/**
 * Class file for XiHistoricalTypeTopByCapitalization
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeTopByCapitalization
 * @date 08/07/2012
 */
class XiHistoricalTypeTopByCapitalization extends XiHistoricalTypeCommon
{
	/**
	 * The Rank
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Rank;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeTopTypes
	 */
	public $Type;
	/**
	 * The MarketCapitalization
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MarketCapitalization;
	/**
	 * The Quote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeHistoricalQuote
	 */
	public $Quote;
	/**
	 * Constructor
	 * @param int Rank
	 * @param XiHistoricalTypeTopTypes Type
	 * @param double MarketCapitalization
	 * @param XiHistoricalTypeHistoricalQuote Quote
	 * @return XiHistoricalTypeTopByCapitalization
	 */
	public function __construct($_Rank,$_Type,$_MarketCapitalization,$_Quote = null)
	{
		XiHistoricalWsdlClass::__construct(array('Rank'=>$_Rank,'Type'=>$_Type,'MarketCapitalization'=>$_MarketCapitalization,'Quote'=>$_Quote));
	}
	/**
	 * Set Rank
	 * @param int Rank
	 * @return int
	 */
	public function setRank($_Rank)
	{
		return ($this->Rank = $_Rank);
	}
	/**
	 * Get Rank
	 * @return int
	 */
	public function getRank()
	{
		return $this->Rank;
	}
	/**
	 * Set Type
	 * @param TopTypes Type
	 * @return TopTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiHistoricalTypeTopTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiHistoricalTypeTopTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set MarketCapitalization
	 * @param double MarketCapitalization
	 * @return double
	 */
	public function setMarketCapitalization($_MarketCapitalization)
	{
		return ($this->MarketCapitalization = $_MarketCapitalization);
	}
	/**
	 * Get MarketCapitalization
	 * @return double
	 */
	public function getMarketCapitalization()
	{
		return $this->MarketCapitalization;
	}
	/**
	 * Set Quote
	 * @param HistoricalQuote Quote
	 * @return HistoricalQuote
	 */
	public function setQuote($_Quote)
	{
		return ($this->Quote = $_Quote);
	}
	/**
	 * Get Quote
	 * @return XiHistoricalTypeHistoricalQuote
	 */
	public function getQuote()
	{
		return $this->Quote;
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