<?php

namespace AppBundle\ShowFinder;

interface ShowFinderInterface {

  public function findByName($query);

  public function getName();
}
