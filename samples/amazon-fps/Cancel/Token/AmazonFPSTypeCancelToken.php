<?php
/**
 * Class file for AmazonFPSTypeCancelToken
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeCancelToken
 * @date 10/07/2012
 */
class AmazonFPSTypeCancelToken extends AmazonFPSWsdlClass
{
	/**
	 * The TokenId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TokenId;
	/**
	 * The ReasonText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ReasonText;
	/**
	 * The OverrideIPNURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $OverrideIPNURL;
	/**
	 * Constructor
	 * @param string TokenId
	 * @param string ReasonText
	 * @param string OverrideIPNURL
	 * @return AmazonFPSTypeCancelToken
	 */
	public function __construct($_TokenId = null,$_ReasonText = null,$_OverrideIPNURL = null)
	{
		parent::__construct(array('TokenId'=>$_TokenId,'ReasonText'=>$_ReasonText,'OverrideIPNURL'=>$_OverrideIPNURL));
	}
	/**
	 * Set TokenId
	 * @param string TokenId
	 * @return string
	 */
	public function setTokenId($_TokenId)
	{
		return ($this->TokenId = $_TokenId);
	}
	/**
	 * Get TokenId
	 * @return string
	 */
	public function getTokenId()
	{
		return $this->TokenId;
	}
	/**
	 * Set ReasonText
	 * @param string ReasonText
	 * @return string
	 */
	public function setReasonText($_ReasonText)
	{
		return ($this->ReasonText = $_ReasonText);
	}
	/**
	 * Get ReasonText
	 * @return string
	 */
	public function getReasonText()
	{
		return $this->ReasonText;
	}
	/**
	 * Set OverrideIPNURL
	 * @param string OverrideIPNURL
	 * @return string
	 */
	public function setOverrideIPNURL($_OverrideIPNURL)
	{
		return ($this->OverrideIPNURL = $_OverrideIPNURL);
	}
	/**
	 * Get OverrideIPNURL
	 * @return string
	 */
	public function getOverrideIPNURL()
	{
		return $this->OverrideIPNURL;
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