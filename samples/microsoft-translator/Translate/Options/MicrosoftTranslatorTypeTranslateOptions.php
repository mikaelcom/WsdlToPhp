<?php
/**
 * Class file for MicrosoftTranslatorTypeTranslateOptions
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeTranslateOptions
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeTranslateOptions extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The Category
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Category;
	/**
	 * The ContentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $ContentType;
	/**
	 * The ReservedFlags
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $ReservedFlags;
	/**
	 * The State
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $State;
	/**
	 * The Uri
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Uri;
	/**
	 * The User
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $User;
	/**
	 * Constructor
	 * @param string Category
	 * @param string ContentType
	 * @param string ReservedFlags
	 * @param string State
	 * @param string Uri
	 * @param string User
	 * @return MicrosoftTranslatorTypeTranslateOptions
	 */
	public function __construct($_Category = null,$_ContentType = null,$_ReservedFlags = null,$_State = null,$_Uri = null,$_User = null)
	{
		parent::__construct(array('Category'=>$_Category,'ContentType'=>$_ContentType,'ReservedFlags'=>$_ReservedFlags,'State'=>$_State,'Uri'=>$_Uri,'User'=>$_User));
	}
	/**
	 * Set Category
	 * @param string Category
	 * @return string
	 */
	public function setCategory($_Category)
	{
		return ($this->Category = $_Category);
	}
	/**
	 * Get Category
	 * @return string
	 */
	public function getCategory()
	{
		return $this->Category;
	}
	/**
	 * Set ContentType
	 * @param string ContentType
	 * @return string
	 */
	public function setContentType($_ContentType)
	{
		return ($this->ContentType = $_ContentType);
	}
	/**
	 * Get ContentType
	 * @return string
	 */
	public function getContentType()
	{
		return $this->ContentType;
	}
	/**
	 * Set ReservedFlags
	 * @param string ReservedFlags
	 * @return string
	 */
	public function setReservedFlags($_ReservedFlags)
	{
		return ($this->ReservedFlags = $_ReservedFlags);
	}
	/**
	 * Get ReservedFlags
	 * @return string
	 */
	public function getReservedFlags()
	{
		return $this->ReservedFlags;
	}
	/**
	 * Set State
	 * @param string State
	 * @return string
	 */
	public function setState($_State)
	{
		return ($this->State = $_State);
	}
	/**
	 * Get State
	 * @return string
	 */
	public function getState()
	{
		return $this->State;
	}
	/**
	 * Set Uri
	 * @param string Uri
	 * @return string
	 */
	public function setUri($_Uri)
	{
		return ($this->Uri = $_Uri);
	}
	/**
	 * Get Uri
	 * @return string
	 */
	public function getUri()
	{
		return $this->Uri;
	}
	/**
	 * Set User
	 * @param string User
	 * @return string
	 */
	public function setUser($_User)
	{
		return ($this->User = $_User);
	}
	/**
	 * Get User
	 * @return string
	 */
	public function getUser()
	{
		return $this->User;
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