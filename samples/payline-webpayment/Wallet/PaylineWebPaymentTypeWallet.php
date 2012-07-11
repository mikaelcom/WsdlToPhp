<?php
/**
 * Class file for PaylineWebPaymentTypeWallet
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeWallet
 * Documentation : This element contains element for a wallet
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeWallet extends PaylineWebPaymentWsdlClass
{
	/**
	 * The walletId
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $walletId;
	/**
	 * The lastName
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $lastName;
	/**
	 * The firstName
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $firstName;
	/**
	 * The email
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $email;
	/**
	 * The shippingAddress
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeAddress
	 */
	public $shippingAddress;
	/**
	 * The card
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeCard
	 */
	public $card;
	/**
	 * The comment
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $comment;
	/**
	 * Constructor
	 * @param string walletId
	 * @param string lastName
	 * @param string firstName
	 * @param string email
	 * @param PaylineWebPaymentTypeAddress shippingAddress
	 * @param PaylineWebPaymentTypeCard card
	 * @param string comment
	 * @return PaylineWebPaymentTypeWallet
	 */
	public function __construct($_walletId = null,$_lastName = null,$_firstName = null,$_email = null,$_shippingAddress = null,$_card = null,$_comment = null)
	{
		parent::__construct(array('walletId'=>$_walletId,'lastName'=>$_lastName,'firstName'=>$_firstName,'email'=>$_email,'shippingAddress'=>$_shippingAddress,'card'=>$_card,'comment'=>$_comment));
	}
	/**
	 * Set walletId
	 * @param string walletId
	 * @return string
	 */
	public function setWalletId($_walletId)
	{
		return ($this->walletId = $_walletId);
	}
	/**
	 * Get walletId
	 * @return string
	 */
	public function getWalletId()
	{
		return $this->walletId;
	}
	/**
	 * Set lastName
	 * @param string lastName
	 * @return string
	 */
	public function setLastName($_lastName)
	{
		return ($this->lastName = $_lastName);
	}
	/**
	 * Get lastName
	 * @return string
	 */
	public function getLastName()
	{
		return $this->lastName;
	}
	/**
	 * Set firstName
	 * @param string firstName
	 * @return string
	 */
	public function setFirstName($_firstName)
	{
		return ($this->firstName = $_firstName);
	}
	/**
	 * Get firstName
	 * @return string
	 */
	public function getFirstName()
	{
		return $this->firstName;
	}
	/**
	 * Set email
	 * @param string email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set shippingAddress
	 * @param address shippingAddress
	 * @return address
	 */
	public function setShippingAddress($_shippingAddress)
	{
		return ($this->shippingAddress = $_shippingAddress);
	}
	/**
	 * Get shippingAddress
	 * @return PaylineWebPaymentTypeaddress
	 */
	public function getShippingAddress()
	{
		return $this->shippingAddress;
	}
	/**
	 * Set card
	 * @param card card
	 * @return card
	 */
	public function setCard($_card)
	{
		return ($this->card = $_card);
	}
	/**
	 * Get card
	 * @return PaylineWebPaymentTypecard
	 */
	public function getCard()
	{
		return $this->card;
	}
	/**
	 * Set comment
	 * @param string comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->comment;
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