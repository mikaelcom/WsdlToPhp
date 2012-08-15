<?php
/**
 * Class file for BioIDWSTypeBiometricClassID
 * @date 15/08/2012
 */
/**
 * Class BioIDWSTypeBiometricClassID
 * @date 15/08/2012
 */
class BioIDWSTypeBiometricClassID extends BioIDWSWsdlClass
{
	/**
	 * The ClassID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $ClassID;
	/**
	 * The Partition
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $Partition;
	/**
	 * The Storage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Storage;
	/**
	 * Constructor
	 * @param int ClassID
	 * @param int Partition
	 * @param string Storage
	 * @return BioIDWSTypeBiometricClassID
	 */
	public function __construct($_ClassID = null,$_Partition = null,$_Storage = null)
	{
		parent::__construct(array('ClassID'=>$_ClassID,'Partition'=>$_Partition,'Storage'=>$_Storage));
	}
	/**
	 * Set ClassID
	 * @param int ClassID
	 * @return int
	 */
	public function setClassID($_ClassID)
	{
		return ($this->ClassID = $_ClassID);
	}
	/**
	 * Get ClassID
	 * @return int
	 */
	public function getClassID()
	{
		return $this->ClassID;
	}
	/**
	 * Set Partition
	 * @param int Partition
	 * @return int
	 */
	public function setPartition($_Partition)
	{
		return ($this->Partition = $_Partition);
	}
	/**
	 * Get Partition
	 * @return int
	 */
	public function getPartition()
	{
		return $this->Partition;
	}
	/**
	 * Set Storage
	 * @param string Storage
	 * @return string
	 */
	public function setStorage($_Storage)
	{
		return ($this->Storage = $_Storage);
	}
	/**
	 * Get Storage
	 * @return string
	 */
	public function getStorage()
	{
		return $this->Storage;
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