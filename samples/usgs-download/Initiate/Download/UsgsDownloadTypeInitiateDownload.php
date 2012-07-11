<?php
/**
 * Class file for UsgsDownloadTypeInitiateDownload
 * @date 08/07/2012
 */
/**
 * Class UsgsDownloadTypeInitiateDownload
 * @date 08/07/2012
 */
class UsgsDownloadTypeInitiateDownload extends UsgsDownloadWsdlClass
{
	/**
	 * The siz
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $siz;
	/**
	 * The key
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $key;
	/**
	 * The ras
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $ras;
	/**
	 * The pfm
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $pfm;
	/**
	 * The imsurl
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $imsurl;
	/**
	 * The ms
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $ms;
	/**
	 * The att
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $att;
	/**
	 * The lay
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $lay;
	/**
	 * The fid
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $fid;
	/**
	 * The dlpre
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $dlpre;
	/**
	 * The lft
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $lft;
	/**
	 * The rgt
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $rgt;
	/**
	 * The top
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $top;
	/**
	 * The bot
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $bot;
	/**
	 * The wmd
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $wmd;
	/**
	 * The mur
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $mur;
	/**
	 * The mcd
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $mcd;
	/**
	 * The mdf
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $mdf;
	/**
	 * The arc
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $arc;
	/**
	 * The sde
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $sde;
	/**
	 * The msd
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $msd;
	/**
	 * The zun
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $zun;
	/**
	 * The prj
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $prj;
	/**
	 * The rsp
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $rsp;
	/**
	 * The bnd
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $bnd;
	/**
	 * The bndnm
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $bndnm;
	/**
	 * The csx
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $csx;
	/**
	 * The csy
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $csy;
	/**
	 * The ics
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $ics;
	/**
	 * The PL
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $PL;
	/**
	 * The MSU
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $MSU;
	/**
	 * The MSS
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $MSS;
	/**
	 * The MSL
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $MSL;
	/**
	 * The MSEA
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $MSEA;
	/**
	 * The DLS
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $DLS;
	/**
	 * The FID
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $FID;
	/**
	 * The ARC
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $ARC;
	/**
	 * The DLA
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $DLA;
	/**
	 * The EIDL
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $EIDL;
	/**
	 * The DB
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $DB;
	/**
	 * The ORIG
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $ORIG;
	/**
	 * The bulkID
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $bulkID;
	/**
	 * Constructor
	 * @param string siz
	 * @param string key
	 * @param string ras
	 * @param string pfm
	 * @param string imsurl
	 * @param string ms
	 * @param string att
	 * @param string lay
	 * @param string fid
	 * @param string dlpre
	 * @param string lft
	 * @param string rgt
	 * @param string top
	 * @param string bot
	 * @param string wmd
	 * @param string mur
	 * @param string mcd
	 * @param string mdf
	 * @param string arc
	 * @param string sde
	 * @param string msd
	 * @param string zun
	 * @param string prj
	 * @param string rsp
	 * @param string bnd
	 * @param string bndnm
	 * @param string csx
	 * @param string csy
	 * @param string ics
	 * @param string PL
	 * @param string MSU
	 * @param string MSS
	 * @param string MSL
	 * @param string MSEA
	 * @param string DLS
	 * @param string FID
	 * @param string ARC
	 * @param string DLA
	 * @param string EIDL
	 * @param string DB
	 * @param string ORIG
	 * @param string bulkID
	 * @return UsgsDownloadTypeInitiateDownload
	 */
	public function __construct($_siz = null,$_key = null,$_ras = null,$_pfm = null,$_imsurl = null,$_ms = null,$_att = null,$_lay = null,$_fid = null,$_dlpre = null,$_lft = null,$_rgt = null,$_top = null,$_bot = null,$_wmd = null,$_mur = null,$_mcd = null,$_mdf = null,$_arc = null,$_sde = null,$_msd = null,$_zun = null,$_prj = null,$_rsp = null,$_bnd = null,$_bndnm = null,$_csx = null,$_csy = null,$_ics = null,$_PL = null,$_MSU = null,$_MSS = null,$_MSL = null,$_MSEA = null,$_DLS = null,$_FID = null,$_ARC = null,$_DLA = null,$_EIDL = null,$_DB = null,$_ORIG = null,$_bulkID = null)
	{
		parent::__construct(array('siz'=>$_siz,'key'=>$_key,'ras'=>$_ras,'pfm'=>$_pfm,'imsurl'=>$_imsurl,'ms'=>$_ms,'att'=>$_att,'lay'=>$_lay,'fid'=>$_fid,'dlpre'=>$_dlpre,'lft'=>$_lft,'rgt'=>$_rgt,'top'=>$_top,'bot'=>$_bot,'wmd'=>$_wmd,'mur'=>$_mur,'mcd'=>$_mcd,'mdf'=>$_mdf,'arc'=>$_arc,'sde'=>$_sde,'msd'=>$_msd,'zun'=>$_zun,'prj'=>$_prj,'rsp'=>$_rsp,'bnd'=>$_bnd,'bndnm'=>$_bndnm,'csx'=>$_csx,'csy'=>$_csy,'ics'=>$_ics,'PL'=>$_PL,'MSU'=>$_MSU,'MSS'=>$_MSS,'MSL'=>$_MSL,'MSEA'=>$_MSEA,'DLS'=>$_DLS,'FID'=>$_FID,'ARC'=>$_ARC,'DLA'=>$_DLA,'EIDL'=>$_EIDL,'DB'=>$_DB,'ORIG'=>$_ORIG,'bulkID'=>$_bulkID));
	}
	/**
	 * Set siz
	 * @param string siz
	 * @return string
	 */
	public function setSiz($_siz)
	{
		return ($this->siz = $_siz);
	}
	/**
	 * Get siz
	 * @return string
	 */
	public function getSiz()
	{
		return $this->siz;
	}
	/**
	 * Set key
	 * @param string key
	 * @return string
	 */
	public function setKey($_key)
	{
		return ($this->key = $_key);
	}
	/**
	 * Get key
	 * @return string
	 */
	public function getKey()
	{
		return $this->key;
	}
	/**
	 * Set ras
	 * @param string ras
	 * @return string
	 */
	public function setRas($_ras)
	{
		return ($this->ras = $_ras);
	}
	/**
	 * Get ras
	 * @return string
	 */
	public function getRas()
	{
		return $this->ras;
	}
	/**
	 * Set pfm
	 * @param string pfm
	 * @return string
	 */
	public function setPfm($_pfm)
	{
		return ($this->pfm = $_pfm);
	}
	/**
	 * Get pfm
	 * @return string
	 */
	public function getPfm()
	{
		return $this->pfm;
	}
	/**
	 * Set imsurl
	 * @param string imsurl
	 * @return string
	 */
	public function setImsurl($_imsurl)
	{
		return ($this->imsurl = $_imsurl);
	}
	/**
	 * Get imsurl
	 * @return string
	 */
	public function getImsurl()
	{
		return $this->imsurl;
	}
	/**
	 * Set ms
	 * @param string ms
	 * @return string
	 */
	public function setMs($_ms)
	{
		return ($this->ms = $_ms);
	}
	/**
	 * Get ms
	 * @return string
	 */
	public function getMs()
	{
		return $this->ms;
	}
	/**
	 * Set att
	 * @param string att
	 * @return string
	 */
	public function setAtt($_att)
	{
		return ($this->att = $_att);
	}
	/**
	 * Get att
	 * @return string
	 */
	public function getAtt()
	{
		return $this->att;
	}
	/**
	 * Set lay
	 * @param string lay
	 * @return string
	 */
	public function setLay($_lay)
	{
		return ($this->lay = $_lay);
	}
	/**
	 * Get lay
	 * @return string
	 */
	public function getLay()
	{
		return $this->lay;
	}
	/**
	 * Set fid
	 * @param string fid
	 * @return string
	 */
	public function setFid($_fid)
	{
		return ($this->fid = $_fid);
	}
	/**
	 * Get fid
	 * @return string
	 */
	public function getFid()
	{
		return $this->fid;
	}
	/**
	 * Set dlpre
	 * @param string dlpre
	 * @return string
	 */
	public function setDlpre($_dlpre)
	{
		return ($this->dlpre = $_dlpre);
	}
	/**
	 * Get dlpre
	 * @return string
	 */
	public function getDlpre()
	{
		return $this->dlpre;
	}
	/**
	 * Set lft
	 * @param string lft
	 * @return string
	 */
	public function setLft($_lft)
	{
		return ($this->lft = $_lft);
	}
	/**
	 * Get lft
	 * @return string
	 */
	public function getLft()
	{
		return $this->lft;
	}
	/**
	 * Set rgt
	 * @param string rgt
	 * @return string
	 */
	public function setRgt($_rgt)
	{
		return ($this->rgt = $_rgt);
	}
	/**
	 * Get rgt
	 * @return string
	 */
	public function getRgt()
	{
		return $this->rgt;
	}
	/**
	 * Set top
	 * @param string top
	 * @return string
	 */
	public function setTop($_top)
	{
		return ($this->top = $_top);
	}
	/**
	 * Get top
	 * @return string
	 */
	public function getTop()
	{
		return $this->top;
	}
	/**
	 * Set bot
	 * @param string bot
	 * @return string
	 */
	public function setBot($_bot)
	{
		return ($this->bot = $_bot);
	}
	/**
	 * Get bot
	 * @return string
	 */
	public function getBot()
	{
		return $this->bot;
	}
	/**
	 * Set wmd
	 * @param string wmd
	 * @return string
	 */
	public function setWmd($_wmd)
	{
		return ($this->wmd = $_wmd);
	}
	/**
	 * Get wmd
	 * @return string
	 */
	public function getWmd()
	{
		return $this->wmd;
	}
	/**
	 * Set mur
	 * @param string mur
	 * @return string
	 */
	public function setMur($_mur)
	{
		return ($this->mur = $_mur);
	}
	/**
	 * Get mur
	 * @return string
	 */
	public function getMur()
	{
		return $this->mur;
	}
	/**
	 * Set mcd
	 * @param string mcd
	 * @return string
	 */
	public function setMcd($_mcd)
	{
		return ($this->mcd = $_mcd);
	}
	/**
	 * Get mcd
	 * @return string
	 */
	public function getMcd()
	{
		return $this->mcd;
	}
	/**
	 * Set mdf
	 * @param string mdf
	 * @return string
	 */
	public function setMdf($_mdf)
	{
		return ($this->mdf = $_mdf);
	}
	/**
	 * Get mdf
	 * @return string
	 */
	public function getMdf()
	{
		return $this->mdf;
	}
	/**
	 * Set arc
	 * @param string arc
	 * @return string
	 */
	public function setArc($_arc)
	{
		return ($this->arc = $_arc);
	}
	/**
	 * Get arc
	 * @return string
	 */
	public function getArc()
	{
		return $this->arc;
	}
	/**
	 * Set sde
	 * @param string sde
	 * @return string
	 */
	public function setSde($_sde)
	{
		return ($this->sde = $_sde);
	}
	/**
	 * Get sde
	 * @return string
	 */
	public function getSde()
	{
		return $this->sde;
	}
	/**
	 * Set msd
	 * @param string msd
	 * @return string
	 */
	public function setMsd($_msd)
	{
		return ($this->msd = $_msd);
	}
	/**
	 * Get msd
	 * @return string
	 */
	public function getMsd()
	{
		return $this->msd;
	}
	/**
	 * Set zun
	 * @param string zun
	 * @return string
	 */
	public function setZun($_zun)
	{
		return ($this->zun = $_zun);
	}
	/**
	 * Get zun
	 * @return string
	 */
	public function getZun()
	{
		return $this->zun;
	}
	/**
	 * Set prj
	 * @param string prj
	 * @return string
	 */
	public function setPrj($_prj)
	{
		return ($this->prj = $_prj);
	}
	/**
	 * Get prj
	 * @return string
	 */
	public function getPrj()
	{
		return $this->prj;
	}
	/**
	 * Set rsp
	 * @param string rsp
	 * @return string
	 */
	public function setRsp($_rsp)
	{
		return ($this->rsp = $_rsp);
	}
	/**
	 * Get rsp
	 * @return string
	 */
	public function getRsp()
	{
		return $this->rsp;
	}
	/**
	 * Set bnd
	 * @param string bnd
	 * @return string
	 */
	public function setBnd($_bnd)
	{
		return ($this->bnd = $_bnd);
	}
	/**
	 * Get bnd
	 * @return string
	 */
	public function getBnd()
	{
		return $this->bnd;
	}
	/**
	 * Set bndnm
	 * @param string bndnm
	 * @return string
	 */
	public function setBndnm($_bndnm)
	{
		return ($this->bndnm = $_bndnm);
	}
	/**
	 * Get bndnm
	 * @return string
	 */
	public function getBndnm()
	{
		return $this->bndnm;
	}
	/**
	 * Set csx
	 * @param string csx
	 * @return string
	 */
	public function setCsx($_csx)
	{
		return ($this->csx = $_csx);
	}
	/**
	 * Get csx
	 * @return string
	 */
	public function getCsx()
	{
		return $this->csx;
	}
	/**
	 * Set csy
	 * @param string csy
	 * @return string
	 */
	public function setCsy($_csy)
	{
		return ($this->csy = $_csy);
	}
	/**
	 * Get csy
	 * @return string
	 */
	public function getCsy()
	{
		return $this->csy;
	}
	/**
	 * Set ics
	 * @param string ics
	 * @return string
	 */
	public function setIcs($_ics)
	{
		return ($this->ics = $_ics);
	}
	/**
	 * Get ics
	 * @return string
	 */
	public function getIcs()
	{
		return $this->ics;
	}
	/**
	 * Set PL
	 * @param string PL
	 * @return string
	 */
	public function setPL($_PL)
	{
		return ($this->PL = $_PL);
	}
	/**
	 * Get PL
	 * @return string
	 */
	public function getPL()
	{
		return $this->PL;
	}
	/**
	 * Set MSU
	 * @param string MSU
	 * @return string
	 */
	public function setMSU($_MSU)
	{
		return ($this->MSU = $_MSU);
	}
	/**
	 * Get MSU
	 * @return string
	 */
	public function getMSU()
	{
		return $this->MSU;
	}
	/**
	 * Set MSS
	 * @param string MSS
	 * @return string
	 */
	public function setMSS($_MSS)
	{
		return ($this->MSS = $_MSS);
	}
	/**
	 * Get MSS
	 * @return string
	 */
	public function getMSS()
	{
		return $this->MSS;
	}
	/**
	 * Set MSL
	 * @param string MSL
	 * @return string
	 */
	public function setMSL($_MSL)
	{
		return ($this->MSL = $_MSL);
	}
	/**
	 * Get MSL
	 * @return string
	 */
	public function getMSL()
	{
		return $this->MSL;
	}
	/**
	 * Set MSEA
	 * @param string MSEA
	 * @return string
	 */
	public function setMSEA($_MSEA)
	{
		return ($this->MSEA = $_MSEA);
	}
	/**
	 * Get MSEA
	 * @return string
	 */
	public function getMSEA()
	{
		return $this->MSEA;
	}
	/**
	 * Set DLS
	 * @param string DLS
	 * @return string
	 */
	public function setDLS($_DLS)
	{
		return ($this->DLS = $_DLS);
	}
	/**
	 * Get DLS
	 * @return string
	 */
	public function getDLS()
	{
		return $this->DLS;
	}
	/**
	 * Set FID
	 * @param string FID
	 * @return string
	 */
	public function setFID($_FID)
	{
		return ($this->FID = $_FID);
	}
	/**
	 * Get FID
	 * @return string
	 */
	public function getFID()
	{
		return $this->FID;
	}
	/**
	 * Set ARC
	 * @param string ARC
	 * @return string
	 */
	public function setARC($_ARC)
	{
		return ($this->ARC = $_ARC);
	}
	/**
	 * Get ARC
	 * @return string
	 */
	public function getARC()
	{
		return $this->ARC;
	}
	/**
	 * Set DLA
	 * @param string DLA
	 * @return string
	 */
	public function setDLA($_DLA)
	{
		return ($this->DLA = $_DLA);
	}
	/**
	 * Get DLA
	 * @return string
	 */
	public function getDLA()
	{
		return $this->DLA;
	}
	/**
	 * Set EIDL
	 * @param string EIDL
	 * @return string
	 */
	public function setEIDL($_EIDL)
	{
		return ($this->EIDL = $_EIDL);
	}
	/**
	 * Get EIDL
	 * @return string
	 */
	public function getEIDL()
	{
		return $this->EIDL;
	}
	/**
	 * Set DB
	 * @param string DB
	 * @return string
	 */
	public function setDB($_DB)
	{
		return ($this->DB = $_DB);
	}
	/**
	 * Get DB
	 * @return string
	 */
	public function getDB()
	{
		return $this->DB;
	}
	/**
	 * Set ORIG
	 * @param string ORIG
	 * @return string
	 */
	public function setORIG($_ORIG)
	{
		return ($this->ORIG = $_ORIG);
	}
	/**
	 * Get ORIG
	 * @return string
	 */
	public function getORIG()
	{
		return $this->ORIG;
	}
	/**
	 * Set bulkID
	 * @param string bulkID
	 * @return string
	 */
	public function setBulkID($_bulkID)
	{
		return ($this->bulkID = $_bulkID);
	}
	/**
	 * Get bulkID
	 * @return string
	 */
	public function getBulkID()
	{
		return $this->bulkID;
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