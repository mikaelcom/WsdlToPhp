<?php
/**
 * Class file for OvhTypeManagedServicesPartitionStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeManagedServicesPartitionStruct
 * @date 02/07/2012
 */
class OvhTypeManagedServicesPartitionStruct extends OvhWsdlClass
{
	/**
	 * The idZfs
	 * @var string
	 */
	public $idZfs;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The size
	 * @var string
	 */
	public $size;
	/**
	 * The used
	 * @var string
	 */
	public $used;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * The accessList
	 * @var OvhTypeMyArrayOfManagedServicesAclStructType
	 */
	public $accessList;
	/**
	 * Constructor
	 * @param string idZfs
	 * @param string name
	 * @param string size
	 * @param string used
	 * @param string state
	 * @param OvhTypeMyArrayOfManagedServicesAclStructType accessList
	 * @return OvhTypeManagedServicesPartitionStruct
	 */
	public function __construct($_idZfs = null,$_name = null,$_size = null,$_used = null,$_state = null,$_accessList = null)
	{
		parent::__construct(array('idZfs'=>$_idZfs,'name'=>$_name,'size'=>$_size,'used'=>$_used,'state'=>$_state,'accessList'=>new OvhTypeMyArrayOfManagedServicesAclStructType($_accessList)));
	}
	/**
	 * Set idZfs
	 * @param string idZfs
	 * @return string
	 */
	public function setIdZfs($_idZfs)
	{
		return ($this->idZfs = $_idZfs);
	}
	/**
	 * Get idZfs
	 * @return string
	 */
	public function getIdZfs()
	{
		return $this->idZfs;
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set size
	 * @param string size
	 * @return string
	 */
	public function setSize($_size)
	{
		return ($this->size = $_size);
	}
	/**
	 * Get size
	 * @return string
	 */
	public function getSize()
	{
		return $this->size;
	}
	/**
	 * Set used
	 * @param string used
	 * @return string
	 */
	public function setUsed($_used)
	{
		return ($this->used = $_used);
	}
	/**
	 * Get used
	 * @return string
	 */
	public function getUsed()
	{
		return $this->used;
	}
	/**
	 * Set state
	 * @param string state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get state
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
	}
	/**
	 * Set accessList
	 * @param MyArrayOfManagedServicesAclStructType accessList
	 * @return MyArrayOfManagedServicesAclStructType
	 */
	public function setAccessList($_accessList)
	{
		return ($this->accessList = $_accessList);
	}
	/**
	 * Get accessList
	 * @return OvhTypeMyArrayOfManagedServicesAclStructType
	 */
	public function getAccessList()
	{
		return $this->accessList;
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