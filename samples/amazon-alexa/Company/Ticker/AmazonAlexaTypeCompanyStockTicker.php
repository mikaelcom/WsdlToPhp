<?php
/**
 * Class file for AmazonAlexaTypeCompanyStockTicker
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeCompanyStockTicker
 * @date 10/07/2012
 */
class AmazonAlexaTypeCompanyStockTicker extends AmazonAlexaWsdlClass
{
	/**
	 * The Symbol
	 * @var AmazonAlexaTypeGenericDataType
	 */
	public $Symbol;
	/**
	 * The Exchange
	 * @var AmazonAlexaTypeGenericDataType
	 */
	public $Exchange;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeGenericDataType Symbol
	 * @param AmazonAlexaTypeGenericDataType Exchange
	 * @return AmazonAlexaTypeCompanyStockTicker
	 */
	public function __construct($_Symbol = null,$_Exchange = null)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'Exchange'=>$_Exchange));
	}
	/**
	 * Set Symbol
	 * @param GenericDataType Symbol
	 * @return GenericDataType
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return AmazonAlexaTypeGenericDataType
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Set Exchange
	 * @param GenericDataType Exchange
	 * @return GenericDataType
	 */
	public function setExchange($_Exchange)
	{
		return ($this->Exchange = $_Exchange);
	}
	/**
	 * Get Exchange
	 * @return AmazonAlexaTypeGenericDataType
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