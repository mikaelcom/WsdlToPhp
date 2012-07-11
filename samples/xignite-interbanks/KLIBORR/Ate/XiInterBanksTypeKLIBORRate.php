<?php
/**
 * Class file for XiInterBanksTypeKLIBORRate
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeKLIBORRate
 * @date 08/07/2012
 */
class XiInterBanksTypeKLIBORRate extends XiInterBanksTypeCommon
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeKLIBORTypes
	 */
	public $Type;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeCurrencies
	 */
	public $Currency;
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
	 * The Text
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Text;
	/**
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Source;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeRateDescription
	 */
	public $Description;
	/**
	 * Constructor
	 * @param XiInterBanksTypeKLIBORTypes Type
	 * @param XiInterBanksTypeCurrencies Currency
	 * @param string Date
	 * @param double Value
	 * @param string Text
	 * @param string Source
	 * @param XiInterBanksTypeRateDescription Description
	 * @return XiInterBanksTypeKLIBORRate
	 */
	public function __construct($_Type,$_Currency,$_Date = null,$_Value,$_Text = null,$_Source = null,$_Description = null)
	{
		XiInterBanksWsdlClass::__construct(array('Type'=>$_Type,'Currency'=>$_Currency,'Date'=>$_Date,'Value'=>$_Value,'Text'=>$_Text,'Source'=>$_Source,'Description'=>$_Description));
	}
	/**
	 * Set Type
	 * @param KLIBORTypes Type
	 * @return KLIBORTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiInterBanksTypeKLIBORTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiInterBanksTypeKLIBORTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Currency
	 * @param Currencies Currency
	 * @return Currencies
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiInterBanksTypeCurrencies::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiInterBanksTypeCurrencies
	 */
	public function getCurrency()
	{
		return $this->Currency;
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
	 * Set Source
	 * @param string Source
	 * @return string
	 */
	public function setSource($_Source)
	{
		return ($this->Source = $_Source);
	}
	/**
	 * Get Source
	 * @return string
	 */
	public function getSource()
	{
		return $this->Source;
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
	 * @return XiInterBanksTypeRateDescription
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