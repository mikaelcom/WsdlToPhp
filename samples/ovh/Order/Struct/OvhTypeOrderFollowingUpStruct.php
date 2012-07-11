<?php
/**
 * Class file for OvhTypeOrderFollowingUpStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeOrderFollowingUpStruct
 * @date 02/07/2012
 */
class OvhTypeOrderFollowingUpStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * The urlId
	 * @var string
	 */
	public $urlId;
	/**
	 * The procedure
	 * @var string
	 */
	public $procedure;
	/**
	 * The install
	 * @var string
	 */
	public $install;
	/**
	 * The shipping
	 * @var string
	 */
	public $shipping;
	/**
	 * The cloture
	 * @var string
	 */
	public $cloture;
	/**
	 * The avancement
	 * @var string
	 */
	public $avancement;
	/**
	 * Constructor
	 * @param string id
	 * @param string urlId
	 * @param string procedure
	 * @param string install
	 * @param string shipping
	 * @param string cloture
	 * @param string avancement
	 * @return OvhTypeOrderFollowingUpStruct
	 */
	public function __construct($_id = null,$_urlId = null,$_procedure = null,$_install = null,$_shipping = null,$_cloture = null,$_avancement = null)
	{
		parent::__construct(array('id'=>$_id,'urlId'=>$_urlId,'procedure'=>$_procedure,'install'=>$_install,'shipping'=>$_shipping,'cloture'=>$_cloture,'avancement'=>$_avancement));
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
	 * Set urlId
	 * @param string urlId
	 * @return string
	 */
	public function setUrlId($_urlId)
	{
		return ($this->urlId = $_urlId);
	}
	/**
	 * Get urlId
	 * @return string
	 */
	public function getUrlId()
	{
		return $this->urlId;
	}
	/**
	 * Set procedure
	 * @param string procedure
	 * @return string
	 */
	public function setProcedure($_procedure)
	{
		return ($this->procedure = $_procedure);
	}
	/**
	 * Get procedure
	 * @return string
	 */
	public function getProcedure()
	{
		return $this->procedure;
	}
	/**
	 * Set install
	 * @param string install
	 * @return string
	 */
	public function setInstall($_install)
	{
		return ($this->install = $_install);
	}
	/**
	 * Get install
	 * @return string
	 */
	public function getInstall()
	{
		return $this->install;
	}
	/**
	 * Set shipping
	 * @param string shipping
	 * @return string
	 */
	public function setShipping($_shipping)
	{
		return ($this->shipping = $_shipping);
	}
	/**
	 * Get shipping
	 * @return string
	 */
	public function getShipping()
	{
		return $this->shipping;
	}
	/**
	 * Set cloture
	 * @param string cloture
	 * @return string
	 */
	public function setCloture($_cloture)
	{
		return ($this->cloture = $_cloture);
	}
	/**
	 * Get cloture
	 * @return string
	 */
	public function getCloture()
	{
		return $this->cloture;
	}
	/**
	 * Set avancement
	 * @param string avancement
	 * @return string
	 */
	public function setAvancement($_avancement)
	{
		return ($this->avancement = $_avancement);
	}
	/**
	 * Get avancement
	 * @return string
	 */
	public function getAvancement()
	{
		return $this->avancement;
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