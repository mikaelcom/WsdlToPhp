<?php
/**
 * Class file for SPDocumentWkTypeCreateDws
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkTypeCreateDws
 * @date 06/07/2012
 */
class SPDocumentWkTypeCreateDws extends SPDocumentWkWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The users
	 * @var string
	 */
	public $users;
	/**
	 * The title
	 * @var string
	 */
	public $title;
	/**
	 * The documents
	 * @var string
	 */
	public $documents;
	/**
	 * Constructor
	 * @param string name
	 * @param string users
	 * @param string title
	 * @param string documents
	 * @return SPDocumentWkTypeCreateDws
	 */
	public function __construct($_name = null,$_users = null,$_title = null,$_documents = null)
	{
		parent::__construct(array('name'=>$_name,'users'=>$_users,'title'=>$_title,'documents'=>$_documents));
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
	 * Set users
	 * @param string users
	 * @return string
	 */
	public function setUsers($_users)
	{
		return ($this->users = $_users);
	}
	/**
	 * Get users
	 * @return string
	 */
	public function getUsers()
	{
		return $this->users;
	}
	/**
	 * Set title
	 * @param string title
	 * @return string
	 */
	public function setTitle($_title)
	{
		return ($this->title = $_title);
	}
	/**
	 * Get title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}
	/**
	 * Set documents
	 * @param string documents
	 * @return string
	 */
	public function setDocuments($_documents)
	{
		return ($this->documents = $_documents);
	}
	/**
	 * Get documents
	 * @return string
	 */
	public function getDocuments()
	{
		return $this->documents;
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