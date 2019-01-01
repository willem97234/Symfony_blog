<?php
/**
 * Created by PhpStorm.
 * User: Will
 * Date: 31/12/2018
 * Time: 00:47
 */

namespace App\Entity;

/**
 * Created by PhpStorm.
 * User: Will
 * Date: 30/12/2018
 * Time: 15:07
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @UniqueEntity(fields="email", message="This email address is already in use")
 */
class Comment
{
    /**
     * @ORM\Id;
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idComment;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    protected $Username;

    /**
     * @ORM\Column(type="string", length=40)
     */
    protected $content;

    /**
     * @ORM\Column(type="string", length=50)
     */


    public function eraseCredentials()
    {
        return null;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role = null)
    {
        $this->role = $role;
    }

    public function getRoles()
    {
        return [$this->getRole()];
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }



}