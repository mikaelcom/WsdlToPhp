<?php
/**
 * Class file for AmazonFPSTypeGetRecipientVerificationStatus
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetRecipientVerificationStatus
 * @date 10/07/2012
 */
class AmazonFPSTypeGetRecipientVerificationStatus extends AmazonFPSWsdlClass
{
	/**
	 * The RecipientTokenId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $RecipientTokenId;
	/**
	 * Constructor
	 * @param string RecipientTokenId
	 * @return AmazonFPSTypeGetRecipientVerificationStatus
	 */
	public function __construct($_RecipientTokenId = null)
	{
		parent::__construct(array('RecipientTokenId'=>$_RecipientTokenId));
	}
	/**
	 * Set RecipientTokenId
	 * @param string RecipientTokenId
	 * @return string
	 */
	public function setRecipientTokenId($_RecipientTokenId)
	{
		return ($this->RecipientTokenId = $_RecipientTokenId);
	}
	/**
	 * Get RecipientTokenId
	 * @return string
	 */
	public function getRecipientTokenId()
	{
		return $this->RecipientTokenId;
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