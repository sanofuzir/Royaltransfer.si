<?php

namespace Squarebox\CoreBundle\Entity;

interface UserAware
{
    public function setUser(UserInterface $user = null);
}
