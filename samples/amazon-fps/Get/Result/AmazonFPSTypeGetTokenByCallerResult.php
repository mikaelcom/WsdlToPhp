<?php
/**
 * Class file for AmazonFPSTypeGetTokenByCallerResult
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetTokenByCallerResult
 * @date 10/07/2012
 */
class AmazonFPSTypeGetTokenByCallerResult extends AmazonFPSWsdlClass
{
	/**
	 * The Token
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeToken
	 */
	public $Token;
	/**
	 * Constructor
	 * @param AmazonFPSTypeToken Token
	 * @return AmazonFPSTypeGetTokenByCallerResult
	 */
	public function __construct($_Token = null)
	{
		parent::__construct(array('Token'=>$_Token));
	}
	/**
	 * Set Token
	 * @param Token Token
	 * @return Token
	 */
	public function setToken($_Token)
	{
		return ($this->Token = $_Token);
	}
	/**
	 * Get Token
	 * @return AmazonFPSTypeToken
	 */
	public function getToken()
	{
		return $this->Token;
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