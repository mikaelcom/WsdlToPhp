<?php
/**
 * Class file for XiFundDataTypeBrokerConsiderations
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeBrokerConsiderations
 * @date 08/07/2012
 */
class XiFundDataTypeBrokerConsiderations extends XiFundDataWsdlClass
{
	/**
	 * The SalesOfShares
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $SalesOfShares;
	/**
	 * The ReceiptOfResearch
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ReceiptOfResearch;
	/**
	 * The ReceiptOfQuotes
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ReceiptOfQuotes;
	/**
	 * The BestPriceExecution
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $BestPriceExecution;
	/**
	 * The ReceiptOfCommunicationServices
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ReceiptOfCommunicationServices;
	/**
	 * The Affiliation
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Affiliation;
	/**
	 * The Credits
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Credits;
	/**
	 * The CreditsToThirdParty
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $CreditsToThirdParty;
	/**
	 * The CreditsToRegistrant
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $CreditsToRegistrant;
	/**
	 * The Other
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Other;
	/**
	 * Constructor
	 * @param boolean SalesOfShares
	 * @param boolean ReceiptOfResearch
	 * @param boolean ReceiptOfQuotes
	 * @param boolean BestPriceExecution
	 * @param boolean ReceiptOfCommunicationServices
	 * @param boolean Affiliation
	 * @param boolean Credits
	 * @param boolean CreditsToThirdParty
	 * @param boolean CreditsToRegistrant
	 * @param boolean Other
	 * @return XiFundDataTypeBrokerConsiderations
	 */
	public function __construct($_SalesOfShares,$_ReceiptOfResearch,$_ReceiptOfQuotes,$_BestPriceExecution,$_ReceiptOfCommunicationServices,$_Affiliation,$_Credits,$_CreditsToThirdParty,$_CreditsToRegistrant,$_Other)
	{
		parent::__construct(array('SalesOfShares'=>$_SalesOfShares,'ReceiptOfResearch'=>$_ReceiptOfResearch,'ReceiptOfQuotes'=>$_ReceiptOfQuotes,'BestPriceExecution'=>$_BestPriceExecution,'ReceiptOfCommunicationServices'=>$_ReceiptOfCommunicationServices,'Affiliation'=>$_Affiliation,'Credits'=>$_Credits,'CreditsToThirdParty'=>$_CreditsToThirdParty,'CreditsToRegistrant'=>$_CreditsToRegistrant,'Other'=>$_Other));
	}
	/**
	 * Set SalesOfShares
	 * @param boolean SalesOfShares
	 * @return boolean
	 */
	public function setSalesOfShares($_SalesOfShares)
	{
		return ($this->SalesOfShares = $_SalesOfShares);
	}
	/**
	 * Get SalesOfShares
	 * @return boolean
	 */
	public function getSalesOfShares()
	{
		return $this->SalesOfShares;
	}
	/**
	 * Set ReceiptOfResearch
	 * @param boolean ReceiptOfResearch
	 * @return boolean
	 */
	public function setReceiptOfResearch($_ReceiptOfResearch)
	{
		return ($this->ReceiptOfResearch = $_ReceiptOfResearch);
	}
	/**
	 * Get ReceiptOfResearch
	 * @return boolean
	 */
	public function getReceiptOfResearch()
	{
		return $this->ReceiptOfResearch;
	}
	/**
	 * Set ReceiptOfQuotes
	 * @param boolean ReceiptOfQuotes
	 * @return boolean
	 */
	public function setReceiptOfQuotes($_ReceiptOfQuotes)
	{
		return ($this->ReceiptOfQuotes = $_ReceiptOfQuotes);
	}
	/**
	 * Get ReceiptOfQuotes
	 * @return boolean
	 */
	public function getReceiptOfQuotes()
	{
		return $this->ReceiptOfQuotes;
	}
	/**
	 * Set BestPriceExecution
	 * @param boolean BestPriceExecution
	 * @return boolean
	 */
	public function setBestPriceExecution($_BestPriceExecution)
	{
		return ($this->BestPriceExecution = $_BestPriceExecution);
	}
	/**
	 * Get BestPriceExecution
	 * @return boolean
	 */
	public function getBestPriceExecution()
	{
		return $this->BestPriceExecution;
	}
	/**
	 * Set ReceiptOfCommunicationServices
	 * @param boolean ReceiptOfCommunicationServices
	 * @return boolean
	 */
	public function setReceiptOfCommunicationServices($_ReceiptOfCommunicationServices)
	{
		return ($this->ReceiptOfCommunicationServices = $_ReceiptOfCommunicationServices);
	}
	/**
	 * Get ReceiptOfCommunicationServices
	 * @return boolean
	 */
	public function getReceiptOfCommunicationServices()
	{
		return $this->ReceiptOfCommunicationServices;
	}
	/**
	 * Set Affiliation
	 * @param boolean Affiliation
	 * @return boolean
	 */
	public function setAffiliation($_Affiliation)
	{
		return ($this->Affiliation = $_Affiliation);
	}
	/**
	 * Get Affiliation
	 * @return boolean
	 */
	public function getAffiliation()
	{
		return $this->Affiliation;
	}
	/**
	 * Set Credits
	 * @param boolean Credits
	 * @return boolean
	 */
	public function setCredits($_Credits)
	{
		return ($this->Credits = $_Credits);
	}
	/**
	 * Get Credits
	 * @return boolean
	 */
	public function getCredits()
	{
		return $this->Credits;
	}
	/**
	 * Set CreditsToThirdParty
	 * @param boolean CreditsToThirdParty
	 * @return boolean
	 */
	public function setCreditsToThirdParty($_CreditsToThirdParty)
	{
		return ($this->CreditsToThirdParty = $_CreditsToThirdParty);
	}
	/**
	 * Get CreditsToThirdParty
	 * @return boolean
	 */
	public function getCreditsToThirdParty()
	{
		return $this->CreditsToThirdParty;
	}
	/**
	 * Set CreditsToRegistrant
	 * @param boolean CreditsToRegistrant
	 * @return boolean
	 */
	public function setCreditsToRegistrant($_CreditsToRegistrant)
	{
		return ($this->CreditsToRegistrant = $_CreditsToRegistrant);
	}
	/**
	 * Get CreditsToRegistrant
	 * @return boolean
	 */
	public function getCreditsToRegistrant()
	{
		return $this->CreditsToRegistrant;
	}
	/**
	 * Set Other
	 * @param boolean Other
	 * @return boolean
	 */
	public function setOther($_Other)
	{
		return ($this->Other = $_Other);
	}
	/**
	 * Get Other
	 * @return boolean
	 */
	public function getOther()
	{
		return $this->Other;
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