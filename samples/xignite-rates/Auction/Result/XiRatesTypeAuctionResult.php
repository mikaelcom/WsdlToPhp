<?php
/**
 * Class file for XiRatesTypeAuctionResult
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeAuctionResult
 * @date 08/07/2012
 */
class XiRatesTypeAuctionResult extends XiRatesTypeCommon
{
	/**
	 * The CUSIP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CUSIP;
	/**
	 * The MaturityType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeMaturityTypes
	 */
	public $MaturityType;
	/**
	 * The Term
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeTermTypes
	 */
	public $Term;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeAuctionTypes
	 */
	public $Type;
	/**
	 * The IssueDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssueDate;
	/**
	 * The MaturityDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MaturityDate;
	/**
	 * The InterestRate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $InterestRate;
	/**
	 * The DiscountRate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DiscountRate;
	/**
	 * The InvestmentRate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $InvestmentRate;
	/**
	 * The Yield
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Yield;
	/**
	 * The Price
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Price;
	/**
	 * Constructor
	 * @param string CUSIP
	 * @param XiRatesTypeMaturityTypes MaturityType
	 * @param XiRatesTypeTermTypes Term
	 * @param XiRatesTypeAuctionTypes Type
	 * @param string IssueDate
	 * @param string MaturityDate
	 * @param double InterestRate
	 * @param double DiscountRate
	 * @param double InvestmentRate
	 * @param double Yield
	 * @param double Price
	 * @return XiRatesTypeAuctionResult
	 */
	public function __construct($_CUSIP = null,$_MaturityType,$_Term,$_Type,$_IssueDate = null,$_MaturityDate = null,$_InterestRate,$_DiscountRate,$_InvestmentRate,$_Yield,$_Price)
	{
		XiRatesWsdlClass::__construct(array('CUSIP'=>$_CUSIP,'MaturityType'=>$_MaturityType,'Term'=>$_Term,'Type'=>$_Type,'IssueDate'=>$_IssueDate,'MaturityDate'=>$_MaturityDate,'InterestRate'=>$_InterestRate,'DiscountRate'=>$_DiscountRate,'InvestmentRate'=>$_InvestmentRate,'Yield'=>$_Yield,'Price'=>$_Price));
	}
	/**
	 * Set CUSIP
	 * @param string CUSIP
	 * @return string
	 */
	public function setCUSIP($_CUSIP)
	{
		return ($this->CUSIP = $_CUSIP);
	}
	/**
	 * Get CUSIP
	 * @return string
	 */
	public function getCUSIP()
	{
		return $this->CUSIP;
	}
	/**
	 * Set MaturityType
	 * @param MaturityTypes MaturityType
	 * @return MaturityTypes
	 */
	public function setMaturityType($_MaturityType)
	{
		return ($this->MaturityType = XiRatesTypeMaturityTypes::valueIsValid($_MaturityType)?$_MaturityType:null);
	}
	/**
	 * Get MaturityType
	 * @return XiRatesTypeMaturityTypes
	 */
	public function getMaturityType()
	{
		return $this->MaturityType;
	}
	/**
	 * Set Term
	 * @param TermTypes Term
	 * @return TermTypes
	 */
	public function setTerm($_Term)
	{
		return ($this->Term = XiRatesTypeTermTypes::valueIsValid($_Term)?$_Term:null);
	}
	/**
	 * Get Term
	 * @return XiRatesTypeTermTypes
	 */
	public function getTerm()
	{
		return $this->Term;
	}
	/**
	 * Set Type
	 * @param AuctionTypes Type
	 * @return AuctionTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiRatesTypeAuctionTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiRatesTypeAuctionTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set IssueDate
	 * @param string IssueDate
	 * @return string
	 */
	public function setIssueDate($_IssueDate)
	{
		return ($this->IssueDate = $_IssueDate);
	}
	/**
	 * Get IssueDate
	 * @return string
	 */
	public function getIssueDate()
	{
		return $this->IssueDate;
	}
	/**
	 * Set MaturityDate
	 * @param string MaturityDate
	 * @return string
	 */
	public function setMaturityDate($_MaturityDate)
	{
		return ($this->MaturityDate = $_MaturityDate);
	}
	/**
	 * Get MaturityDate
	 * @return string
	 */
	public function getMaturityDate()
	{
		return $this->MaturityDate;
	}
	/**
	 * Set InterestRate
	 * @param double InterestRate
	 * @return double
	 */
	public function setInterestRate($_InterestRate)
	{
		return ($this->InterestRate = $_InterestRate);
	}
	/**
	 * Get InterestRate
	 * @return double
	 */
	public function getInterestRate()
	{
		return $this->InterestRate;
	}
	/**
	 * Set DiscountRate
	 * @param double DiscountRate
	 * @return double
	 */
	public function setDiscountRate($_DiscountRate)
	{
		return ($this->DiscountRate = $_DiscountRate);
	}
	/**
	 * Get DiscountRate
	 * @return double
	 */
	public function getDiscountRate()
	{
		return $this->DiscountRate;
	}
	/**
	 * Set InvestmentRate
	 * @param double InvestmentRate
	 * @return double
	 */
	public function setInvestmentRate($_InvestmentRate)
	{
		return ($this->InvestmentRate = $_InvestmentRate);
	}
	/**
	 * Get InvestmentRate
	 * @return double
	 */
	public function getInvestmentRate()
	{
		return $this->InvestmentRate;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>