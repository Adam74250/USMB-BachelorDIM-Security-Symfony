<?php

namespace AppBundle\ShowFinder;

class ShowFinder {
  private $finders;

  public function searchByName() {
    $tmp = array();

    foreach($this->finders as $finder) {
      $tmp[$finder->getName()] = $finder->findByName($query);
    }

    return $results;
  }

  public function addFinder(ShowFinderInterface $finder) {
    $this->finders[] = $finder;
  }

}
