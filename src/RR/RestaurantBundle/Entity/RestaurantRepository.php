<?php

namespace RR\RestaurantBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;

class RestaurantRepository extends EntityRepository
{

     public function myFindAll()
    {
        return $this
            ->createQueryBuilder('r')
            ->getQuery()
            ->getResult()
            ;
    }

    public function myFindOne($id)
    {
        $qb = $this->createQueryBuilder('r');

        $qb
            ->leftJoin('r.images','img')
            ->addSelect('img')
            ->leftJoin('r.images','i')
            ->where('r.id = :id')
            ->setParameter('id', $id)
        ;

        return $qb
            ->getQuery()
            ->getSingleResult()
            ;
    }

    public function whereCurrentYear(QueryBuilder $qb)
    {
        $qb
            ->andWhere('r.dateCreation BETWEEN :start AND :end')
            ->setParameter('start', new \Datetime(date('Y').'-01-01'))  // Date entre le 1er janvier de cette année
            ->setParameter('end',   new \Datetime(date('Y').'-12-31'))  // Et le 31 décembre de cette année
        ;
    }

    public function getRestaurants($page, $nbPerPage)
    {
        $query = $this->createQueryBuilder('r')
            ->leftJoin('r.regimes','reg')
            ->addSelect('reg')
            ->leftJoin('r.images','i')
            ->addSelect('i')
            ->orderBy('r.id', 'DESC')
            ->getQuery()
        ;
        $query
            // On définit l'annonce à partir de laquelle commencer la liste
            ->setFirstResult(($page-1) * $nbPerPage)
            // Ainsi que le nombre d'annonce à afficher sur une page
            ->setMaxResults($nbPerPage)
        ;

        // Enfin, on retourne l'objet Paginator correspondant à la requête construite
        // (n'oubliez pas le use correspondant en début de fichier)
        return new Paginator($query, true);
    }

    public function getImagesWithRestaurant($limit){
        $qb=$this
            ->createQueryBuilder('r')
            ->join('r.images','img')
            ->addSelect('img')
            ->setMaxResults($limit)
        ;

        return $qb
            ->getQuery()
            ->getResult()
            ;
    }

    public function getRegimesWithRestaurant($limit){

        $qb=$this
            ->createQueryBuilder('r')
            ->leftJoin('r.regimes','reg')
            ->addSelect('reg')
            ->setMaxResults($limit)
        ;

        return $qb
            ->getQuery()
            ->getResult()
            ;

    }

    public function getValidQueryBuilder()
    {
        return $this
            ->createQueryBuilder('r')
            ->where('r.valide = :valide')
            ->setParameter('valide', true)
            ;
    }
}
