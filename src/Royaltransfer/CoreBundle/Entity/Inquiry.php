<?php

namespace royaltransfer\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * News
 *
 * @ORM\Table(name="inquiry")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="royaltransfer\CoreBundle\Entity\InquiryRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Inquiry
{

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
    * @var string
    * @Assert\NotNull(
    *     message = "To polje ne sme biti prazno!"
    * )
    * @ORM\Column(length=255)
    */
    private $name;
    
    /**
    * @var string
    * @ORM\Column(length=255)
    */
    private $company;
    
    /**
    * @var string
    * @Assert\NotNull(
    *     message = "To polje ne sme biti prazno!"
    * )
    * @ORM\Column(length=255)
    */
    private $telephone;
    
    /**
    * @var string
    * @Assert\NotNull(
    *     message = "To polje ne sme biti prazno!"
    * )
    * @Assert\Email(
    *     message = "Email: '{{ value }}' ni veljaven!"
    * )
    * @ORM\Column(length=255)
    */
    private $email;
    
    /**
    * @var string
    *
    * @ORM\Column(type="text")
    */
    protected $text;
    
    /**
     * @var string
     *
     * @ORM\Column(type="datetime")
     */
    protected $created;
    
    public function __construct() {
        $this->created = new \DateTime('now');
    }

    /**
     * Get Id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set Name
     *
     * @param string $name
     * @return Name
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    
    /**
     * Get Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set company
     *
     * @param string $company
     * @return company
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }
    
    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }
    
    /**
     * Set telephone
     *
     * @param string $telephone
     * @return telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }
    
    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }
    
    /**
     * Set email
     *
     * @param string $email
     * @return email
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
    
    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Set Text
     *
     * @param string $text
     * @return Text
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get Text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
    
    /**
     * Get Created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }
}