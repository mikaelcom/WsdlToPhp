<?php
/**
 * Class file for SPDocumentWkTypeRemoveDwsUser
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkTypeRemoveDwsUser
 * @date 06/07/2012
 */
class SPDocumentWkTypeRemoveDwsUser extends SPDocumentWkWsdlClass
{
	/**
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * Constructor
	 * @param string id
	 * @return SPDocumentWkTypeRemoveDwsUser
	 */
	public function __construct($_id = null)
	{
		parent::__construct(array('id'=>$_id));
	}
	/**
	 * Set id
	 * @param string id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return string
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