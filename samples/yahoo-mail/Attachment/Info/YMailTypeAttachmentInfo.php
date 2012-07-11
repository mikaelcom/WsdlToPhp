<?php
/**
 * Class file for YMailTypeAttachmentInfo
 * @date 02/07/2012
 */
/**
 * Class YMailTypeAttachmentInfo
 * @date 02/07/2012
 */
class YMailTypeAttachmentInfo extends YMailWsdlClass
{
	/**
	 * The name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $name;
	/**
	 * The size
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $size;
	/**
	 * The id
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $id;
	/**
	 * Constructor
	 * @param string name
	 * @param unsignedInt size
	 * @param unsignedInt id
	 * @return YMailTypeAttachmentInfo
	 */
	public function __construct($_name = null,$_size = null,$_id = null)
	{
		parent::__construct(array('name'=>$_name,'size'=>$_size,'id'=>$_id));
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
	 * @param unsignedInt size
	 * @return unsignedInt
	 */
	public function setSize($_size)
	{
		return ($this->size = $_size);
	}
	/**
	 * Get size
	 * @return unsignedInt
	 */
	public function getSize()
	{
		return $this->size;
	}
	/**
	 * Set id
	 * @param unsignedInt id
	 * @return unsignedInt
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return unsignedInt
	 */
	public function getId()
	{
		return $this->id;
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