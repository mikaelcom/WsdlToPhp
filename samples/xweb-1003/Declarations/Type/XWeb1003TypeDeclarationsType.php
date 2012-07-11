<?php
/**
 * Class file for XWeb1003TypeDeclarationsType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeDeclarationsType
 * @date 09/07/2012
 */
class XWeb1003TypeDeclarationsType extends XWeb1003WsdlClass
{
	/**
	 * The Any_Judgments
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Any_Judgments;
	/**
	 * The Declared_Bankrupt
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Declared_Bankrupt;
	/**
	 * The Property_Foreclosed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Property_Foreclosed;
	/**
	 * The Lawsuit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Lawsuit;
	/**
	 * The Obligated_On_Any_Loan
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Obligated_On_Any_Loan;
	/**
	 * The Delinquent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Delinquent;
	/**
	 * The Obligated_To_Pay_Alimony
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Obligated_To_Pay_Alimony;
	/**
	 * The Borrowed_Down_Payment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Borrowed_Down_Payment;
	/**
	 * The Co_Maker_Note
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Co_Maker_Note;
	/**
	 * The U_S_Citizen
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $U_S_Citizen;
	/**
	 * The Permanent_Resident
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Permanent_Resident;
	/**
	 * The Primary_Residence
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Primary_Residence;
	/**
	 * The Ownership_Interest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Ownership_Interest;
	/**
	 * The Property_Type
	 * @var Property_Type
	 */
	public $Property_Type;
	/**
	 * The Title_Held
	 * @var Title_Held
	 */
	public $Title_Held;
	/**
	 * Constructor
	 * @param boolean Any_Judgments
	 * @param boolean Declared_Bankrupt
	 * @param boolean Property_Foreclosed
	 * @param boolean Lawsuit
	 * @param boolean Obligated_On_Any_Loan
	 * @param boolean Delinquent
	 * @param boolean Obligated_To_Pay_Alimony
	 * @param boolean Borrowed_Down_Payment
	 * @param boolean Co_Maker_Note
	 * @param boolean U_S_Citizen
	 * @param boolean Permanent_Resident
	 * @param boolean Primary_Residence
	 * @param boolean Ownership_Interest
	 * @param Property_Type Property_Type
	 * @param Title_Held Title_Held
	 * @return XWeb1003TypeDeclarationsType
	 */
	public function __construct($_Any_Judgments = null,$_Declared_Bankrupt = null,$_Property_Foreclosed = null,$_Lawsuit = null,$_Obligated_On_Any_Loan = null,$_Delinquent = null,$_Obligated_To_Pay_Alimony = null,$_Borrowed_Down_Payment = null,$_Co_Maker_Note = null,$_U_S_Citizen = null,$_Permanent_Resident = null,$_Primary_Residence = null,$_Ownership_Interest = null,$_Property_Type = null,$_Title_Held = null)
	{
		parent::__construct(array('Any_Judgments'=>$_Any_Judgments,'Declared_Bankrupt'=>$_Declared_Bankrupt,'Property_Foreclosed'=>$_Property_Foreclosed,'Lawsuit'=>$_Lawsuit,'Obligated_On_Any_Loan'=>$_Obligated_On_Any_Loan,'Delinquent'=>$_Delinquent,'Obligated_To_Pay_Alimony'=>$_Obligated_To_Pay_Alimony,'Borrowed_Down_Payment'=>$_Borrowed_Down_Payment,'Co_Maker_Note'=>$_Co_Maker_Note,'U_S_Citizen'=>$_U_S_Citizen,'Permanent_Resident'=>$_Permanent_Resident,'Primary_Residence'=>$_Primary_Residence,'Ownership_Interest'=>$_Ownership_Interest,'Property_Type'=>$_Property_Type,'Title_Held'=>$_Title_Held));
	}
	/**
	 * Set Any_Judgments
	 * @param boolean Any_Judgments
	 * @return boolean
	 */
	public function setAny_Judgments($_Any_Judgments)
	{
		return ($this->Any_Judgments = $_Any_Judgments);
	}
	/**
	 * Get Any_Judgments
	 * @return boolean
	 */
	public function getAny_Judgments()
	{
		return $this->Any_Judgments;
	}
	/**
	 * Set Declared_Bankrupt
	 * @param boolean Declared_Bankrupt
	 * @return boolean
	 */
	public function setDeclared_Bankrupt($_Declared_Bankrupt)
	{
		return ($this->Declared_Bankrupt = $_Declared_Bankrupt);
	}
	/**
	 * Get Declared_Bankrupt
	 * @return boolean
	 */
	public function getDeclared_Bankrupt()
	{
		return $this->Declared_Bankrupt;
	}
	/**
	 * Set Property_Foreclosed
	 * @param boolean Property_Foreclosed
	 * @return boolean
	 */
	public function setProperty_Foreclosed($_Property_Foreclosed)
	{
		return ($this->Property_Foreclosed = $_Property_Foreclosed);
	}
	/**
	 * Get Property_Foreclosed
	 * @return boolean
	 */
	public function getProperty_Foreclosed()
	{
		return $this->Property_Foreclosed;
	}
	/**
	 * Set Lawsuit
	 * @param boolean Lawsuit
	 * @return boolean
	 */
	public function setLawsuit($_Lawsuit)
	{
		return ($this->Lawsuit = $_Lawsuit);
	}
	/**
	 * Get Lawsuit
	 * @return boolean
	 */
	public function getLawsuit()
	{
		return $this->Lawsuit;
	}
	/**
	 * Set Obligated_On_Any_Loan
	 * @param boolean Obligated_On_Any_Loan
	 * @return boolean
	 */
	public function setObligated_On_Any_Loan($_Obligated_On_Any_Loan)
	{
		return ($this->Obligated_On_Any_Loan = $_Obligated_On_Any_Loan);
	}
	/**
	 * Get Obligated_On_Any_Loan
	 * @return boolean
	 */
	public function getObligated_On_Any_Loan()
	{
		return $this->Obligated_On_Any_Loan;
	}
	/**
	 * Set Delinquent
	 * @param boolean Delinquent
	 * @return boolean
	 */
	public function setDelinquent($_Delinquent)
	{
		return ($this->Delinquent = $_Delinquent);
	}
	/**
	 * Get Delinquent
	 * @return boolean
	 */
	public function getDelinquent()
	{
		return $this->Delinquent;
	}
	/**
	 * Set Obligated_To_Pay_Alimony
	 * @param boolean Obligated_To_Pay_Alimony
	 * @return boolean
	 */
	public function setObligated_To_Pay_Alimony($_Obligated_To_Pay_Alimony)
	{
		return ($this->Obligated_To_Pay_Alimony = $_Obligated_To_Pay_Alimony);
	}
	/**
	 * Get Obligated_To_Pay_Alimony
	 * @return boolean
	 */
	public function getObligated_To_Pay_Alimony()
	{
		return $this->Obligated_To_Pay_Alimony;
	}
	/**
	 * Set Borrowed_Down_Payment
	 * @param boolean Borrowed_Down_Payment
	 * @return boolean
	 */
	public function setBorrowed_Down_Payment($_Borrowed_Down_Payment)
	{
		return ($this->Borrowed_Down_Payment = $_Borrowed_Down_Payment);
	}
	/**
	 * Get Borrowed_Down_Payment
	 * @return boolean
	 */
	public function getBorrowed_Down_Payment()
	{
		return $this->Borrowed_Down_Payment;
	}
	/**
	 * Set Co_Maker_Note
	 * @param boolean Co_Maker_Note
	 * @return boolean
	 */
	public function setCo_Maker_Note($_Co_Maker_Note)
	{
		return ($this->Co_Maker_Note = $_Co_Maker_Note);
	}
	/**
	 * Get Co_Maker_Note
	 * @return boolean
	 */
	public function getCo_Maker_Note()
	{
		return $this->Co_Maker_Note;
	}
	/**
	 * Set U_S_Citizen
	 * @param boolean U_S_Citizen
	 * @return boolean
	 */
	public function setU_S_Citizen($_U_S_Citizen)
	{
		return ($this->U_S_Citizen = $_U_S_Citizen);
	}
	/**
	 * Get U_S_Citizen
	 * @return boolean
	 */
	public function getU_S_Citizen()
	{
		return $this->U_S_Citizen;
	}
	/**
	 * Set Permanent_Resident
	 * @param boolean Permanent_Resident
	 * @return boolean
	 */
	public function setPermanent_Resident($_Permanent_Resident)
	{
		return ($this->Permanent_Resident = $_Permanent_Resident);
	}
	/**
	 * Get Permanent_Resident
	 * @return boolean
	 */
	public function getPermanent_Resident()
	{
		return $this->Permanent_Resident;
	}
	/**
	 * Set Primary_Residence
	 * @param boolean Primary_Residence
	 * @return boolean
	 */
	public function setPrimary_Residence($_Primary_Residence)
	{
		return ($this->Primary_Residence = $_Primary_Residence);
	}
	/**
	 * Get Primary_Residence
	 * @return boolean
	 */
	public function getPrimary_Residence()
	{
		return $this->Primary_Residence;
	}
	/**
	 * Set Ownership_Interest
	 * @param boolean Ownership_Interest
	 * @return boolean
	 */
	public function setOwnership_Interest($_Ownership_Interest)
	{
		return ($this->Ownership_Interest = $_Ownership_Interest);
	}
	/**
	 * Get Ownership_Interest
	 * @return boolean
	 */
	public function getOwnership_Interest()
	{
		return $this->Ownership_Interest;
	}
	/**
	 * Set Property_Type
	 * @param Property_Type Property_Type
	 * @return Property_Type
	 */
	public function setProperty_Type($_Property_Type)
	{
		return ($this->Property_Type = $_Property_Type);
	}
	/**
	 * Get Property_Type
	 * @return Property_Type
	 */
	public function getProperty_Type()
	{
		return $this->Property_Type;
	}
	/**
	 * Set Title_Held
	 * @param Title_Held Title_Held
	 * @return Title_Held
	 */
	public function setTitle_Held($_Title_Held)
	{
		return ($this->Title_Held = $_Title_Held);
	}
	/**
	 * Get Title_Held
	 * @return Title_Held
	 */
	public function getTitle_Held()
	{
		return $this->Title_Held;
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