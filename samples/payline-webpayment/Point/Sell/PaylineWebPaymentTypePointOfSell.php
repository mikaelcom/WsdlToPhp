<?php
/**
 * Class file for PaylineWebPaymentTypePointOfSell
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypePointOfSell
 * Documentation : This element contains all information about point of sell
 * @date 10/07/2012
 */
class PaylineWebPaymentTypePointOfSell extends PaylineWebPaymentWsdlClass
{
	/**
	 * The siret
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $siret;
	/**
	 * The codeMcc
	 * @var codeMcc
	 */
	public $codeMcc;
	/**
	 * The label
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $label;
	/**
	 * The webmasterEmail
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $webmasterEmail;
	/**
	 * The comments
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $comments;
	/**
	 * The webstoreURL
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $webstoreURL;
	/**
	 * The notificationURL
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $notificationURL;
	/**
	 * The privateLifeURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $privateLifeURL;
	/**
	 * The saleCondURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $saleCondURL;
	/**
	 * The buyerMustAcceptSaleCond
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var boolean
	 */
	public $buyerMustAcceptSaleCond;
	/**
	 * The endOfPaymentRedirection
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var boolean
	 */
	public $endOfPaymentRedirection;
	/**
	 * The ticketSend
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeTicketSend
	 */
	public $ticketSend;
	/**
	 * The contracts
	 * @var PaylineWebPaymentTypeContracts
	 */
	public $contracts;
	/**
	 * The virtualTerminal
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeVirtualTerminal
	 */
	public $virtualTerminal;
	/**
	 * Constructor
	 * @param string siret
	 * @param codeMcc codeMcc
	 * @param string label
	 * @param string webmasterEmail
	 * @param string comments
	 * @param string webstoreURL
	 * @param string notificationURL
	 * @param string privateLifeURL
	 * @param string saleCondURL
	 * @param boolean buyerMustAcceptSaleCond
	 * @param boolean endOfPaymentRedirection
	 * @param PaylineWebPaymentTypeTicketSend ticketSend
	 * @param PaylineWebPaymentTypeContracts contracts
	 * @param PaylineWebPaymentTypeVirtualTerminal virtualTerminal
	 * @return PaylineWebPaymentTypePointOfSell
	 */
	public function __construct($_siret = null,$_codeMcc = null,$_label = null,$_webmasterEmail = null,$_comments = null,$_webstoreURL = null,$_notificationURL = null,$_privateLifeURL = null,$_saleCondURL = null,$_buyerMustAcceptSaleCond = null,$_endOfPaymentRedirection = null,$_ticketSend = null,$_contracts = null,$_virtualTerminal = null)
	{
		parent::__construct(array('siret'=>$_siret,'codeMcc'=>$_codeMcc,'label'=>$_label,'webmasterEmail'=>$_webmasterEmail,'comments'=>$_comments,'webstoreURL'=>$_webstoreURL,'notificationURL'=>$_notificationURL,'privateLifeURL'=>$_privateLifeURL,'saleCondURL'=>$_saleCondURL,'buyerMustAcceptSaleCond'=>$_buyerMustAcceptSaleCond,'endOfPaymentRedirection'=>$_endOfPaymentRedirection,'ticketSend'=>$_ticketSend,'contracts'=>$_contracts,'virtualTerminal'=>$_virtualTerminal));
	}
	/**
	 * Set siret
	 * @param string siret
	 * @return string
	 */
	public function setSiret($_siret)
	{
		return ($this->siret = $_siret);
	}
	/**
	 * Get siret
	 * @return string
	 */
	public function getSiret()
	{
		return $this->siret;
	}
	/**
	 * Set codeMcc
	 * @param codeMcc codeMcc
	 * @return codeMcc
	 */
	public function setCodeMcc($_codeMcc)
	{
		return ($this->codeMcc = $_codeMcc);
	}
	/**
	 * Get codeMcc
	 * @return codeMcc
	 */
	public function getCodeMcc()
	{
		return $this->codeMcc;
	}
	/**
	 * Set label
	 * @param string label
	 * @return string
	 */
	public function setLabel($_label)
	{
		return ($this->label = $_label);
	}
	/**
	 * Get label
	 * @return string
	 */
	public function getLabel()
	{
		return $this->label;
	}
	/**
	 * Set webmasterEmail
	 * @param string webmasterEmail
	 * @return string
	 */
	public function setWebmasterEmail($_webmasterEmail)
	{
		return ($this->webmasterEmail = $_webmasterEmail);
	}
	/**
	 * Get webmasterEmail
	 * @return string
	 */
	public function getWebmasterEmail()
	{
		return $this->webmasterEmail;
	}
	/**
	 * Set comments
	 * @param string comments
	 * @return string
	 */
	public function setComments($_comments)
	{
		return ($this->comments = $_comments);
	}
	/**
	 * Get comments
	 * @return string
	 */
	public function getComments()
	{
		return $this->comments;
	}
	/**
	 * Set webstoreURL
	 * @param string webstoreURL
	 * @return string
	 */
	public function setWebstoreURL($_webstoreURL)
	{
		return ($this->webstoreURL = $_webstoreURL);
	}
	/**
	 * Get webstoreURL
	 * @return string
	 */
	public function getWebstoreURL()
	{
		return $this->webstoreURL;
	}
	/**
	 * Set notificationURL
	 * @param string notificationURL
	 * @return string
	 */
	public function setNotificationURL($_notificationURL)
	{
		return ($this->notificationURL = $_notificationURL);
	}
	/**
	 * Get notificationURL
	 * @return string
	 */
	public function getNotificationURL()
	{
		return $this->notificationURL;
	}
	/**
	 * Set privateLifeURL
	 * @param string privateLifeURL
	 * @return string
	 */
	public function setPrivateLifeURL($_privateLifeURL)
	{
		return ($this->privateLifeURL = $_privateLifeURL);
	}
	/**
	 * Get privateLifeURL
	 * @return string
	 */
	public function getPrivateLifeURL()
	{
		return $this->privateLifeURL;
	}
	/**
	 * Set saleCondURL
	 * @param string saleCondURL
	 * @return string
	 */
	public function setSaleCondURL($_saleCondURL)
	{
		return ($this->saleCondURL = $_saleCondURL);
	}
	/**
	 * Get saleCondURL
	 * @return string
	 */
	public function getSaleCondURL()
	{
		return $this->saleCondURL;
	}
	/**
	 * Set buyerMustAcceptSaleCond
	 * @param boolean buyerMustAcceptSaleCond
	 * @return boolean
	 */
	public function setBuyerMustAcceptSaleCond($_buyerMustAcceptSaleCond)
	{
		return ($this->buyerMustAcceptSaleCond = $_buyerMustAcceptSaleCond);
	}
	/**
	 * Get buyerMustAcceptSaleCond
	 * @return boolean
	 */
	public function getBuyerMustAcceptSaleCond()
	{
		return $this->buyerMustAcceptSaleCond;
	}
	/**
	 * Set endOfPaymentRedirection
	 * @param boolean endOfPaymentRedirection
	 * @return boolean
	 */
	public function setEndOfPaymentRedirection($_endOfPaymentRedirection)
	{
		return ($this->endOfPaymentRedirection = $_endOfPaymentRedirection);
	}
	/**
	 * Get endOfPaymentRedirection
	 * @return boolean
	 */
	public function getEndOfPaymentRedirection()
	{
		return $this->endOfPaymentRedirection;
	}
	/**
	 * Set ticketSend
	 * @param ticketSend ticketSend
	 * @return ticketSend
	 */
	public function setTicketSend($_ticketSend)
	{
		return ($this->ticketSend = $_ticketSend);
	}
	/**
	 * Get ticketSend
	 * @return PaylineWebPaymentTypeticketSend
	 */
	public function getTicketSend()
	{
		return $this->ticketSend;
	}
	/**
	 * Set contracts
	 * @param contracts contracts
	 * @return contracts
	 */
	public function setContracts($_contracts)
	{
		return ($this->contracts = $_contracts);
	}
	/**
	 * Get contracts
	 * @return PaylineWebPaymentTypecontracts
	 */
	public function getContracts()
	{
		return $this->contracts;
	}
	/**
	 * Set virtualTerminal
	 * @param virtualTerminal virtualTerminal
	 * @return virtualTerminal
	 */
	public function setVirtualTerminal($_virtualTerminal)
	{
		return ($this->virtualTerminal = $_virtualTerminal);
	}
	/**
	 * Get virtualTerminal
	 * @return PaylineWebPaymentTypevirtualTerminal
	 */
	public function getVirtualTerminal()
	{
		return $this->virtualTerminal;
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