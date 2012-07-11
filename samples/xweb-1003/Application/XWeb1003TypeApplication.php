<?php
/**
 * Class file for XWeb1003TypeApplication
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeApplication
 * @date 09/07/2012
 */
class XWeb1003TypeApplication extends XWeb1003WsdlClass
{
	/**
	 * The Rep_Identifier
	 * @var Rep_Identifier
	 */
	public $Rep_Identifier;
	/**
	 * The Source_Identifier
	 * @var Source_Identifier
	 */
	public $Source_Identifier;
	/**
	 * The Other_Income_Included
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Other_Income_Included;
	/**
	 * The Other_Liabilities_Included
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Other_Liabilities_Included;
	/**
	 * The Agency_Case_Number
	 * @var Agency_Case_Number
	 */
	public $Agency_Case_Number;
	/**
	 * The Lender_Case_Number
	 * @var Lender_Case_Number
	 */
	public $Lender_Case_Number;
	/**
	 * The Type
	 * @var Type
	 */
	public $Type;
	/**
	 * The Type_Description
	 * @var Type_Description
	 */
	public $Type_Description;
	/**
	 * The Amount
	 * @var Amount
	 */
	public $Amount;
	/**
	 * The Interest_Rate
	 * @var Interest_Rate
	 */
	public $Interest_Rate;
	/**
	 * The Number_Of_Months
	 * @var Number_Of_Months
	 */
	public $Number_Of_Months;
	/**
	 * The Amortization_Type
	 * @var Amortization_Type
	 */
	public $Amortization_Type;
	/**
	 * The Amortization_Type_Description
	 * @var Amortization_Type_Description
	 */
	public $Amortization_Type_Description;
	/**
	 * The Property
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWeb1003TypePropertyType
	 */
	public $Property;
	/**
	 * The Purpose
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWeb1003TypePurposeType
	 */
	public $Purpose;
	/**
	 * The Borrowers
	 * @var XWeb1003TypeBorrowers
	 */
	public $Borrowers;
	/**
	 * The Transaction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWeb1003TypeTransactionType
	 */
	public $Transaction;
	/**
	 * The Application_ID
	 * @var anonymous14
	 */
	public $Application_ID;
	/**
	 * The Date_Created
	 * @var anonymous15
	 */
	public $Date_Created;
	/**
	 * Constructor
	 * @param Rep_Identifier Rep_Identifier
	 * @param Source_Identifier Source_Identifier
	 * @param boolean Other_Income_Included
	 * @param boolean Other_Liabilities_Included
	 * @param Agency_Case_Number Agency_Case_Number
	 * @param Lender_Case_Number Lender_Case_Number
	 * @param Type Type
	 * @param Type_Description Type_Description
	 * @param Amount Amount
	 * @param Interest_Rate Interest_Rate
	 * @param Number_Of_Months Number_Of_Months
	 * @param Amortization_Type Amortization_Type
	 * @param Amortization_Type_Description Amortization_Type_Description
	 * @param XWeb1003TypePropertyType Property
	 * @param XWeb1003TypePurposeType Purpose
	 * @param XWeb1003TypeBorrowers Borrowers
	 * @param XWeb1003TypeTransactionType Transaction
	 * @param anonymous14 Application_ID
	 * @param anonymous15 Date_Created
	 * @return XWeb1003TypeApplication
	 */
	public function __construct($_Rep_Identifier = null,$_Source_Identifier = null,$_Other_Income_Included = null,$_Other_Liabilities_Included = null,$_Agency_Case_Number = null,$_Lender_Case_Number = null,$_Type = null,$_Type_Description = null,$_Amount = null,$_Interest_Rate = null,$_Number_Of_Months = null,$_Amortization_Type = null,$_Amortization_Type_Description = null,$_Property = null,$_Purpose = null,$_Borrowers = null,$_Transaction = null,$_Application_ID = null,$_Date_Created = null)
	{
		parent::__construct(array('Rep_Identifier'=>$_Rep_Identifier,'Source_Identifier'=>$_Source_Identifier,'Other_Income_Included'=>$_Other_Income_Included,'Other_Liabilities_Included'=>$_Other_Liabilities_Included,'Agency_Case_Number'=>$_Agency_Case_Number,'Lender_Case_Number'=>$_Lender_Case_Number,'Type'=>$_Type,'Type_Description'=>$_Type_Description,'Amount'=>$_Amount,'Interest_Rate'=>$_Interest_Rate,'Number_Of_Months'=>$_Number_Of_Months,'Amortization_Type'=>$_Amortization_Type,'Amortization_Type_Description'=>$_Amortization_Type_Description,'Property'=>$_Property,'Purpose'=>$_Purpose,'Borrowers'=>$_Borrowers,'Transaction'=>$_Transaction,'Application_ID'=>$_Application_ID,'Date_Created'=>$_Date_Created));
	}
	/**
	 * Set Rep_Identifier
	 * @param Rep_Identifier Rep_Identifier
	 * @return Rep_Identifier
	 */
	public function setRep_Identifier($_Rep_Identifier)
	{
		return ($this->Rep_Identifier = $_Rep_Identifier);
	}
	/**
	 * Get Rep_Identifier
	 * @return Rep_Identifier
	 */
	public function getRep_Identifier()
	{
		return $this->Rep_Identifier;
	}
	/**
	 * Set Source_Identifier
	 * @param Source_Identifier Source_Identifier
	 * @return Source_Identifier
	 */
	public function setSource_Identifier($_Source_Identifier)
	{
		return ($this->Source_Identifier = $_Source_Identifier);
	}
	/**
	 * Get Source_Identifier
	 * @return Source_Identifier
	 */
	public function getSource_Identifier()
	{
		return $this->Source_Identifier;
	}
	/**
	 * Set Other_Income_Included
	 * @param boolean Other_Income_Included
	 * @return boolean
	 */
	public function setOther_Income_Included($_Other_Income_Included)
	{
		return ($this->Other_Income_Included = $_Other_Income_Included);
	}
	/**
	 * Get Other_Income_Included
	 * @return boolean
	 */
	public function getOther_Income_Included()
	{
		return $this->Other_Income_Included;
	}
	/**
	 * Set Other_Liabilities_Included
	 * @param boolean Other_Liabilities_Included
	 * @return boolean
	 */
	public function setOther_Liabilities_Included($_Other_Liabilities_Included)
	{
		return ($this->Other_Liabilities_Included = $_Other_Liabilities_Included);
	}
	/**
	 * Get Other_Liabilities_Included
	 * @return boolean
	 */
	public function getOther_Liabilities_Included()
	{
		return $this->Other_Liabilities_Included;
	}
	/**
	 * Set Agency_Case_Number
	 * @param Agency_Case_Number Agency_Case_Number
	 * @return Agency_Case_Number
	 */
	public function setAgency_Case_Number($_Agency_Case_Number)
	{
		return ($this->Agency_Case_Number = $_Agency_Case_Number);
	}
	/**
	 * Get Agency_Case_Number
	 * @return Agency_Case_Number
	 */
	public function getAgency_Case_Number()
	{
		return $this->Agency_Case_Number;
	}
	/**
	 * Set Lender_Case_Number
	 * @param Lender_Case_Number Lender_Case_Number
	 * @return Lender_Case_Number
	 */
	public function setLender_Case_Number($_Lender_Case_Number)
	{
		return ($this->Lender_Case_Number = $_Lender_Case_Number);
	}
	/**
	 * Get Lender_Case_Number
	 * @return Lender_Case_Number
	 */
	public function getLender_Case_Number()
	{
		return $this->Lender_Case_Number;
	}
	/**
	 * Set Type
	 * @param Type Type
	 * @return Type
	 */
	public function setType($_Type)
	{
		return ($this->Type = $_Type);
	}
	/**
	 * Get Type
	 * @return Type
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Type_Description
	 * @param Type_Description Type_Description
	 * @return Type_Description
	 */
	public function setType_Description($_Type_Description)
	{
		return ($this->Type_Description = $_Type_Description);
	}
	/**
	 * Get Type_Description
	 * @return Type_Description
	 */
	public function getType_Description()
	{
		return $this->Type_Description;
	}
	/**
	 * Set Amount
	 * @param Amount Amount
	 * @return Amount
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return Amount
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set Interest_Rate
	 * @param Interest_Rate Interest_Rate
	 * @return Interest_Rate
	 */
	public function setInterest_Rate($_Interest_Rate)
	{
		return ($this->Interest_Rate = $_Interest_Rate);
	}
	/**
	 * Get Interest_Rate
	 * @return Interest_Rate
	 */
	public function getInterest_Rate()
	{
		return $this->Interest_Rate;
	}
	/**
	 * Set Number_Of_Months
	 * @param Number_Of_Months Number_Of_Months
	 * @return Number_Of_Months
	 */
	public function setNumber_Of_Months($_Number_Of_Months)
	{
		return ($this->Number_Of_Months = $_Number_Of_Months);
	}
	/**
	 * Get Number_Of_Months
	 * @return Number_Of_Months
	 */
	public function getNumber_Of_Months()
	{
		return $this->Number_Of_Months;
	}
	/**
	 * Set Amortization_Type
	 * @param Amortization_Type Amortization_Type
	 * @return Amortization_Type
	 */
	public function setAmortization_Type($_Amortization_Type)
	{
		return ($this->Amortization_Type = $_Amortization_Type);
	}
	/**
	 * Get Amortization_Type
	 * @return Amortization_Type
	 */
	public function getAmortization_Type()
	{
		return $this->Amortization_Type;
	}
	/**
	 * Set Amortization_Type_Description
	 * @param Amortization_Type_Description Amortization_Type_Description
	 * @return Amortization_Type_Description
	 */
	public function setAmortization_Type_Description($_Amortization_Type_Description)
	{
		return ($this->Amortization_Type_Description = $_Amortization_Type_Description);
	}
	/**
	 * Get Amortization_Type_Description
	 * @return Amortization_Type_Description
	 */
	public function getAmortization_Type_Description()
	{
		return $this->Amortization_Type_Description;
	}
	/**
	 * Set Property
	 * @param PropertyType Property
	 * @return PropertyType
	 */
	public function setProperty($_Property)
	{
		return ($this->Property = $_Property);
	}
	/**
	 * Get Property
	 * @return XWeb1003TypePropertyType
	 */
	public function getProperty()
	{
		return $this->Property;
	}
	/**
	 * Set Purpose
	 * @param PurposeType Purpose
	 * @return PurposeType
	 */
	public function setPurpose($_Purpose)
	{
		return ($this->Purpose = $_Purpose);
	}
	/**
	 * Get Purpose
	 * @return XWeb1003TypePurposeType
	 */
	public function getPurpose()
	{
		return $this->Purpose;
	}
	/**
	 * Set Borrowers
	 * @param Borrowers Borrowers
	 * @return Borrowers
	 */
	public function setBorrowers($_Borrowers)
	{
		return ($this->Borrowers = $_Borrowers);
	}
	/**
	 * Get Borrowers
	 * @return XWeb1003TypeBorrowers
	 */
	public function getBorrowers()
	{
		return $this->Borrowers;
	}
	/**
	 * Set Transaction
	 * @param TransactionType Transaction
	 * @return TransactionType
	 */
	public function setTransaction($_Transaction)
	{
		return ($this->Transaction = $_Transaction);
	}
	/**
	 * Get Transaction
	 * @return XWeb1003TypeTransactionType
	 */
	public function getTransaction()
	{
		return $this->Transaction;
	}
	/**
	 * Set Application_ID
	 * @param anonymous14 Application_ID
	 * @return anonymous14
	 */
	public function setApplication_ID($_Application_ID)
	{
		return ($this->Application_ID = $_Application_ID);
	}
	/**
	 * Get Application_ID
	 * @return anonymous14
	 */
	public function getApplication_ID()
	{
		return $this->Application_ID;
	}
	/**
	 * Set Date_Created
	 * @param anonymous15 Date_Created
	 * @return anonymous15
	 */
	public function setDate_Created($_Date_Created)
	{
		return ($this->Date_Created = $_Date_Created);
	}
	/**
	 * Get Date_Created
	 * @return anonymous15
	 */
	public function getDate_Created()
	{
		return $this->Date_Created;
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