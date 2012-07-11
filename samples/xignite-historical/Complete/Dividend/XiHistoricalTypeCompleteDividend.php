<?php
/**
 * Class file for XiHistoricalTypeCompleteDividend
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeCompleteDividend
 * @date 08/07/2012
 */
class XiHistoricalTypeCompleteDividend extends XiHistoricalWsdlClass
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The ExDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ExDate;
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
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Amount;
	/**
	 * The Yield
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Yield;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Currency;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Type;
	/**
	 * The Code
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Code;
	/**
	 * The PaymentFrequency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
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
	 * Constructor
	 * @param string Symbol
	 * @param string ExDate
	 * @param string RecordDate
	 * @param string PayDate
	 * @param double Amount
	 * @param double Yield
	 * @param string Currency
	 * @param string Type
	 * @param string Code
	 * @param string PaymentFrequency
	 * @param string DeclaredDate
	 * @return XiHistoricalTypeCompleteDividend
	 */
	public function __construct($_Symbol = null,$_ExDate = null,$_RecordDate = null,$_PayDate = null,$_Amount,$_Yield,$_Currency = null,$_Type = null,$_Code = null,$_PaymentFrequency = null,$_DeclaredDate = null)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'ExDate'=>$_ExDate,'RecordDate'=>$_RecordDate,'PayDate'=>$_PayDate,'Amount'=>$_Amount,'Yield'=>$_Yield,'Currency'=>$_Currency,'Type'=>$_Type,'Code'=>$_Code,'PaymentFrequency'=>$_PaymentFrequency,'DeclaredDate'=>$_DeclaredDate));
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
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
	 * Set Yield
	 * @param double Yield
	 * @return double
	 */
	public function setYield($_Yield)
	{
		return ($this->Yield = $_Yield);
	}
	/**
	 * Get Yield
	 * @return double
	 */
	public function getYield()
	{
		return $this->Yield;
	}
	/**
	 * Set Currency
	 * @param string Currency
	 * @return string
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = $_Currency);
	}
	/**
	 * Get Currency
	 * @return string
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set Type
	 * @param string Type
	 * @return string
	 */
	public function setType($_Type)
	{
		return ($this->Type = $_Type);
	}
	/**
	 * Get Type
	 * @return string
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Code
	 * @param string Code
	 * @return string
	 */
	public function setCode($_Code)
	{
		return ($this->Code = $_Code);
	}
	/**
	 * Get Code
	 * @return string
	 */
	public function getCode()
	{
		return $this->Code;
	}
	/**
	 * Set PaymentFrequency
	 * @param string PaymentFrequency
	 * @return string
	 */
	public function setPaymentFrequency($_PaymentFrequency)
	{
		return ($this->PaymentFrequency = $_PaymentFrequency);
	}
	/**
	 * Get PaymentFrequency
	 * @return string
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>