<?php
/**
 * Class file for CdyneAddressTypeCCServerCheckResponse
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressTypeCCServerCheckResponse
 * @date 02/07/2012
 */
class CdyneAddressTypeCCServerCheckResponse extends CdyneAddressWsdlClass
{
	/**
	 * The CCServerCheckResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CCServerCheckResult;
	/**
	 * Constructor
	 * @param string CCServerCheckResult
	 * @return CdyneAddressTypeCCServerCheckResponse
	 */
	public function __construct($_CCServerCheckResult = null)
	{
		parent::__construct(array('CCServerCheckResult'=>$_CCServerCheckResult));
	}
	/**
	 * Set CCServerCheckResult
	 * @param string CCServerCheckResult
	 * @return string
	 */
	public function setCCServerCheckResult($_CCServerCheckResult)
	{
		return ($this->CCServerCheckResult = $_CCServerCheckResult);
	}
	/**
	 * Get CCServerCheckResult
	 * @return string
	 */
	public function getCCServerCheckResult()
	{
		return $this->CCServerCheckResult;
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