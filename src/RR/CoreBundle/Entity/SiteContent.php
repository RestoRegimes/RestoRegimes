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
     * @Assert\Length(max=25,maxMessage="Erreur libelle")
     */
    private $typeContent;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255,nullable=true)
     * @Assert\Length(max=255,maxMessage="le titre doit faire au maximum {{ limit }} caractères."))
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="subtitle", type="string", length=255,nullable=true)
     * @Assert\Length(max=255,maxMessage="le sous-titre doit faire au maximum {{ limit }} caractères.")
     */
    private $subtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=4096,nullable=true)
     * @Assert\Length(max=4096,maxMessage="le contenu doit faire au maximum {{ limit }} caractères.")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="footer", type="string", length=255,nullable=true)
     * @Assert\Length(max=255,maxMessage="le footer doit faire au maximum {{ limit }} caractères.")
     */
    private $footer;


    /**
     * @ORM\OnetoOne(targetEntity="RR\CoreBundle\Entity\SiteImage",cascade={"persist","remove"})
     * @ORM\JoinColumn(onDelete="CASCADE")
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
     * @param string $content
     *
     * @return SiteContent
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
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
        $image->setSitecontent($this);
    
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
