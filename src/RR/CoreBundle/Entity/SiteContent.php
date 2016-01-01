<?php

namespace RR\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * SiteContent
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="RR\CoreBundle\Entity\SiteContentRepository")
 */
class SiteContent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type_content", type="string", length=25)
     */
    private $typeContent;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255,nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="subtitle", type="string", length=255,nullable=true)
     */
    private $subtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="content_1", type="string", length=255,nullable=true)
     */
    private $content1;

    /**
     * @var string
     *
     * @ORM\Column(name="content_2", type="string", length=255,nullable=true)
     */
    private $content2;

    /**
     * @var string
     *
     * @ORM\Column(name="content_3", type="string", length=255,nullable=true)
     */
    private $content3;

    /**
     * @var string
     *
     * @ORM\Column(name="footer", type="string", length=255,nullable=true)
     */
    private $footer;


    /**
     * @ORM\OnetoOne(targetEntity="RR\CoreBundle\Entity\SiteImage",cascade={"persist","remove"})
     * @Vich\UploadableField(mapping="site_image", fileNameProperty="imageName")
     */
    private $image;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean")
     * @Assert\Type(type="bool")
     */
    private $enabled=false;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set typeContent
     *
     * @param string $typeContent
     *
     * @return SiteContent
     */
    public function setTypeContent($typeContent)
    {
        $this->typeContent = $typeContent;
    
        return $this;
    }

    /**
     * Get typeContent
     *
     * @return string
     */
    public function getTypeContent()
    {
        return $this->typeContent;
    }

    /**
     * Set content1
     *
     * @param string $content1
     *
     * @return SiteContent
     */
    public function setContent1($content1)
    {
        $this->content1 = $content1;
    
        return $this;
    }

    /**
     * Get content1
     *
     * @return string
     */
    public function getContent1()
    {
        return $this->content1;
    }

    /**
     * Set content2
     *
     * @param string $content2
     *
     * @return SiteContent
     */
    public function setContent2($content2)
    {
        $this->content2 = $content2;
    
        return $this;
    }

    /**
     * Get content2
     *
     * @return string
     */
    public function getContent2()
    {
        return $this->content2;
    }

    /**
     * Set content3
     *
     * @param string $content3
     *
     * @return SiteContent
     */
    public function setContent3($content3)
    {
        $this->content3 = $content3;
    
        return $this;
    }

    /**
     * Get content3
     *
     * @return string
     */
    public function getContent3()
    {
        return $this->content3;
    }

    /**
     * @Assert\Callback
     */
    public function isContentValid(ExecutionContextInterface $context)
    {
        $arraytype=array(
            'FAQ','HOME','A_PROPOS','MENTION','CGU','ANNONCE','NEWS');

        if (!in_array($this->getTypeContent(),$arraytype,true)) {
            // La règle est violée, on définit l'erreur
            $context
                ->buildViolation('Type de Contenu invalide : FAQ / HOME / A_PROPOS / MENTION / CGU / ANNONCE / NEWS') // message
                ->atPath('type_content')                                                   // attribut de l'objet qui est violé
                ->addViolation() // ceci déclenche l'erreur, ne l'oubliez pas
            ;
        }

    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return SiteContent
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    
        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set image
     *
     * @param \RR\CoreBundle\Entity\SiteImage $image
     *
     * @return SiteContent
     */
    public function setImage(\RR\CoreBundle\Entity\SiteImage $image = null)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return \RR\CoreBundle\Entity\SiteImage
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return SiteContent
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set subtitle
     *
     * @param string $subtitle
     *
     * @return SiteContent
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    
        return $this;
    }

    /**
     * Get subtitle
     *
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set footer
     *
     * @param string $footer
     *
     * @return SiteContent
     */
    public function setFooter($footer)
    {
        $this->footer = $footer;
    
        return $this;
    }

    /**
     * Get footer
     *
     * @return string
     */
    public function getFooter()
    {
        return $this->footer;
    }
}
