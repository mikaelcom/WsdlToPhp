<?php
/**
 * Class file for SPCopyTypeFieldInformationCollection
 * @date 07/07/2012
 */
/**
 * Class SPCopyTypeFieldInformationCollection
 * @date 07/07/2012
 */
class SPCopyTypeFieldInformationCollection extends SPCopyWsdlClass
{
	/**
	 * The FieldInformation
	 * @var SPCopyTypeFieldInformation
	 */
	public $FieldInformation;
	/**
	 * Constructor
	 * @param SPCopyTypeFieldInformation FieldInformation
	 * @return SPCopyTypeFieldInformationCollection
	 */
	public function __construct($_FieldInformation = null)
	{
		parent::__construct(array('FieldInformation'=>$_FieldInformation));
	}
	/**
	 * Set FieldInformation
	 * @param FieldInformation FieldInformation
	 * @return FieldInformation
	 */
	public function setFieldInformation($_FieldInformation)
	{
		return ($this->FieldInformation = $_FieldInformation);
	}
	/**
	 * Get FieldInformation
	 * @return SPCopyTypeFieldInformation
	 */
	public function getFieldInformation()
	{
		return $this->FieldInformation;
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