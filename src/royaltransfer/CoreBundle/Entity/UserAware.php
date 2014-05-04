<?php

namespace royaltransfer\CoreBundle\Entity;

interface UserAware
{
    public function setUser(UserInterface $user = null);
}
