<?php

  namespace Modules\API\APIInterface;

  /**
   * interface get product data API XML by product id
   */
  interface ProductByIdInterface
  {
    /**
     * @api
     * @param string $id Product id.
     * @return string product data
     */
    public function getProductById($id);
  }


 ?>
