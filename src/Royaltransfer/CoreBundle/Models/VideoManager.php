<?php

namespace royaltransfer\CoreBundle\Models;

use Doctrine\ORM\EntityManager;
use Royaltransfer\CoreBundle\Entity\Video;

class VideoManager {

	private $class;
	private $em;
	private $repository;

    public function __construct(EntityManager $em, $class )
    {
        $this->em = $em;
        $this->class = $class;
        $this->repository = $em->getRepository($class);
    }
    public function findAllVideos()
    {
        return $this->repository->findAll();
    }

    /**
     * Get single Video by id
     *
     * @param int $id
     * @return Video
     */
    public function findVideo($id)
    {
    	return $this->repository->findOneById($id);
    }

    /**
     * Persist Video details
     *
     * @param  Video $entity
     * @return Video
     */
    public function saveVideo($entity)
    {
        ini_set('memory_limit', '-1');
    	if ($entity instanceof $this->class) {
    		$this->em->persist($entity);
        	$this->em->flush();
    	}
    	return $this;
    }

    public function deleteVideo($id)
    {
        $entity = $this->findVideo($id);

    	if ($entity instanceof $this->class) {
    		$this->em->remove($entity);
        	$this->em->flush();
    	}
    }
    /**
     * create new Video
     *
     * @return Video
     */
    public function createVideo()
    {
        $class = $this->class;
        $entity = new $class();
        return $entity;
    }

}