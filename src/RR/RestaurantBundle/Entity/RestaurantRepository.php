<?php

namespace RR\RestaurantBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\ORM\Query\ResultSetMapping;

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

    public function myfindOne($id){

        $query = $this
            ->createQueryBuilder('r')
            ->select('r')
            ->leftJoin('r.regimes','reg')
            ->addSelect('reg')
            ->leftJoin('r.adresse','adr')
            ->addSelect('adr');

        return $query;
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
            ->orderBy('r.id')
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
    public function searchRestaurants($data,$nbMaxResults){

        $query = $this
            ->createQueryBuilder('r')
            ->select('r')
            ->leftJoin('r.regimes','reg')
            ->addSelect('reg')
            ->leftJoin('r.address','adr')
            ->addSelect('adr');

        if($data['vegetarien']==1){
           $query->where('reg.id = 1');
                if($data['vegetalien']==1){
                    $query->orWhere('reg.id = 2');
                }
                if($data['gluten']==1){
                    $query->orWhere('reg.id = 3');
                }
                if($data['diabete']==1){
                    $query->orWhere('reg.id = 4');
                }
                if($data['Cholesterol']==1){
                    $query->orWhere('reg.id = 5');
                }
        }else if($data['vegetalien']==1){
            $query->where('reg.id = 2');
                if($data['gluten']==1){
                    $query->orWhere('reg.id = 3');
                }
                if($data['diabete']==1){
                    $query->orWhere('reg.id = 4');
                }
                if($data['Cholesterol']==1){
                    $query->orWhere('reg.id = 5');
                }
        }else if($data['gluten']==1){
            $query->where('reg.id = 3');
                if($data['diabete']==1){
                    $query->orWhere('reg.id = 4');
                }
                if($data['Cholesterol']==1){
                    $query->orWhere('reg.id = 5');
                }
        }else if($data['diabete']==1){
            $query->where('reg.id = 4');
                if($data['Cholesterol']==1){
                    $query->orWhere('reg.id = 5');
                }
        }else if($data['Cholesterol']==1){
            $query->where('reg.id = 5');
        }
        $query->andWhere(
            '( 6380 * Acos(cos(radians(:lat))' . //haversine formula
            '* cos( radians( adr.latitude ) )' .
            '* cos( radians( adr.longitude )' .
            '- radians(:lng) )' .
            '+ sin( radians(:lat) )' .
            '* sin( radians( adr.latitude ) ) ) ) < :distance')
            ->setParameter('distance', $data['radius'])
            ->setParameter('lat', $data['lat'])
            ->setParameter('lng', $data['lng']);


        $query
            // Ainsi que le nombre d'annonce à afficher sur une page
            ->setMaxResults($nbMaxResults)
        ;

        // Enfin, on retourne l'objet Paginator correspondant à la requête construite
        // (n'oubliez pas le use correspondant en début de fichier)
        return $query
            ->getQuery()
            ->getResult()
            ;

    }
}
