<?php
/**
 * Class file for YMailTypeAlias
 * @date 02/07/2012
 */
/**
 * Class YMailTypeAlias
 * @date 02/07/2012
 */
class YMailTypeAlias extends YMailWsdlClass
{
	/**
	 * The fromName
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $fromName;
	/**
	 * The address
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $address;
	/**
	 * The replyTo
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $replyTo;
	/**
	 * The colorIndicator
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $colorIndicator;
	/**
	 * The signature
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $signature;
	/**
	 * The addSignature
	 * Meta informations :
	 * 	- use : optional
	 * @var boolean
	 */
	public $addSignature;
	/**
	 * The signatureType
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $signatureType;
	/**
	 * The isDefault
	 * Meta informations :
	 * 	- use : optional
	 * @var boolean
	 */
	public $isDefault;
	/**
	 * Constructor
	 * @param string fromName
	 * @param string address
	 * @param string replyTo
	 * @param string colorIndicator
	 * @param string signature
	 * @param boolean addSignature
	 * @param string signatureType
	 * @param boolean isDefault
	 * @return YMailTypeAlias
	 */
	public function __construct($_fromName = null,$_address = null,$_replyTo = null,$_colorIndicator = null,$_signature = null,$_addSignature = null,$_signatureType = null,$_isDefault = null)
	{
		parent::__construct(array('fromName'=>$_fromName,'address'=>$_address,'replyTo'=>$_replyTo,'colorIndicator'=>$_colorIndicator,'signature'=>$_signature,'addSignature'=>$_addSignature,'signatureType'=>$_signatureType,'isDefault'=>$_isDefault));
	}
	/**
	 * Set fromName
	 * @param string fromName
	 * @return string
	 */
	public function setFromName($_fromName)
	{
		return ($this->fromName = $_fromName);
	}
	/**
	 * Get fromName
	 * @return string
	 */
	public function getFromName()
	{
		return $this->fromName;
	}
	/**
	 * Set address
	 * @param string address
	 * @return string
	 */
	public function setAddress($_address)
	{
		return ($this->address = $_address);
	}
	/**
	 * Get address
	 * @return string
	 */
	public function getAddress()
	{
		return $this->address;
	}
	/**
	 * Set replyTo
	 * @param string replyTo
	 * @return string
	 */
	public function setReplyTo($_replyTo)
	{
		return ($this->replyTo = $_replyTo);
	}
	/**
	 * Get replyTo
	 * @return string
	 */
	public function getReplyTo()
	{
		return $this->replyTo;
	}
	/**
	 * Set colorIndicator
	 * @param string colorIndicator
	 * @return string
	 */
	public function setColorIndicator($_colorIndicator)
	{
		return ($this->colorIndicator = $_colorIndicator);
	}
	/**
	 * Get colorIndicator
	 * @return string
	 */
	public function getColorIndicator()
	{
		return $this->colorIndicator;
	}
	/**
	 * Set signature
	 * @param string signature
	 * @return string
	 */
	public function setSignature($_signature)
	{
		return ($this->signature = $_signature);
	}
	/**
	 * Get signature
	 * @return string
	 */
	public function getSignature()
	{
		return $this->signature;
	}
	/**
	 * Set addSignature
	 * @param boolean addSignature
	 * @return boolean
	 */
	public function setAddSignature($_addSignature)
	{
		return ($this->addSignature = $_addSignature);
	}
	/**
	 * Get addSignature
	 * @return boolean
	 */
	public function getAddSignature()
	{
		return $this->addSignature;
	}
	/**
	 * Set signatureType
	 * @param string signatureType
	 * @return string
	 */
	public function setSignatureType($_signatureType)
	{
		return ($this->signatureType = $_signatureType);
	}
	/**
	 * Get signatureType
	 * @return string
	 */
	public function getSignatureType()
	{
		return $this->signatureType;
	}
	/**
	 * Set isDefault
	 * @param boolean isDefault
	 * @return boolean
	 */
	public function setIsDefault($_isDefault)
	{
		return ($this->isDefault = $_isDefault);
	}
	/**
	 * Get isDefault
	 * @return boolean
	 */
	public function getIsDefault()
	{
		return $this->isDefault;
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