<?php

namespace AppBundle\Repository;

/**
 * Interface BookmarkRepositoryInterface
 * @package AppBundle\Repository
 */
interface BookmarkRepositoryInterface
{
    /**
     * @return mixed
     */
    public function findAll();

    /**
     * @param integer $id Single record index
     * @return mixed
     */
    public function findOneById($id);
}
