<?php

/**
 * @class           WPDKSampleFirstViewController
 * @author          wpXtreme team
 * @copyright       Copyright (C) 2013 wpXtreme Inc. All Rights Reserved.
 * @date            2013-07-11
 * @version         1.0.0
 *
 */
class WPDKSampleFirstViewController extends WPDKViewController {

  /**
   * Create an instance of WPDKSampleFirstViewController class
   *
   * @brief Construct
   *
   * @return WPDKSampleFirstViewController
   */
  public function __construct()
  {
    // Build the container, with default header
    parent::__construct( 'my-view-controller-1', 'WPDK Sample Plugin #1 - Output of first view controller' );
  }

  public function display()
  {

    // call parent display to build default page structure
    parent::display();

    // show custom content
    ?>
    <h3>View Controller ID: <?php echo $this->id ?></h3>
    <div>This is a generic content of first view controller.</div>
  <?php
  }

}

/**
 * @class           WPDKSampleSecondViewController
 * @author          wpXtreme team
 * @copyright       Copyright (C) 2013 wpXtreme Inc. All Rights Reserved.
 * @date            2013-07-11
 * @version         1.0.0
 *
 */
class WPDKSampleSecondViewController extends WPDKViewController {

  /**
   * Create an instance of WPDKSampleSecondViewController class
   *
   * @brief Construct
   *
   * @return WPDKSampleSecondViewController
   */
  public function __construct()
  {
    // Build the container, with default header
    parent::__construct( 'my-view-controller-2', 'WPDK Sample Plugin #1 - Output of second view controller' );
  }

  public function display()
  {

    // call parent display to build default page structure
    parent::display();

    // show custom content
    ?>
    <h3>View Controller ID: <?php echo $this->id ?></h3>
    <div>This is a generic content of second view controller.</div>
  <?php
  }

}
