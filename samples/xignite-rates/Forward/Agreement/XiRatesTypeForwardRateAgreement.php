<?php
/**
 * Class file for XiRatesTypeForwardRateAgreement
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeForwardRateAgreement
 * @date 08/07/2012
 */
class XiRatesTypeForwardRateAgreement extends XiRatesTypeCommon
{
	/**
	 * The FirstRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeLIBORRate
	 */
	public $FirstRate;
	/**
	 * The SecondRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeLIBORRate
	 */
	public $SecondRate;
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
	/**
	 * The SpotDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SpotDate;
	/**
	 * The FirstFixingDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FirstFixingDate;
	/**
	 * The SecondFixingDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SecondFixingDate;
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
	 * @var XiRatesTypeRateDescription
	 */
	public $Description;
	/**
	 * Constructor
	 * @param XiRatesTypeLIBORRate FirstRate
	 * @param XiRatesTypeLIBORRate SecondRate
	 * @param string Date
	 * @param string SpotDate
	 * @param string FirstFixingDate
	 * @param string SecondFixingDate
	 * @param double Value
	 * @param string Text
	 * @param string Source
	 * @param XiRatesTypeRateDescription Description
	 * @return XiRatesTypeForwardRateAgreement
	 */
	public function __construct($_FirstRate = null,$_SecondRate = null,$_Date = null,$_SpotDate = null,$_FirstFixingDate = null,$_SecondFixingDate = null,$_Value,$_Text = null,$_Source = null,$_Description = null)
	{
		XiRatesWsdlClass::__construct(array('FirstRate'=>$_FirstRate,'SecondRate'=>$_SecondRate,'Date'=>$_Date,'SpotDate'=>$_SpotDate,'FirstFixingDate'=>$_FirstFixingDate,'SecondFixingDate'=>$_SecondFixingDate,'Value'=>$_Value,'Text'=>$_Text,'Source'=>$_Source,'Description'=>$_Description));
	}
	/**
	 * Set FirstRate
	 * @param LIBORRate FirstRate
	 * @return LIBORRate
	 */
	public function setFirstRate($_FirstRate)
	{
		return ($this->FirstRate = $_FirstRate);
	}
	/**
	 * Get FirstRate
	 * @return XiRatesTypeLIBORRate
	 */
	public function getFirstRate()
	{
		return $this->FirstRate;
	}
	/**
	 * Set SecondRate
	 * @param LIBORRate SecondRate
	 * @return LIBORRate
	 */
	public function setSecondRate($_SecondRate)
	{
		return ($this->SecondRate = $_SecondRate);
	}
	/**
	 * Get SecondRate
	 * @return XiRatesTypeLIBORRate
	 */
	public function getSecondRate()
	{
		return $this->SecondRate;
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
	 * Set SpotDate
	 * @param string SpotDate
	 * @return string
	 */
	public function setSpotDate($_SpotDate)
	{
		return ($this->SpotDate = $_SpotDate);
	}
	/**
	 * Get SpotDate
	 * @return string
	 */
	public function getSpotDate()
	{
		return $this->SpotDate;
	}
	/**
	 * Set FirstFixingDate
	 * @param string FirstFixingDate
	 * @return string
	 */
	public function setFirstFixingDate($_FirstFixingDate)
	{
		return ($this->FirstFixingDate = $_FirstFixingDate);
	}
	/**
	 * Get FirstFixingDate
	 * @return string
	 */
	public function getFirstFixingDate()
	{
		return $this->FirstFixingDate;
	}
	/**
	 * Set SecondFixingDate
	 * @param string SecondFixingDate
	 * @return string
	 */
	public function setSecondFixingDate($_SecondFixingDate)
	{
		return ($this->SecondFixingDate = $_SecondFixingDate);
	}
	/**
	 * Get SecondFixingDate
	 * @return string
	 */
	public function getSecondFixingDate()
	{
		return $this->SecondFixingDate;
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
	 * @return XiRatesTypeRateDescription
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