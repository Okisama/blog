<?php
/**
 * Created by PhpStorm.
 * User: rokka
 * Date: 30.12.16
 * Time: 23:33
 */

namespace Rokka\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="comment")
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     *
     * @ORM\Column(type="string", length=300)
     * @Assert\NotBlank()
     */
    private $text;


    /**
     * @ORM\ManyToOne(targetEntity="Post", inversedBy="comment")
     */
    private $post;

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
     * Set text
     *
     * @param string $text
     *
     * @return Comment
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set post
     *
     * @param \Rokka\BlogBundle\Entity\Post $post
     *
     * @return Comment
     */
    public function setPost(\Rokka\BlogBundle\Entity\Post $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \Rokka\BlogBundle\Entity\Post
     */
    public function getPost()
    {
        return $this->post;
    }
}
