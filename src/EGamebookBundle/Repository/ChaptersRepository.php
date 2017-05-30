<?php

namespace EGamebookBundle\Repository;

/**
 * ChaptersRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ChaptersRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function getChapters(){
        $qb = $this->createQueryBuilder('c');
//        $sub = $qb;

      $qb->select('c')
          // http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/query-builder.html
// EXPR CLASS !!!!!!!!!!

//        <?php
//// $qb instanceof QueryBuilder
//
//// example8: QueryBuilder port of:
//// "SELECT u FROM User u WHERE u.id = ? OR u.nickname LIKE ? ORDER BY u.name ASC" using Expr class
//$qb->add('select', new Expr\Select(array('u')))
//    ->add('from', new Expr\From('User', 'u'))
//    ->add('where', $qb->expr()->orX(
//        $qb->expr()->eq('u.id', '?1'),
//        $qb->expr()->like('u.nickname', '?2')
//    ))
//    ->add('orderBy', new Expr\OrderBy('u.name', 'ASC'));

        //class Expr {}
        // Example - $qb->expr()->not($qb->expr()->eq('u.id', '?1'))
//    public function not($restriction); // Returns Expr\Func instance



        ;
        return $qb;
    }
}

//            ->where('c.id != :data.id')
//            ->setParameter('data.id', false)


//$qb  = $this->_em->createQueryBuilder();
//$sub = $qb;
//
//$sub = $qb->select('arl')
//    ->from('$MineMyBundle:MineAssetRequestLine', 'arl')
//    ->where($qb->expr()->eq('arl.asset_id',1));
//
//$linked = $qb->select('rl')
//    ->from('MineMyBundle:MineRequestLine', 'rl')
//    ->where($qb->expr()->notIn('rl.request_id',  $sub->getDQL()))
//    ->getQuery()
//    ->getResult();

//        $qb->select('c')
//            ->where('chapter.id = :data.id')
//            ->setParameter('data.id', FALSE );

//SELECT *
//FROM Guide where id NOT IN (
//    SELECT Guide.id
//         FROM Guide
//         INNER JOIN GuideAvailability ON Guide.id = GuideAvailability.guideId
//         WHERE GuideAvailability.startDate IN (1377946800)
//         GROUP BY GuideAvailability.guideId
//         HAVING COUNT(DISTINCT GuideAvailability.id) = 1
//      )