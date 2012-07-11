<?php
/**
 * Class file for XWebCheckOutTypeCredit_Card
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutTypeCredit_Card
 * @date 09/07/2012
 */
class XWebCheckOutTypeCredit_Card extends XWebCheckOutWsdlClass
{
	/**
	 * The Type
	 * @var Type
	 */
	public $Type;
	/**
	 * The Number
	 * @var Number
	 */
	public $Number;
	/**
	 * The Expiration_Month
	 * @var Expiration_Month
	 */
	public $Expiration_Month;
	/**
	 * The Expiration_Year
	 * @var Expiration_Year
	 */
	public $Expiration_Year;
	/**
	 * The Verification_Number
	 * @var Verification_Number
	 */
	public $Verification_Number;
	/**
	 * The Date_Created
	 * @var anonymous41
	 */
	public $Date_Created;
	/**
	 * Constructor
	 * @param Type Type
	 * @param Number Number
	 * @param Expiration_Month Expiration_Month
	 * @param Expiration_Year Expiration_Year
	 * @param Verification_Number Verification_Number
	 * @param anonymous41 Date_Created
	 * @return XWebCheckOutTypeCredit_Card
	 */
	public function __construct($_Type = null,$_Number = null,$_Expiration_Month = null,$_Expiration_Year = null,$_Verification_Number = null,$_Date_Created = null)
	{
		parent::__construct(array('Type'=>$_Type,'Number'=>$_Number,'Expiration_Month'=>$_Expiration_Month,'Expiration_Year'=>$_Expiration_Year,'Verification_Number'=>$_Verification_Number,'Date_Created'=>$_Date_Created));
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
	 * Set Number
	 * @param Number Number
	 * @return Number
	 */
	public function setNumber($_Number)
	{
		return ($this->Number = $_Number);
	}
	/**
	 * Get Number
	 * @return Number
	 */
	public function getNumber()
	{
		return $this->Number;
	}
	/**
	 * Set Expiration_Month
	 * @param Expiration_Month Expiration_Month
	 * @return Expiration_Month
	 */
	public function setExpiration_Month($_Expiration_Month)
	{
		return ($this->Expiration_Month = $_Expiration_Month);
	}
	/**
	 * Get Expiration_Month
	 * @return Expiration_Month
	 */
	public function getExpiration_Month()
	{
		return $this->Expiration_Month;
	}
	/**
	 * Set Expiration_Year
	 * @param Expiration_Year Expiration_Year
	 * @return Expiration_Year
	 */
	public function setExpiration_Year($_Expiration_Year)
	{
		return ($this->Expiration_Year = $_Expiration_Year);
	}
	/**
	 * Get Expiration_Year
	 * @return Expiration_Year
	 */
	public function getExpiration_Year()
	{
		return $this->Expiration_Year;
	}
	/**
	 * Set Verification_Number
	 * @param Verification_Number Verification_Number
	 * @return Verification_Number
	 */
	public function setVerification_Number($_Verification_Number)
	{
		return ($this->Verification_Number = $_Verification_Number);
	}
	/**
	 * Get Verification_Number
	 * @return Verification_Number
	 */
	public function getVerification_Number()
	{
		return $this->Verification_Number;
	}
	/**
	 * Set Date_Created
	 * @param anonymous41 Date_Created
	 * @return anonymous41
	 */
	public function setDate_Created($_Date_Created)
	{
		return ($this->Date_Created = $_Date_Created);
	}
	/**
	 * Get Date_Created
	 * @return anonymous41
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