<?php
/**
 * Class file for YMailTypeAllDisposableAddresses
 * @date 02/07/2012
 */
/**
 * Class YMailTypeAllDisposableAddresses
 * @date 02/07/2012
 */
class YMailTypeAllDisposableAddresses extends YMailWsdlClass
{
	/**
	 * The deaName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeDisposableAddress
	 */
	public $deaName;
	/**
	 * The deaNamesTotal
	 * Meta informations :
	 * 	- use : optional
	 * @var int
	 */
	public $deaNamesTotal;
	/**
	 * Constructor
	 * @param YMailTypeDisposableAddress deaName
	 * @param int deaNamesTotal
	 * @return YMailTypeAllDisposableAddresses
	 */
	public function __construct($_deaName = null,$_deaNamesTotal = null)
	{
		parent::__construct(array('deaName'=>$_deaName,'deaNamesTotal'=>$_deaNamesTotal));
	}
	/**
	 * Set deaName
	 * @param DisposableAddress deaName
	 * @return DisposableAddress
	 */
	public function setDeaName($_deaName)
	{
		return ($this->deaName = $_deaName);
	}
	/**
	 * Get deaName
	 * @return YMailTypeDisposableAddress
	 */
	public function getDeaName()
	{
		return $this->deaName;
	}
	/**
	 * Set deaNamesTotal
	 * @param int deaNamesTotal
	 * @return int
	 */
	public function setDeaNamesTotal($_deaNamesTotal)
	{
		return ($this->deaNamesTotal = $_deaNamesTotal);
	}
	/**
	 * Get deaNamesTotal
	 * @return int
	 */
	public function getDeaNamesTotal()
	{
		return $this->deaNamesTotal;
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