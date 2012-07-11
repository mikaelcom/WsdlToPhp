<?php
/**
 * Class file for SONcoaLiveTypeRunNCOALiveResponse
 * @date 06/07/2012
 */
/**
 * Class SONcoaLiveTypeRunNCOALiveResponse
 * @date 06/07/2012
 */
class SONcoaLiveTypeRunNCOALiveResponse extends SONcoaLiveWsdlClass
{
	/**
	 * The RunNCOALiveResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SONcoaLiveTypeNCOAAddressResponse
	 */
	public $RunNCOALiveResult;
	/**
	 * Constructor
	 * @param SONcoaLiveTypeNCOAAddressResponse RunNCOALiveResult
	 * @return SONcoaLiveTypeRunNCOALiveResponse
	 */
	public function __construct($_RunNCOALiveResult = null)
	{
		parent::__construct(array('RunNCOALiveResult'=>$_RunNCOALiveResult));
	}
	/**
	 * Set RunNCOALiveResult
	 * @param NCOAAddressResponse RunNCOALiveResult
	 * @return NCOAAddressResponse
	 */
	public function setRunNCOALiveResult($_RunNCOALiveResult)
	{
		return ($this->RunNCOALiveResult = $_RunNCOALiveResult);
	}
	/**
	 * Get RunNCOALiveResult
	 * @return SONcoaLiveTypeNCOAAddressResponse
	 */
	public function getRunNCOALiveResult()
	{
		return $this->RunNCOALiveResult;
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