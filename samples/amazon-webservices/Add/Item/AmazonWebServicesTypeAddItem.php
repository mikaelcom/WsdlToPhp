<?php
/**
 * Class file for AmazonWebServicesTypeAddItem
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeAddItem
 * @date 10/07/2012
 */
class AmazonWebServicesTypeAddItem extends AmazonWebServicesWsdlClass
{
	/**
	 * The Asin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Asin;
	/**
	 * The ExchangeId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeId;
	/**
	 * The Quantity
	 * @var string
	 */
	public $Quantity;
	/**
	 * Constructor
	 * @param string Asin
	 * @param string ExchangeId
	 * @param string Quantity
	 * @return AmazonWebServicesTypeAddItem
	 */
	public function __construct($_Asin = null,$_ExchangeId = null,$_Quantity = null)
	{
		parent::__construct(array('Asin'=>$_Asin,'ExchangeId'=>$_ExchangeId,'Quantity'=>$_Quantity));
	}
	/**
	 * Set Asin
	 * @param string Asin
	 * @return string
	 */
	public function setAsin($_Asin)
	{
		return ($this->Asin = $_Asin);
	}
	/**
	 * Get Asin
	 * @return string
	 */
	public function getAsin()
	{
		return $this->Asin;
	}
	/**
	 * Set ExchangeId
	 * @param string ExchangeId
	 * @return string
	 */
	public function setExchangeId($_ExchangeId)
	{
		return ($this->ExchangeId = $_ExchangeId);
	}
	/**
	 * Get ExchangeId
	 * @return string
	 */
	public function getExchangeId()
	{
		return $this->ExchangeId;
	}
	/**
	 * Set Quantity
	 * @param string Quantity
	 * @return string
	 */
	public function setQuantity($_Quantity)
	{
		return ($this->Quantity = $_Quantity);
	}
	/**
	 * Get Quantity
	 * @return string
	 */
	public function getQuantity()
	{
		return $this->Quantity;
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