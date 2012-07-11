<?php
/**
 * Class file for PaylineWebPaymentTypeCard
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeCard
 * Documentation : This element contains information about the card
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeCard extends PaylineWebPaymentWsdlClass
{
	/**
	 * The number
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $number;
	/**
	 * The type
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $type;
	/**
	 * The expirationDate
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $expirationDate;
	/**
	 * The cvx
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $cvx;
	/**
	 * The ownerBirthdayDate
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $ownerBirthdayDate;
	/**
	 * The password
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $password;
	/**
	 * The cardPresent
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $cardPresent;
	/**
	 * Constructor
	 * @param string number
	 * @param string type
	 * @param string expirationDate
	 * @param string cvx
	 * @param string ownerBirthdayDate
	 * @param string password
	 * @param string cardPresent
	 * @return PaylineWebPaymentTypeCard
	 */
	public function __construct($_number = null,$_type = null,$_expirationDate = null,$_cvx = null,$_ownerBirthdayDate = null,$_password = null,$_cardPresent = null)
	{
		parent::__construct(array('number'=>$_number,'type'=>$_type,'expirationDate'=>$_expirationDate,'cvx'=>$_cvx,'ownerBirthdayDate'=>$_ownerBirthdayDate,'password'=>$_password,'cardPresent'=>$_cardPresent));
	}
	/**
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set expirationDate
	 * @param string expirationDate
	 * @return string
	 */
	public function setExpirationDate($_expirationDate)
	{
		return ($this->expirationDate = $_expirationDate);
	}
	/**
	 * Get expirationDate
	 * @return string
	 */
	public function getExpirationDate()
	{
		return $this->expirationDate;
	}
	/**
	 * Set cvx
	 * @param string cvx
	 * @return string
	 */
	public function setCvx($_cvx)
	{
		return ($this->cvx = $_cvx);
	}
	/**
	 * Get cvx
	 * @return string
	 */
	public function getCvx()
	{
		return $this->cvx;
	}
	/**
	 * Set ownerBirthdayDate
	 * @param string ownerBirthdayDate
	 * @return string
	 */
	public function setOwnerBirthdayDate($_ownerBirthdayDate)
	{
		return ($this->ownerBirthdayDate = $_ownerBirthdayDate);
	}
	/**
	 * Get ownerBirthdayDate
	 * @return string
	 */
	public function getOwnerBirthdayDate()
	{
		return $this->ownerBirthdayDate;
	}
	/**
	 * Set password
	 * @param string password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
	}
	/**
	 * Get password
	 * @return string
	 */
	public function getPassword()
	{
		return $this->password;
	}
	/**
	 * Set cardPresent
	 * @param string cardPresent
	 * @return string
	 */
	public function setCardPresent($_cardPresent)
	{
		return ($this->cardPresent = $_cardPresent);
	}
	/**
	 * Get cardPresent
	 * @return string
	 */
	public function getCardPresent()
	{
		return $this->cardPresent;
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