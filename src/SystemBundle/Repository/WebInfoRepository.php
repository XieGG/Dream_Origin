<?php
namespace SystemBundle\Repository;

/**
 * WebInfoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class WebInfoRepository extends \Doctrine\ORM\EntityRepository
{

    public function getFindInfo(){
        $result = $this->createQueryBuilder('a')
            ->getQuery()->getOneOrNullResult();
        return $result;
    }

}
