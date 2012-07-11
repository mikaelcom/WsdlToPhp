<?php
/**
 * Class file for XiCurrenciesTypeConvertHistoricalValue
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeConvertHistoricalValue
 * @date 08/07/2012
 */
class XiCurrenciesTypeConvertHistoricalValue extends XiCurrenciesWsdlClass
{
	/**
	 * The From
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $From;
	/**
	 * The To
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $To;
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Amount;
	/**
	 * Constructor
	 * @param string From
	 * @param string To
	 * @param string AsOfDate
	 * @param double Amount
	 * @return XiCurrenciesTypeConvertHistoricalValue
	 */
	public function __construct($_From = null,$_To = null,$_AsOfDate = null,$_Amount)
	{
		parent::__construct(array('From'=>$_From,'To'=>$_To,'AsOfDate'=>$_AsOfDate,'Amount'=>$_Amount));
	}
	/**
	 * Set From
	 * @param string From
	 * @return string
	 */
	public function setFrom($_From)
	{
		return ($this->From = $_From);
	}
	/**
	 * Get From
	 * @return string
	 */
	public function getFrom()
	{
		return $this->From;
	}
	/**
	 * Set To
	 * @param string To
	 * @return string
	 */
	public function setTo($_To)
	{
		return ($this->To = $_To);
	}
	/**
	 * Get To
	 * @return string
	 */
	public function getTo()
	{
		return $this->To;
	}
	/**
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
	}
	/**
	 * Set Amount
	 * @param double Amount
	 * @return double
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return double
	 */
	public function getAmount()
	{
		return $this->Amount;
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