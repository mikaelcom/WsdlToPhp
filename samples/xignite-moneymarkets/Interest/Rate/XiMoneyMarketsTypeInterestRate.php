<?php
/**
 * Class file for XiMoneyMarketsTypeInterestRate
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeInterestRate
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeInterestRate extends XiMoneyMarketsTypeCommon
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeRateTypes
	 */
	public $Type;
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Value;
	/**
	 * The Price
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Price;
	/**
	 * The Spread
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Spread;
	/**
	 * The Change
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Change;
	/**
	 * The Text
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Text;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeRateDescription
	 */
	public $Description;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeRateTypes Type
	 * @param string Date
	 * @param double Value
	 * @param string Price
	 * @param double Spread
	 * @param double Change
	 * @param string Text
	 * @param XiMoneyMarketsTypeRateDescription Description
	 * @return XiMoneyMarketsTypeInterestRate
	 */
	public function __construct($_Type,$_Date = null,$_Value,$_Price = null,$_Spread,$_Change,$_Text = null,$_Description = null)
	{
		XiMoneyMarketsWsdlClass::__construct(array('Type'=>$_Type,'Date'=>$_Date,'Value'=>$_Value,'Price'=>$_Price,'Spread'=>$_Spread,'Change'=>$_Change,'Text'=>$_Text,'Description'=>$_Description));
	}
	/**
	 * Set Type
	 * @param RateTypes Type
	 * @return RateTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiMoneyMarketsTypeRateTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiMoneyMarketsTypeRateTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Date
	 * @param string Date
	 * @return string
	 */
	public function setDate($_Date)
	{
		return ($this->Date = $_Date);
	}
	/**
	 * Get Date
	 * @return string
	 */
	public function getDate()
	{
		return $this->Date;
	}
	/**
	 * Set Value
	 * @param double Value
	 * @return double
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return double
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set Price
	 * @param string Price
	 * @return string
	 */
	public function setPrice($_Price)
	{
		return ($this->Price = $_Price);
	}
	/**
	 * Get Price
	 * @return string
	 */
	public function getPrice()
	{
		return $this->Price;
	}
	/**
	 * Set Spread
	 * @param double Spread
	 * @return double
	 */
	public function setSpread($_Spread)
	{
		return ($this->Spread = $_Spread);
	}
	/**
	 * Get Spread
	 * @return double
	 */
	public function getSpread()
	{
		return $this->Spread;
	}
	/**
	 * Set Change
	 * @param double Change
	 * @return double
	 */
	public function setChange($_Change)
	{
		return ($this->Change = $_Change);
	}
	/**
	 * Get Change
	 * @return double
	 */
	public function getChange()
	{
		return $this->Change;
	}
	/**
	 * Set Text
	 * @param string Text
	 * @return string
	 */
	public function setText($_Text)
	{
		return ($this->Text = $_Text);
	}
	/**
	 * Get Text
	 * @return string
	 */
	public function getText()
	{
		return $this->Text;
	}
	/**
	 * Set Description
	 * @param RateDescription Description
	 * @return RateDescription
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return XiMoneyMarketsTypeRateDescription
	 */
	public function getDescription()
	{
		return $this->Description;
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