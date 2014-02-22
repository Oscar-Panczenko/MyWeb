<?php
// src/MyWeb/SiteBundle/Entity/Enquiry.php

namespace MyWeb\SiteBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class Enquiry
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string")
     */

    protected $email;

    /**
     * @ORM\Column(type="text")
     */

    protected $body;


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
     * Set email
     *
     * @param string $email
     * @return Enquiry
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
     * Set body
     *
     * @param string $body
     * @return Enquiry
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        //$metadata->addPropertyConstraint('name', new NotBlank());

        $metadata->addPropertyConstraint('email', new Email(array(
            'message' => 'Please enter a valid Email adress.'
        )));

        //$metadata->addPropertyConstraint('subject', new NotBlank());
        //$metadata->addPropertyConstraint('subject', new Length(array('max'=>50)));
        $metadata->addPropertyConstraint('body', new Length(array('min'=>10)));
        $metadata->addPropertyConstraint('body', new Length(array('max'=>300)));
    }
}
