<?php
/**
 * Class file for XiHistoricalTypeTop
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeTop
 * @date 08/07/2012
 */
class XiHistoricalTypeTop extends XiHistoricalTypeCommon
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
	 * @param XiHistoricalTypeHistoricalQuote Quote
	 * @return XiHistoricalTypeTop
	 */
	public function __construct($_Rank,$_Type,$_Quote = null)
	{
		XiHistoricalWsdlClass::__construct(array('Rank'=>$_Rank,'Type'=>$_Type,'Quote'=>$_Quote));
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