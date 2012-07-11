<?php
/**
 * Class file for SPAuthenticationTypeModeResponse
 * @date 06/07/2012
 */
/**
 * Class SPAuthenticationTypeModeResponse
 * @date 06/07/2012
 */
class SPAuthenticationTypeModeResponse extends SPAuthenticationWsdlClass
{
	/**
	 * The ModeResult
	 * @var AuthenticationMode
	 */
	public $ModeResult;
	/**
	 * Constructor
	 * @param AuthenticationMode ModeResult
	 * @return SPAuthenticationTypeModeResponse
	 */
	public function __construct($_ModeResult = null)
	{
		parent::__construct(array('ModeResult'=>$_ModeResult));
	}
	/**
	 * Set ModeResult
	 * @param AuthenticationMode ModeResult
	 * @return AuthenticationMode
	 */
	public function setModeResult($_ModeResult)
	{
		return ($this->ModeResult = $_ModeResult);
	}
	/**
	 * Get ModeResult
	 * @return AuthenticationMode
	 */
	public function getModeResult()
	{
		return $this->ModeResult;
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