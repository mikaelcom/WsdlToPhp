<?php
/**
 * Class file for AmazonFPSTypeGetTokenByCaller
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetTokenByCaller
 * @date 10/07/2012
 */
class AmazonFPSTypeGetTokenByCaller extends AmazonFPSWsdlClass
{
	/**
	 * The TokenId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TokenId;
	/**
	 * The CallerReference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CallerReference;
	/**
	 * Constructor
	 * @param string TokenId
	 * @param string CallerReference
	 * @return AmazonFPSTypeGetTokenByCaller
	 */
	public function __construct($_TokenId = null,$_CallerReference = null)
	{
		parent::__construct(array('TokenId'=>$_TokenId,'CallerReference'=>$_CallerReference));
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
	 * Set CallerReference
	 * @param string CallerReference
	 * @return string
	 */
	public function setCallerReference($_CallerReference)
	{
		return ($this->CallerReference = $_CallerReference);
	}
	/**
	 * Get CallerReference
	 * @return string
	 */
	public function getCallerReference()
	{
		return $this->CallerReference;
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