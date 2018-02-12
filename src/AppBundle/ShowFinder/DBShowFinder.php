<?php

namespace AppBundle\ShowFinder;


class DBShowFinder implements ShowFinderInterface {

  public function findByName($query) {
    return [
      'name' => 'Walking Dead'
    ];
  }

  public function getName() {
    return 'Local Database';
  }

}
