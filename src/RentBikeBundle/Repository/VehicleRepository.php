<?php

namespace RentBikeBundle\Repository;


use Doctrine\ORM\EntityRepository;

class VehicleRepository extends EntityRepository
{
    public function listVehicle()
    {
        $query = $this->createQueryBuilder('v')
		->select('v');
				
		$query = $query->getQuery();
		$result = $query->getArrayResult();

		return $result;

    }
}
