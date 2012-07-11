<?php
/**
 * Class file for YMailTypeSetSendPref
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSetSendPref
 * @date 02/07/2012
 */
class YMailTypeSetSendPref extends YMailWsdlClass
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
	 * The defaultFromName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $defaultFromName;
	/**
	 * The defaultReplyToAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $defaultReplyToAddress;
	/**
	 * The showCcBcc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeShowCcBcc
	 */
	public $showCcBcc;
	/**
	 * The includeMsgOnReply
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
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
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeRichTextSignature
	 */
	public $richTextSignature;
	/**
	 * The addUnknownContact
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
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
	 * @param string defaultFromName
	 * @param string defaultReplyToAddress
	 * @param YMailTypeShowCcBcc showCcBcc
	 * @param YMailTypeIncludeMsgOnReply includeMsgOnReply
	 * @param boolean signatureActive
	 * @param string signatureText
	 * @param YMailTypeRichTextSignature richTextSignature
	 * @param YMailTypeUnknownContactAction addUnknownContact
	 * @param string autosaveOnSend
	 * @return YMailTypeSetSendPref
	 */
	public function __construct($_defaultID = null,$_defaultFromName = null,$_defaultReplyToAddress = null,$_showCcBcc = null,$_includeMsgOnReply = null,$_signatureActive = null,$_signatureText = null,$_richTextSignature = null,$_addUnknownContact = null,$_autosaveOnSend = null)
	{
		parent::__construct(array('defaultID'=>$_defaultID,'defaultFromName'=>$_defaultFromName,'defaultReplyToAddress'=>$_defaultReplyToAddress,'showCcBcc'=>$_showCcBcc,'includeMsgOnReply'=>$_includeMsgOnReply,'signatureActive'=>$_signatureActive,'signatureText'=>$_signatureText,'richTextSignature'=>$_richTextSignature,'addUnknownContact'=>$_addUnknownContact,'autosaveOnSend'=>$_autosaveOnSend));
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