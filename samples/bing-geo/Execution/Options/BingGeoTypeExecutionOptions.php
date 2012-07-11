<?php
/**
 * Class file for BingGeoTypeExecutionOptions
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeExecutionOptions
 * @date 02/07/2012
 */
class BingGeoTypeExecutionOptions extends BingGeoWsdlClass
{
	/**
	 * The SuppressFaults
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $SuppressFaults;
	/**
	 * Constructor
	 * @param boolean SuppressFaults
	 * @return BingGeoTypeExecutionOptions
	 */
	public function __construct($_SuppressFaults = null)
	{
		parent::__construct(array('SuppressFaults'=>$_SuppressFaults));
	}
	/**
	 * Set SuppressFaults
	 * @param boolean SuppressFaults
	 * @return boolean
	 */
	public function setSuppressFaults($_SuppressFaults)
	{
		return ($this->SuppressFaults = $_SuppressFaults);
	}
	/**
	 * Get SuppressFaults
	 * @return boolean
	 */
	public function getSuppressFaults()
	{
		return $this->SuppressFaults;
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