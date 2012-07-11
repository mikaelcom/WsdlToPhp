<?php
/**
 * Class file for XiIndexComponentsTypePricedComponents
 * @date 08/07/2012
 */
/**
 * Class XiIndexComponentsTypePricedComponents
 * @date 08/07/2012
 */
class XiIndexComponentsTypePricedComponents extends XiIndexComponentsTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndexComponentsTypeSecurity
	 */
	public $Security;
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Count;
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * The Price
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Price;
	/**
	 * The Divisor
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Divisor;
	/**
	 * The DivisorDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DivisorDate;
	/**
	 * The PricedComponents
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndexComponentsTypeArrayOfPricedComponent
	 */
	public $PricedComponents;
	/**
	 * Constructor
	 * @param XiIndexComponentsTypeSecurity Security
	 * @param int Count
	 * @param string AsOfDate
	 * @param double Price
	 * @param double Divisor
	 * @param string DivisorDate
	 * @param XiIndexComponentsTypeArrayOfPricedComponent PricedComponents
	 * @return XiIndexComponentsTypePricedComponents
	 */
	public function __construct($_Security = null,$_Count,$_AsOfDate = null,$_Price,$_Divisor,$_DivisorDate = null,$_PricedComponents = null)
	{
		XiIndexComponentsWsdlClass::__construct(array('Security'=>$_Security,'Count'=>$_Count,'AsOfDate'=>$_AsOfDate,'Price'=>$_Price,'Divisor'=>$_Divisor,'DivisorDate'=>$_DivisorDate,'PricedComponents'=>new XiIndexComponentsTypeArrayOfPricedComponent($_PricedComponents)));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiIndexComponentsTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set Count
	 * @param int Count
	 * @return int
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return int
	 */
	public function getCount()
	{
		return $this->Count;
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
	 * Set Price
	 * @param double Price
	 * @return double
	 */
	public function setPrice($_Price)
	{
		return ($this->Price = $_Price);
	}
	/**
	 * Get Price
	 * @return double
	 */
	public function getPrice()
	{
		return $this->Price;
	}
	/**
	 * Set Divisor
	 * @param double Divisor
	 * @return double
	 */
	public function setDivisor($_Divisor)
	{
		return ($this->Divisor = $_Divisor);
	}
	/**
	 * Get Divisor
	 * @return double
	 */
	public function getDivisor()
	{
		return $this->Divisor;
	}
	/**
	 * Set DivisorDate
	 * @param string DivisorDate
	 * @return string
	 */
	public function setDivisorDate($_DivisorDate)
	{
		return ($this->DivisorDate = $_DivisorDate);
	}
	/**
	 * Get DivisorDate
	 * @return string
	 */
	public function getDivisorDate()
	{
		return $this->DivisorDate;
	}
	/**
	 * Set PricedComponents
	 * @param ArrayOfPricedComponent PricedComponents
	 * @return ArrayOfPricedComponent
	 */
	public function setPricedComponents($_PricedComponents)
	{
		return ($this->PricedComponents = $_PricedComponents);
	}
	/**
	 * Get PricedComponents
	 * @return XiIndexComponentsTypeArrayOfPricedComponent
	 */
	public function getPricedComponents()
	{
		return $this->PricedComponents;
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