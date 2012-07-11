<?php
/**
 * Class file for YMailTypeListFolders
 * @date 02/07/2012
 */
/**
 * Class YMailTypeListFolders
 * @date 02/07/2012
 */
class YMailTypeListFolders extends YMailWsdlClass
{
	/**
	 * The resetMessengerUnseen
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- default : false
	 * @var boolean
	 */
	public $resetMessengerUnseen;
	/**
	 * Constructor
	 * @param boolean resetMessengerUnseen
	 * @return YMailTypeListFolders
	 */
	public function __construct($_resetMessengerUnseen = false)
	{
		parent::__construct(array('resetMessengerUnseen'=>$_resetMessengerUnseen));
	}
	/**
	 * Set resetMessengerUnseen
	 * @param boolean resetMessengerUnseen
	 * @return boolean
	 */
	public function setResetMessengerUnseen($_resetMessengerUnseen)
	{
		return ($this->resetMessengerUnseen = $_resetMessengerUnseen);
	}
	/**
	 * Get resetMessengerUnseen
	 * @return boolean
	 */
	public function getResetMessengerUnseen()
	{
		return $this->resetMessengerUnseen;
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