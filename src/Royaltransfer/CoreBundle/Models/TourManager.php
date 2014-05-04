<?php

namespace royaltransfer\CoreBundle\Models;

use Doctrine\ORM\EntityManager;
use Royaltransfer\CoreBundle\Entity\Tour;

class TourManager {

	private $class;
	private $em;
	private $repository;

    public function __construct(EntityManager $em, $class )
    {
        $this->em = $em;
        $this->class = $class;
        $this->repository = $em->getRepository($class);
    }
    public function findAllTours()
    {
        return $this->repository->findAll();
    }

    /**
     * Get single Tour by id
     *
     * @param int $id
     * @return Tour
     */
    public function findTour($id)
    {
    	return $this->repository->findOneById($id);
    }

    /**
     * Persist ad details
     *
     * @param  Tour $entity
     * @return Tour
     */
    public function saveTour($entity)
    {
    	if ($entity instanceof $this->class) {
    		$this->em->persist($entity);
        	$this->em->flush();
    	}
    	return $this;
    }

    public function deleteTour($id)
    {
        $entity = $this->findTour($id);

    	if ($entity instanceof $this->class) {
    		$this->em->remove($entity);
        	$this->em->flush();
    	}
    }
    /**
     * create new Tour
     *
     * @return Tour
     */
    public function createTour()
    {
        $class = $this->class;
        $entity = new $class();
        return $entity;
    }

}