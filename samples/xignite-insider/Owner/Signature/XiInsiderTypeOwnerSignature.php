<?php
/**
 * Class file for XiInsiderTypeOwnerSignature
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeOwnerSignature
 * @date 08/07/2012
 */
class XiInsiderTypeOwnerSignature extends XiInsiderWsdlClass
{
	/**
	 * The signatureName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $signatureName;
	/**
	 * The signatureDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $signatureDate;
	/**
	 * Constructor
	 * @param string signatureName
	 * @param string signatureDate
	 * @return XiInsiderTypeOwnerSignature
	 */
	public function __construct($_signatureName = null,$_signatureDate = null)
	{
		parent::__construct(array('signatureName'=>$_signatureName,'signatureDate'=>$_signatureDate));
	}
	/**
	 * Set signatureName
	 * @param string signatureName
	 * @return string
	 */
	public function setSignatureName($_signatureName)
	{
		return ($this->signatureName = $_signatureName);
	}
	/**
	 * Get signatureName
	 * @return string
	 */
	public function getSignatureName()
	{
		return $this->signatureName;
	}
	/**
	 * Set signatureDate
	 * @param string signatureDate
	 * @return string
	 */
	public function setSignatureDate($_signatureDate)
	{
		return ($this->signatureDate = $_signatureDate);
	}
	/**
	 * Get signatureDate
	 * @return string
	 */
	public function getSignatureDate()
	{
		return $this->signatureDate;
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