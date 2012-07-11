<?php
/**
 * Class file for XiGlobalHistoricalTypeDividend
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeDividend
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeDividend extends XiGlobalHistoricalTypeAbstractGlobalHistoricalObject
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeSecurity
	 */
	public $Security;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeCurrencies
	 */
	public $Currency;
	/**
	 * The Code
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var DividendCodes
	 */
	public $Code;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeDividendTypes
	 */
	public $Type;
	/**
	 * The PaymentFrequency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeDividendPaymentFrequencies
	 */
	public $PaymentFrequency;
	/**
	 * The DeclaredDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DeclaredDate;
	/**
	 * The RecordDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RecordDate;
	/**
	 * The PayDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PayDate;
	/**
	 * The ExDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ExDate;
	/**
	 * The DividendAmount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DividendAmount;
	/**
	 * The DataConfidence
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var DividendStatus
	 */
	public $DataConfidence;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeSecurity Security
	 * @param XiGlobalHistoricalTypeCurrencies Currency
	 * @param DividendCodes Code
	 * @param XiGlobalHistoricalTypeDividendTypes Type
	 * @param XiGlobalHistoricalTypeDividendPaymentFrequencies PaymentFrequency
	 * @param string DeclaredDate
	 * @param string RecordDate
	 * @param string PayDate
	 * @param string ExDate
	 * @param double DividendAmount
	 * @param DividendStatus DataConfidence
	 * @return XiGlobalHistoricalTypeDividend
	 */
	public function __construct($_Security = null,$_Currency,$_Code,$_Type,$_PaymentFrequency,$_DeclaredDate = null,$_RecordDate = null,$_PayDate = null,$_ExDate = null,$_DividendAmount,$_DataConfidence)
	{
		XiGlobalHistoricalWsdlClass::__construct(array('Security'=>$_Security,'Currency'=>$_Currency,'Code'=>$_Code,'Type'=>$_Type,'PaymentFrequency'=>$_PaymentFrequency,'DeclaredDate'=>$_DeclaredDate,'RecordDate'=>$_RecordDate,'PayDate'=>$_PayDate,'ExDate'=>$_ExDate,'DividendAmount'=>$_DividendAmount,'DataConfidence'=>$_DataConfidence));
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
	 * @return XiGlobalHistoricalTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set Currency
	 * @param Currencies Currency
	 * @return Currencies
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiGlobalHistoricalTypeCurrencies::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiGlobalHistoricalTypeCurrencies
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set Code
	 * @param DividendCodes Code
	 * @return DividendCodes
	 */
	public function setCode($_Code)
	{
		return ($this->Code = $_Code);
	}
	/**
	 * Get Code
	 * @return DividendCodes
	 */
	public function getCode()
	{
		return $this->Code;
	}
	/**
	 * Set Type
	 * @param DividendTypes Type
	 * @return DividendTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiGlobalHistoricalTypeDividendTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiGlobalHistoricalTypeDividendTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set PaymentFrequency
	 * @param DividendPaymentFrequencies PaymentFrequency
	 * @return DividendPaymentFrequencies
	 */
	public function setPaymentFrequency($_PaymentFrequency)
	{
		return ($this->PaymentFrequency = XiGlobalHistoricalTypeDividendPaymentFrequencies::valueIsValid($_PaymentFrequency)?$_PaymentFrequency:null);
	}
	/**
	 * Get PaymentFrequency
	 * @return XiGlobalHistoricalTypeDividendPaymentFrequencies
	 */
	public function getPaymentFrequency()
	{
		return $this->PaymentFrequency;
	}
	/**
	 * Set DeclaredDate
	 * @param string DeclaredDate
	 * @return string
	 */
	public function setDeclaredDate($_DeclaredDate)
	{
		return ($this->DeclaredDate = $_DeclaredDate);
	}
	/**
	 * Get DeclaredDate
	 * @return string
	 */
	public function getDeclaredDate()
	{
		return $this->DeclaredDate;
	}
	/**
	 * Set RecordDate
	 * @param string RecordDate
	 * @return string
	 */
	public function setRecordDate($_RecordDate)
	{
		return ($this->RecordDate = $_RecordDate);
	}
	/**
	 * Get RecordDate
	 * @return string
	 */
	public function getRecordDate()
	{
		return $this->RecordDate;
	}
	/**
	 * Set PayDate
	 * @param string PayDate
	 * @return string
	 */
	public function setPayDate($_PayDate)
	{
		return ($this->PayDate = $_PayDate);
	}
	/**
	 * Get PayDate
	 * @return string
	 */
	public function getPayDate()
	{
		return $this->PayDate;
	}
	/**
	 * Set ExDate
	 * @param string ExDate
	 * @return string
	 */
	public function setExDate($_ExDate)
	{
		return ($this->ExDate = $_ExDate);
	}
	/**
	 * Get ExDate
	 * @return string
	 */
	public function getExDate()
	{
		return $this->ExDate;
	}
	/**
	 * Set DividendAmount
	 * @param double DividendAmount
	 * @return double
	 */
	public function setDividendAmount($_DividendAmount)
	{
		return ($this->DividendAmount = $_DividendAmount);
	}
	/**
	 * Get DividendAmount
	 * @return double
	 */
	public function getDividendAmount()
	{
		return $this->DividendAmount;
	}
	/**
	 * Set DataConfidence
	 * @param DividendStatus DataConfidence
	 * @return DividendStatus
	 */
	public function setDataConfidence($_DataConfidence)
	{
		return ($this->DataConfidence = $_DataConfidence);
	}
	/**
	 * Get DataConfidence
	 * @return DividendStatus
	 */
	public function getDataConfidence()
	{
		return $this->DataConfidence;
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