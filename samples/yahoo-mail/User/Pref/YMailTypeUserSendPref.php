<?php
/**
 * Class file for YMailTypeUserSendPref
 * @date 02/07/2012
 */
/**
 * Class YMailTypeUserSendPref
 * @date 02/07/2012
 */
class YMailTypeUserSendPref extends YMailWsdlClass
{
	/**
	 * The defaultID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $defaultID;
	/**
	 * The loggedInAlias
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $loggedInAlias;
	/**
	 * The defaultFromName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $defaultFromName;
	/**
	 * The defaultFromAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $defaultFromAddress;
	/**
	 * The defaultReplyToAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $defaultReplyToAddress;
	/**
	 * The canSendFromPopAcct
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $canSendFromPopAcct;
	/**
	 * The showCcBcc
	 * Meta informations :
	 * 	- default : hide
	 * @var YMailTypeShowCcBcc
	 */
	public $showCcBcc;
	/**
	 * The includeMsgOnReply
	 * @var YMailTypeIncludeMsgOnReply
	 */
	public $includeMsgOnReply;
	/**
	 * The signatureActive
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $signatureActive;
	/**
	 * The signatureText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $signatureText;
	/**
	 * The richTextSignature
	 * Meta informations :
	 * 	- default : plain
	 * @var YMailTypeRichTextSignature
	 */
	public $richTextSignature;
	/**
	 * The addUnknownContact
	 * Meta informations :
	 * 	- default : unspecified
	 * @var YMailTypeUnknownContactAction
	 */
	public $addUnknownContact;
	/**
	 * The autosaveOnSend
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $autosaveOnSend;
	/**
	 * Constructor
	 * @param string defaultID
	 * @param string loggedInAlias
	 * @param string defaultFromName
	 * @param string defaultFromAddress
	 * @param string defaultReplyToAddress
	 * @param boolean canSendFromPopAcct
	 * @param YMailTypeShowCcBcc showCcBcc
	 * @param YMailTypeIncludeMsgOnReply includeMsgOnReply
	 * @param boolean signatureActive
	 * @param string signatureText
	 * @param YMailTypeRichTextSignature richTextSignature
	 * @param YMailTypeUnknownContactAction addUnknownContact
	 * @param string autosaveOnSend
	 * @return YMailTypeUserSendPref
	 */
	public function __construct($_defaultID = null,$_loggedInAlias = null,$_defaultFromName = null,$_defaultFromAddress = null,$_defaultReplyToAddress = null,$_canSendFromPopAcct = null,$_showCcBcc = 'hide',$_includeMsgOnReply = null,$_signatureActive = null,$_signatureText = null,$_richTextSignature = 'plain',$_addUnknownContact = 'unspecified',$_autosaveOnSend = null)
	{
		parent::__construct(array('defaultID'=>$_defaultID,'loggedInAlias'=>$_loggedInAlias,'defaultFromName'=>$_defaultFromName,'defaultFromAddress'=>$_defaultFromAddress,'defaultReplyToAddress'=>$_defaultReplyToAddress,'canSendFromPopAcct'=>$_canSendFromPopAcct,'showCcBcc'=>$_showCcBcc,'includeMsgOnReply'=>$_includeMsgOnReply,'signatureActive'=>$_signatureActive,'signatureText'=>$_signatureText,'richTextSignature'=>$_richTextSignature,'addUnknownContact'=>$_addUnknownContact,'autosaveOnSend'=>$_autosaveOnSend));
	}
	/**
	 * Set defaultID
	 * @param string defaultID
	 * @return string
	 */
	public function setDefaultID($_defaultID)
	{
		return ($this->defaultID = $_defaultID);
	}
	/**
	 * Get defaultID
	 * @return string
	 */
	public function getDefaultID()
	{
		return $this->defaultID;
	}
	/**
	 * Set loggedInAlias
	 * @param string loggedInAlias
	 * @return string
	 */
	public function setLoggedInAlias($_loggedInAlias)
	{
		return ($this->loggedInAlias = $_loggedInAlias);
	}
	/**
	 * Get loggedInAlias
	 * @return string
	 */
	public function getLoggedInAlias()
	{
		return $this->loggedInAlias;
	}
	/**
	 * Set defaultFromName
	 * @param string defaultFromName
	 * @return string
	 */
	public function setDefaultFromName($_defaultFromName)
	{
		return ($this->defaultFromName = $_defaultFromName);
	}
	/**
	 * Get defaultFromName
	 * @return string
	 */
	public function getDefaultFromName()
	{
		return $this->defaultFromName;
	}
	/**
	 * Set defaultFromAddress
	 * @param string defaultFromAddress
	 * @return string
	 */
	public function setDefaultFromAddress($_defaultFromAddress)
	{
		return ($this->defaultFromAddress = $_defaultFromAddress);
	}
	/**
	 * Get defaultFromAddress
	 * @return string
	 */
	public function getDefaultFromAddress()
	{
		return $this->defaultFromAddress;
	}
	/**
	 * Set defaultReplyToAddress
	 * @param string defaultReplyToAddress
	 * @return string
	 */
	public function setDefaultReplyToAddress($_defaultReplyToAddress)
	{
		return ($this->defaultReplyToAddress = $_defaultReplyToAddress);
	}
	/**
	 * Get defaultReplyToAddress
	 * @return string
	 */
	public function getDefaultReplyToAddress()
	{
		return $this->defaultReplyToAddress;
	}
	/**
	 * Set canSendFromPopAcct
	 * @param boolean canSendFromPopAcct
	 * @return boolean
	 */
	public function setCanSendFromPopAcct($_canSendFromPopAcct)
	{
		return ($this->canSendFromPopAcct = $_canSendFromPopAcct);
	}
	/**
	 * Get canSendFromPopAcct
	 * @return boolean
	 */
	public function getCanSendFromPopAcct()
	{
		return $this->canSendFromPopAcct;
	}
	/**
	 * Set showCcBcc
	 * @param ShowCcBcc showCcBcc
	 * @return ShowCcBcc
	 */
	public function setShowCcBcc($_showCcBcc)
	{
		return ($this->showCcBcc = YMailTypeShowCcBcc::valueIsValid($_showCcBcc)?$_showCcBcc:null);
	}
	/**
	 * Get showCcBcc
	 * @return YMailTypeShowCcBcc
	 */
	public function getShowCcBcc()
	{
		return $this->showCcBcc;
	}
	/**
	 * Set includeMsgOnReply
	 * @param IncludeMsgOnReply includeMsgOnReply
	 * @return IncludeMsgOnReply
	 */
	public function setIncludeMsgOnReply($_includeMsgOnReply)
	{
		return ($this->includeMsgOnReply = YMailTypeIncludeMsgOnReply::valueIsValid($_includeMsgOnReply)?$_includeMsgOnReply:null);
	}
	/**
	 * Get includeMsgOnReply
	 * @return YMailTypeIncludeMsgOnReply
	 */
	public function getIncludeMsgOnReply()
	{
		return $this->includeMsgOnReply;
	}
	/**
	 * Set signatureActive
	 * @param boolean signatureActive
	 * @return boolean
	 */
	public function setSignatureActive($_signatureActive)
	{
		return ($this->signatureActive = $_signatureActive);
	}
	/**
	 * Get signatureActive
	 * @return boolean
	 */
	public function getSignatureActive()
	{
		return $this->signatureActive;
	}
	/**
	 * Set signatureText
	 * @param string signatureText
	 * @return string
	 */
	public function setSignatureText($_signatureText)
	{
		return ($this->signatureText = $_signatureText);
	}
	/**
	 * Get signatureText
	 * @return string
	 */
	public function getSignatureText()
	{
		return $this->signatureText;
	}
	/**
	 * Set richTextSignature
	 * @param RichTextSignature richTextSignature
	 * @return RichTextSignature
	 */
	public function setRichTextSignature($_richTextSignature)
	{
		return ($this->richTextSignature = YMailTypeRichTextSignature::valueIsValid($_richTextSignature)?$_richTextSignature:null);
	}
	/**
	 * Get richTextSignature
	 * @return YMailTypeRichTextSignature
	 */
	public function getRichTextSignature()
	{
		return $this->richTextSignature;
	}
	/**
	 * Set addUnknownContact
	 * @param UnknownContactAction addUnknownContact
	 * @return UnknownContactAction
	 */
	public function setAddUnknownContact($_addUnknownContact)
	{
		return ($this->addUnknownContact = YMailTypeUnknownContactAction::valueIsValid($_addUnknownContact)?$_addUnknownContact:null);
	}
	/**
	 * Get addUnknownContact
	 * @return YMailTypeUnknownContactAction
	 */
	public function getAddUnknownContact()
	{
		return $this->addUnknownContact;
	}
	/**
	 * Set autosaveOnSend
	 * @param string autosaveOnSend
	 * @return string
	 */
	public function setAutosaveOnSend($_autosaveOnSend)
	{
		return ($this->autosaveOnSend = $_autosaveOnSend);
	}
	/**
	 * Get autosaveOnSend
	 * @return string
	 */
	public function getAutosaveOnSend()
	{
		return $this->autosaveOnSend;
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